<?PHP
//
//    HyperVM, Server Virtualization GUI for OpenVZ and Xen
//
//    Copyright (C) 2000-2009     LxLabs
//    Copyright (C) 2009          LxCenter
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
?>

<?php

include_once "htmllib/lib/include.php";

switchserver_main();

function switchserver_main()
{

	global $argc, $argv;
	global $gbl, $sgbl, $login, $ghtml;

	//sleep(60);
	initProgram("admin");

	if ($argc === 1) {
		print("Usage: $argv[0] --class= --name= --v-syncserver= \n");
		exit;
	}


	try {
		$opt = parse_opt($argv);

		$param = get_variable($opt);

		dprintr($param);

		$class = $opt['class'];
		$name = $opt['name'];

		if (lx_core_lock("$class-$name.livemigrate")) {
			exit;
		}

		$object = new $class(null, 'localhost', $name);
		$object->get();
		if ($object->dbaction === 'add') {
			throw new lxException ("no_object", '', '');
			exit;
		}

		if (!$object->syncserver) {
			print("No_synserver...\n");
			throw new lxException ("no_syncserver", '', '');
			exit;
		}

		if ($param['syncserver'] === $object->syncserver) {
			print("No Change...\n");
			throw new lxException ("no_change", '', '');
			exit;
		}



		$driverapp_old = $gbl->getSyncClass('localhost', $object->syncserver, $object->getClass());
		$driverapp_new = $gbl->getSyncClass('localhost', $param['syncserver'], $object->getClass());

		$oldserver = $object->syncserver;
		$newserver = $param['syncserver'];

		if ($driverapp_new !== $driverapp_old) {
			throw new lxException ("the_drivers_are_different_in_two_servers", '', '');
		}

		$actualserver = getFQDNforServer($newserver);

		setup_ssh_channel($oldserver, $newserver, $actualserver);


		$ssh_port = db_get_value("sshconfig", $newserver, "ssh_port");
		if (!$ssh_port) { $ssh_port = "22" ; }

		$res = rl_exec_get(null, $oldserver, "exec_vzmigrate", array($object->vpsid, $actualserver, $ssh_port));

		list($ret, $error)  = $res;


		if ($ret !== 0) {
			throw new lxException ("vzmigrate_failed_due_to:$error", '', '');
		}

		$object->olddeleteflag = 'done';
		$object->syncserver = $newserver;

		$object->username = null;
		$object->makeSureTheUserExists();
		$object->setUpdateSubaction();
		$object->write();


	} catch (exception $e) {
		print($e->getMessage());
		/// hcak ahck... Chnage only the olddelete variable which is the mutex used for locking in the process of switch. The problem is we want to totally bail out if the switchserver fails. The corect way would be save after reverting the syncserve to the old value, but that's a bit risky. So we just use a hack to change only the olddeleteflag; Not a real hack.. This is the better way.

		$message = "{$e->getMessage()}";


		$message = str_replace("'", "", $message);
		write_to_object($object, $message, $param['syncserver']);
		$fullmesage = "Switch of {$object->getClass()}:{$object->nname} to {$param['syncserver']} failed due to {$e->getMessage()}";
		log_switch($fullmesage);

		mail($login->contactemail, "Switch Failed:", "$fullmesage\n");
		print("\n");
		exit;
	}
	mail($login->contactemail, "Switch Succeeded", "Switch Succeeded {$object->getClass()}:$object->nname to {$param['syncserver']}\n");

}



function write_to_object($object, $message, $syncserver)
{
	$sq = new Sqlite(null, $object->__table);
	$message = str_replace("'", "", $message);
	$sq->rawQuery("update {$object->__table} set olddeleteflag = 'Switch to $syncserver failed due to $message' where nname = '{$object->nname}'");
}
