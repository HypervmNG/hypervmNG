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
chdir("../../");

include_once "htmllib/lib/displayinclude.php";
include_once "htmllib/lib/portmonitorlib.php";


monitor_remote_main();

function monitor_remote_main()
{
	global $gbl, $sgbl, $login, $ghtml;
	ob_start();

	// @var $login client
	$val = $ghtml->frm_rmt;
	initprogram('admin');

	dprint($val);
	$rmt = unserialize(base64_decode($val));


	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$rem = new Remote();
	$rem->exception = null;
	$rem->ddata = "hello";

	/*
	 if (!check_raw_password('client', $info->login, $info->password)) {
		$rem->exception = new lxexception('license_login_failed', 'login');
		print_and_exit($rem);
		}
		*/

	$servername = $_SERVER['REMOTE_ADDR'];
	$sv = new MonitoringServerStatus(null, null, $servername);
	$sv->get();
	$sv->setUpdateSubaction();
	$sv->updatetime = time();
	$sv->write();

	if ($rmt->cmd === 'im_alive') {
		print_and_exit($rem);
	}



	if ($rmt->cmd === 'get_list') {
		$arlist = null;
		$login->loadAllObjects('monitorserver');
		$mlist = $login->getList('monitorserver');
		foreach($mlist as $ml) {
			if (!$ml->isOn('status')) {
				continue;
			}

			$array['nname'] = $ml->nname;
			$array['servername'] = $ml->servername;
			$arlist[$ml->nname] = $array;
			$plist = $ml->getList('monitorport');
			foreach($plist as $p) {
				$parray['nname'] = $p->nname;
				$parray['portnumber'] = $p->portnumber;
				$arlist[$ml->nname]['monitorport_l'][] = $parray;
			}
		}
		$rem->ddata = $arlist;
		print_and_exit($rem);
	}



	if ($rmt->cmd === 'my_name') {
		$rem->ddata = $_SERVER['REMOTE_ADDR'];
		print_and_exit($rem);
	}


	if ($rmt->cmd !== 'set_list') {
		exit;
	}


	$slist = $rmt->ddata;


	foreach($slist as $ll) {
		foreach($ll as $l) {
			$nname = $servername . "___" . $l['portnname'];
			$test = new PortStatus(null, null, $nname);
			$test->get();
			// hack hack.. Temproarly forcibly reseting error string.
			$test->errorstring = "";
			if ($test->dbaction === 'add') {
				$test->create($l);
			} else {
				$test->create($l);
				$test->dbaction = 'update';
			}

			$test->parent_clname = createParentName('monitorport', $l['portnname']);
			$test->servername = $servername;
			$test->updatetime = time();
			$test->write();
			port_send_email($test);
		}
	}
	do_send_email();

	$val = base64_encode(serialize($rem));
	print($val);
	flush();
	exit;


}



