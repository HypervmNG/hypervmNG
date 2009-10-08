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

class portstatus extends lxdb {


	static $__desc = array("S", "",  "Port Status");
	static $__desc_nname =  array("n", "",  "server_name");
	static $__desc_portnumber =  array("n", "",  "port");
	static $__desc_portnname =  array("n", "",  "Port Description");
	static $__desc_errorstring =  array("", "",  "Last Error");
	static $__desc_portstatus =  array("e", "",  "Port Status");
	static $__desc_portstatus_v_on =  array("e", "",  "On");
	static $__desc_portstatus_v_off =  array("e", "",  "Off");
	static $__desc_updatetime =  array("", "",  "Updated On");
	static $__desc_servername =  array("", "",  "Updated By");
	static $__desc_alivestatus =  array("", "",  "Monitor Reported Alive At");
	static $__desc_monitoringserverstatus_o =  array("", "",  "Monitor Reported Alive At");

	static $__rewrite_nname_const = array("portnname", "servername");




	static function createListNlist($parent, $view)
	{
		$nlist['portstatus'] = '10%';
		$nlist['updatetime'] = '10%';
		$nlist['servername'] = '10%';
		$nlist['alivestatus'] = '10%';
		$nlist['errorstring'] = '100%';
		return $nlist;

	}

	function display($var)
	{
		if ($var === 'updatetime') {
			return date('Y-M-d:::H:i', $this->updatetime);
		}

		if ($var === 'alivestatus') {
			$v = $this->getObject('monitoringserverstatus');
			return date('Y-M-d:::H:i', $v->updatetime);
		}

		return $this->$var;
	}

	static function initThisListRule($parent, $class)
	{
		return array('portnname', '=', "'{$parent->nname}'");
	}

}
