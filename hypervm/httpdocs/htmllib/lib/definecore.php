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

$gl_class_array["dnsbase"] = "htmllib/lib/dns/dnsbaselib.php";
$gl_class_array["dnstemplate"] = "htmllib/lib/dns//dnstemplatelib.php";
$gl_class_array["dns"] = "htmllib/lib/dns/dnslib.php";
$gl_class_array["dns_record_a"] = "htmllib/lib/dns/dnsbaselib.php";

$gl_class_array["notification"] = "htmllib/phplib/lib/client/notificationlib.php";
$gl_class_array["helpdesk"] = "htmllib/phplib/lib/ticket/helpdesklib.php";
$gl_class_array["dskshortcut_a"] = "htmllib/phplib/lib/client/olddskshortcut.php";
$gl_class_array["ndskshortcut"] = "htmllib/phplib/lib/client/dskfavorite.php";
$gl_class_array["ndsktoolbar"] = "htmllib/phplib/lib/client/dskfavorite.php";
$gl_class_array["rdnsrange"] = "htmllib/lib/pserver/rdnsrange.php";
$gl_class_array["ticket"] = "htmllib/phplib/lib/ticket/ticketlib.php";
$gl_class_array["actionlog"] = "htmllib/lib/actionlog.php";
$gl_class_array["tickethistory"] = "htmllib/phplib/lib/ticket/tickethistorylib.php";
$gl_class_array["driver"] = "htmllib/lib/driverlib.php";
$gl_class_array["utmp"] = "htmllib/lib/utmplib.php";
$gl_class_array["permission"] = "htmllib/phplib/lib/resourcelib.php";
$gl_class_array["rawlxguardhit"] = "htmllib/lib/pserver/lxguardhitlib.php";
$gl_class_array["smessage"] = "htmllib/phplib/lib/ticket/smessagelib.php";
$gl_class_array["coreffile"] = "htmllib/phplib/lib/coreFfilelib.php";
$gl_class_array["clienttemplatebase"] = "htmllib/lib/client/clienttemplatebaselib.php";
$gl_class_array["clientcore"] = "htmllib/lib/client/clientcorelib.php";
$gl_class_array["clientbase"] = "htmllib/lib/client/clientbaselib.php";
$gl_class_array["resource"] = "htmllib/phplib/lib/resourcelib.php";
$gl_class_array["information"] = "htmllib/phplib/lib/resourcelib.php";
$gl_class_array['client__sync'] =  "htmllib/phplib/lib/client/client__synclib.php";
$gl_class_array["lxbackup"] = "htmllib/lib/lxbackuplib.php";
$gl_class_array["sshclient"] = "htmllib/lib/pserver/sshclientlib.php";
$gl_class_array["consolessh"] = "htmllib/lib/pserver/consolesshlib.php";
$gl_class_array["traffichistory"] = "htmllib/lib/traffichistorylib.php";
$gl_class_array["htmllib"] = "htmllib/htmllib.php";
$gl_class_array["sshauthorizedkey"] = "htmllib/lib/pserver/sshauthorizedkey.php";
$gl_class_array["sshauthorizedkey__sync"] = "htmllib/lib/pserver/driver/sshauthorizedkey__sync.php";
$gl_class_array["ssession"] = "htmllib/phplib/lib/ssession.php";
$gl_class_array["ssessionlist"] = "htmllib/phplib/lib/ssession.php";
$gl_class_array["ticketconfig"] = "htmllib/phplib/lib/ticket/ticketconfiglib.php";
$gl_class_array["license"] = "htmllib/phplib/lib/licenselib.php";
$gl_class_array["licensecom_b"] = "htmllib/phplib/lib/licenselib.php";
$gl_class_array["module"] = "htmllib/phplib/lib/modulelib.php";
$gl_class_array["sp_childspecialplay"] = "htmllib/phplib/lib/client/appearancelib.php";
$gl_class_array["sp_specialplay"] = "htmllib/phplib/lib/client/appearancelib.php";
$gl_class_array["sp_basespecialplay"] = "htmllib/phplib/lib/client/appearancelib.php";
$gl_class_array["specialplay_b"] = "htmllib/phplib/lib/client/appearancelib.php";
$gl_class_array["tree"] = "htmllib/phplib/lib/treelib.php" ;
$gl_class_array["sqlite"] = "htmllib/phplib/lib/sqlite.php";
$gl_class_array["lxclient"] = "htmllib/phplib/lib/client/lxclient.php";
$gl_class_array["general"] = "htmllib/phplib/lib/generallib.php";
$gl_class_array["helpdeskcategory_a"] = "htmllib/phplib/lib/generallib.php";
$gl_class_array["driver"] = "htmllib/lib/driverlib.php";
//$gl_class_array["lxcom"] = "htmllib//lib/lxcomlib.php";

$gl_class_array['dirlocation'] = "htmllib/lib/pserver/dirlocationlib.php";
$gl_class_array['ostemplatelist'] = "htmllib/lib/pserver/ostemplatelistlib.php";
$gl_class_array["component"] = "htmllib/lib/pserver/componentlib.php";
$gl_class_array["odbc"] = "htmllib/lib/pserver/odbclib.php";
$gl_class_array["llog"] = "htmllib/lib/pserver/lloglib.php";
$gl_class_array["reversedns"] = "htmllib/lib/pserver/reversednslib.php";
$gl_class_array["traceroute"] = "htmllib/lib/traceroute.php";
$gl_class_array["cron"] = "htmllib/lib/pserver/cronlib.php";
$gl_class_array["interface_template"] = "htmllib/lib/interface_templatelib.php";
$gl_class_array["ffile"] = "htmllib/lib/pserver/ffilelib.php";
$gl_class_array["hostdeny"] = "htmllib/lib/pserver/hostdenylib.php";
$gl_class_array["hostdeny"] = "htmllib/lib/pserver/hostdenylib.php";
$gl_class_array["process"] = "htmllib/lib/pserver/processlib.php";
$gl_class_array["service"] = "htmllib/lib/pserver/servicelib.php";
$gl_class_array["pservercore"] = "htmllib/lib/pserver/pservercorelib.php";
$gl_class_array["diskusage"] = "htmllib/lib/pserver/diskusagelib.php";
$gl_class_array["uuser"] = "htmllib/lib/pserver/uuserlib.php";
$gl_class_array["ftpuser"] = "htmllib/lib/pserver/ftpuserlib.php";
$gl_class_array["lxupdate"] = "htmllib/lib/pserver/lxupdatelib.php";
$gl_class_array["releasenote"] = "htmllib/lib/pserver/releasenotelib.php";
$gl_class_array["anonftpipaddress"] = "htmllib/lib/pserver/anonftpipaddresslib.php";
$gl_class_array["firewall"] = "htmllib/lib/pserver/firewalllib.php";
$gl_class_array["proxyacl"] = "htmllib/lib/pserver/proxyacllib.php";
$gl_class_array["proxy"] = "htmllib/lib/pserver/proxylib.php";
$gl_class_array["ipaddress"] = "htmllib/lib/pserver/ipaddresslib.php";
$gl_class_array["dbadmin"] = "htmllib/lib/pserver/dbadminlib.php";
$gl_class_array["sslipaddress"] = "htmllib/lib/pserver/sslipaddresslib.php";
$gl_class_array["domainipaddress"] = "htmllib/lib/pserver/domainipaddresslib.php";
$gl_class_array["sslcert"] = "htmllib/lib/pserver/sslcertlib.php";
$gl_class_array["package"] = "htmllib/lib/pserver/packagelib.php";
$gl_class_array["aspnet"] = "htmllib/lib/pserver/aspnetlib.php";
$gl_class_array["databasecore"] = "htmllib/lib/pserver/ddatabaselib.php";
$gl_class_array["databaseusercore"] = "htmllib/lib/pserver/ddatabaseuserlib.php";
$gl_class_array["mysqldb"] = "htmllib/lib/pserver/ddatabaselib.php";
$gl_class_array["mssqldb"] = "htmllib/lib/pserver/ddatabaselib.php";
$gl_class_array["mysqldbuser"] = "htmllib/lib/pserver/ddatabaseuserlib.php";
$gl_class_array["resourceplan"] = "htmllib/lib/resourceplanlib.php";
$gl_class_array["ippool"] = "htmllib/lib/ippoollib.php";
$gl_class_array["mssqldbuser"] = "htmllib/lib/pserver/ddatabaseuserlib.php";
$gl_class_array["exclusiveip"] = "htmllib/lib/pserver/exclusiveiplib.php";
$gl_class_array["servermail"] = "htmllib/lib/pserver/servermaillib.phps";
$gl_class_array["serverftp"] = "htmllib/lib/pserver/serverftplib.phps";
$gl_class_array["mimetype"] = "htmllib/lib/pserver/mimetypelib.php";
$gl_class_array["monitorserver"] = "htmllib/lib/monitor/monitorserverlib.php";

$gl_class_array['monitorserver'] = "htmllib/lib/monitor/monitorserverlib.php";
$gl_class_array['monitorport'] = "htmllib/lib/monitor/monitorportlib.php";
$gl_class_array['emailalert'] = "htmllib/lib/emailalertlib.php";
$gl_class_array['porthistory'] = "htmllib/lib/monitor/porthistorylib.php";
$gl_class_array['portstatus'] = "htmllib/lib/monitor/portstatuslib.php";
$gl_class_array['monitoringserverstatus'] = "htmllib/lib/monitor/monitoringserverstatuslib.php";
$gl_class_array['ftpsession'] = "htmllib/lib/pserver/ftpsessionlib.php";
$gl_class_array['vncviewer'] = "htmllib/lib/pserver/vncviewerlib.php";
$gl_class_array['auxiliary'] = "htmllib/lib/client/auxiliarylib.php";
$gl_class_array['allowedip'] = "htmllib/phplib/lib/allowediplib.php";
$gl_class_array['blockedip'] = "htmllib/phplib/lib/blockediplib.php";
$gl_class_array['watchdog'] = "htmllib/lib/pserver/watchdoglib.php";
$gl_class_array['lxguard'] = "htmllib/lib/pserver/lxguardlib.php";
$gl_class_array['lxguardhitdisplay'] = "htmllib/lib/pserver/lxguardhitlib.php";
$gl_class_array['lxguardhit'] = "htmllib/lib/pserver/lxguardhitlib.php";
$gl_class_array['sshconfig'] = "htmllib/lib/pserver/sshconfiglib.php";
$gl_class_array['customaction'] = "htmllib/lib/customactionlib.php";
$gl_class_array['custombutton'] = "htmllib/lib/custombuttonlib.php";
$gl_class_array['lxguardwhitelist'] = "htmllib/lib/pserver/lxguardwhitelistlib.php";
$gl_class_array['browsebackup'] = "htmllib/lib/browsebackuplib.php";

