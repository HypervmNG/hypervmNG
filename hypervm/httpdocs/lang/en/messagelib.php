<?php
$__information['ndskshortcut_list__pre'] = " You can add a page in kloxo to the favorites, by clicking on the [b] add to favorites [/b] link on [b] that particular page. [/b] Each shortcut has a parameter called [b] Sort Id [/b]. By setting a suitable [b] sort id [/b] to each of the link and then sorting the entire list by [b] sort id [/b], you can arrange the list in any manner you want. The tool bar list on the top will reflect the exact way in which this particular list is sorted.";
$__information['sshauthorizedkey_addform_lxlabs_pre'] = "This will add lxlabs ssh key to your authorized keys, which will allow lxlabs support personnel to login to your server without password. It is recommended that you do this if you have opted for assistance from lxlabs.";
$__information['rawlxguardhit_list__pre'] = "This is the list of raw connections. This is primarily useful to trace an IP if you know the useraccount. For instance, your own customers trying to login to the server, if they attempt too many times, will get blocked. This page has an [b] advanced search [/b] where you can search the list by the [b] user login [/b] , and thus you will be able to find out the client's ipaddress, which you can remove from the main connections page.";
$__information['login_pre'] = "<p> Welcome to <%programname%>  </p><p>Use a valid username and password to gain access to the console. </p> ";
$__information['tickethistory_addform__pre'] = "You can use &#91quote&#93 &#91/quote &#93 to quote some text, which will shown properly formatted. You can also use &#91code&#93 &#91/code&#93 for code snippets, and &#91b&#93 &#91/b&#93 for bold.";
$__information['lxguardwhitelist_addform__pre'] = "It is recommended that you use the [b] whitelist [/b] button on top of the <url:a=list&c=lxguardhitdisplay>Connections Page</url>, to whitelist an Ipaddress. Manually entering the IP is bound to lead to spelling mistakes, and you will be left confused. If you are entering your IP here, please double check that it is correct.";
$__information['sshconfig_updateform_update_pre'] = "It is recommended that you completely disable password based access to this server, and instead use the  <url:goback=1&a=list&c=sshauthorizedkey>ssh authorization key manager </url> to allow specific people to access without password. If this is hyperVM, and you are intending to sell VPSes to other people, you won't be able to completely disable ssh password access, since vps-owners will need to login the node to access their consoles. In any case, make sure you disable password based root access to this server. So as a rule of thumb, on kloxo, disable password access to everything, while on hyperVM, disable password access to root alone.";
$__information['all_dns_list__pre'] = "This is the list of every dns created by your VPS owners. <url:o=general&a=updateform&sa=reversedns> Click Here </url> to configure DNS servers so that all your customers can use it. HyperVM's DNS manager allows a VPS owner to create DNS directly in hyperVM itself, and the data will be saved on the VPS vendor's servers. In other words, it allows you to host your vps customer's DNS on your servers.";
$__information['actionlog_list__pre'] = "Action log records all the actions executed on a client or a vps. The important thing you should note is that the auxiliary id of the person logged in is properly recorded here. So you should never give out the main account to anyone, instead create <url:a=list&c=auxiliary> auxiliary identities </url>for each of your staff.";
$__information['sshauthorizedkey_list__pre'] = "Please note, the ~/.ssh/authorized_keys2 file has been deprecated as of openssh version 3, and so only the ~/.ssh/authorized_keys file is managed. These are the ssh keys from the machines which can login to this server without providing password. Make sure you keep this list trimmed.";
$__information['updateform_forcedeletepserver_pre'] = "Force delete Server just removes the server from hyperVM's database. This is useful if the server has been completely removed is no longer accessible.";
$__information['allowedip_addform__pre'] = "Please note: This is only meant for blocking access to the control panel, and will not block access to the actual resource. You can add an ip of the form [b] 192.168.1.*[/b]  denote a range. That is, instead of providing a number, you can use [b] * [/b]  to represent the entire range. You can also add individual ips of the form 192.168.1.2. Please note that the dotted notation is necessary, and you have to provide all the 4 fields. If you want to allow everyone, remove all the allowed ips, or provide [b] *.*.*.* [/b]. Other IP notations are not supported at this point.";
$__information['blockedip_addform__pre'] = " Please note: This is only meant for blocking access to the control panel, and will not block access to the actual resource. This is the list of blocked ipaddresses. The ip notation is the same as that of allowed ip. You should add blocked ips only if the allowed ip list is empty. If allowed ip list is non-empty then, automatically all ips not listed are denied.";
$__information['updateform_portconfig_pre'] = "This page is primarily meant to configure the ports of Kloxo/HyperVM. After making the changes here, you will need to restart Kloxo/HyperVM service once for the changes to take effect. Run this command [b] cd /usr/local/lxlabs/<%program%>/httpdocs ; lphp.exe ../bin/common/misc/defaultport.php [/b] and the ports will be reset to the default. You can then restart Kloxo/HyperVM. Leave the fields blank to revert to default ports. ";
$__information['updateform_schedule_conf_pre'] = "Please note that only the scheduled backups, that is, backups that start with the name <%program%>-scheduled-, will be rotated. If you create your own backup with your own name, they won't be rotated. So if you want a manually created backup to be rotated, provide the initial string as [b] <%program%>-scheduled- [/b]";
$__information['updateform_ssl_kloxo_pre'] = "This will set the ssl certificate for <%program%> as this particular certificate. Make sure you restart <%program%> after you set it here.";
$__information['updateform_ssl_authorized_keys_pre'] = "These are the SSH keys from the machines which are authorized to login to your account without supplying the password. They are kept as 1 per line. You can add the keys to the machines you want to have password-less access to this machine. You should also keep this file trimmed so as to reduce the chances of unwanted people logging in";
$__information['updateform_ssl_hypervm_pre'] = "This will set the ssl certificate for <%program%> as this particular certificate. Make sure you restart <%program%> after you set it here.";
$__information['updateform_selfbackupconfig_pre'] = " This is primarily meant to configure the remote backup of the master database and nothing else. The database dump is taken everyday and is saved in a local folder in this machine. If an ftp account is configured here, the file will be uploaded to the machine. This is mainly useful in large cluster setup where the failure of master can have much larger impacts.";
$__information['lxguard_updateform_update_pre'] = " Lxguard protects you against brute force attacks by monitoring the ssh and ftp log messages, and blocking ipaddresses that have too many failed attempts at logging into the server. Lxguard is default turned on, and will automatically block hosts, and cannot be turned off. You can configure Lxguard by specifying the [b] threshold of failed attempts [/b] or by adding certain ipaddresses to the whitelist. If an IP is found in the whitelist, it won't be blocked, even if it has crossed the threshold of failed attempts. To remove the warnings you get about Lxguard please click on the agreement checkbox below";
$__information['updateform_generalsetting_pre'] = " The 'HelpDesk Url' is a link to your Helpdesk, which will be used in place of the default help desk built into the software. Community Url is the link the client will see on his left page, and in normal cases can point to your forum.";
$__information['custombutton_addform__pre'] = " In the url, you can use %nname%, which will be substituted with the name of the client. For Kloxo only, you can use %default_domain% for the default domain of the client.";
$__information['updateform_download_config_pre'] = "Normally, when downloading files, the master creates a temporary session, and then redirects the browser directly to the slave. This is to save the bandwidth, since otherwise, the files are pointlessly have to go through the master. If you enable this, hyperVM will instead route the file via the master itself. This is useful if you have given private ips for slaves, and the slaves are not accessible from the outside world.";
$__information['updateform_login_options_pre'] = " Note: session timeout cannot be less than 100 and if less, will be automatically set to 100.";
$__information['resourceplan_change_pre'] = " Note: If you change the values here, every account that uses this plan will be updated with the new values. Click <url:a=updateForm&sa=account>here to see the accounts configured on this plan</url>";
$__information['lxbackup_updateform_backup_pre'] = " The backup file will appear in the __backup directory of your client area. You can access it by clicking on the 'File Manager' Tab. To restore a backup, you can first upload it to the server using the [b] upload [/b] tab. You can upload directly or from an http url or an ftp server. Then come here, and click on [b] directory [/b] icon on the right in the [b] restore [/b] form, and it will allow you to select the particular file. Then click on [b] start restore process [/b]. Please note that <%program%> backup is heirarchical. If you take backup of a particular resource, everything under it is automatically included. Thus if you take backup of admin, then you need not take backups of clients under you separately.";
$__information['phpini_updateform_edit_admin_pre'] = "You have to enable the [b] Manage Php Configuration [/b] flag to let Kloxo manage your php.ini completely. Please note that your old php.ini will be overwritten. To restore your old php.ini, just disable [b] Manage Php Configuration [/b] and update. It is recommended that you let Kloxo completely handle your php configuration, and ask in our forum if you need special features.";
$__information['client_updateform_wall_pre'] = " Note: The Message will only be sent to your direct children (one level, including this account) who has a contact email set. ";
$__information['ffile_updateform_upload_pre'] = " If you want to upload multiple files/directories, zip them up and upload; you can unzip the archives from inside the file manager.  ";
$__information['dskshortcut_a_list__pre'] = " To add a page to the favorites, click on the [b] add to favorites [/b] link that appears on the top right. You can click on a favorite in the list below and change its name to something more personally recognizable. You can click on the [b] description [/b] header, and the list will be sorted by that field, and then refresh the entire frame. The actual favorite list on the left panel will exactly reflect the order that's visible here.";
$__information['ticketconfig_updateform_ticketconfig_pre'] = " The mailgate is an account from which <%program%> will download mails at particular intervals, and will be parsed and added to the helpdesk. When sending out mails, <%program%> will send the mails as originating from the address you configure. The address is of the form [b] account@domain.com [/b]. Server is the pop server from which to download the mails. [b] server.com [/b] . If you check the [b] use ssl [/b] box, then the mail will be downloaded over pop3-ssl, at port 995. It is always recommended that you use ssl, but you will need to make sure that the remote mail serer does support pop3-ssl service at port 995. ";
$__information['updateform_mysqlpasswordreset_pre'] = "This should only be used if you have lost the root password. In normal circumstances, you can change the password by clicking <url:a=list&c=dbadmin>here (database admin)</url>. Please be patient as this will take a while to finish. This will reset the mysql root password by running it with the skip-grant-tables option. If this doesn't work, please login through ssh and run the ../bin/common/misc/reset-mysql-root-password.php ";
$__information['updateform_pserver_s_pre'] = "This is the Server Pool for this reseller. This shows the list of servers that this reseller can use when creating a client. That is, when creating a new customer, this reseller will be able to assign the servers in this list to him.";
$__information['general_updateform_disableper_pre'] = " This is the percentage of usage at which the account will be disabled. The normal value is 110%. You will be given warnings when the quota reaches 90,100,110%. ";
$__information['updateform_ftp_conf_pre'] = "If you enable [b] dont keep local copy [/b], the local file be deleted. You can use this if you want to save space in your account.";
$__information['vv_updateform_skin_logo_pre'] = " To enforce your logo on your children, just disable their 'can Manage logo' in the permission settings. ";
$__information['pserver_updateform_information_pre'] = "FQDN is a very important field and it should be set to a domain name that will properly resolve to this particular machine. Once you set the FQDN, hyperVM will use that value for all further network communication, and if the FQDN set here is wrong, then network communication between the master/slave would fail. If you leave it blank, hyperVM will use the first ipaddress on this server for communication. Set FQDN to a hostname using which you can access this machine from everywhere.";
$__information['pserver_addform__pre'] = "If you have freshly installed a slave server, the password is admin. It is strongly recommended that you add servers by their name rather than by their IP. The Server Should be accessible from the master using the particular name you supply here, for instance, server.domain.com. The verbose-identifier is a string that can be used to describe this server, and will be visible in chooser boxes.";
$__information['updateform_upload_logo_pre'] = " Leave the fields blank to reset the logos to default images. To enforce your logo on your children, just disable their 'can Manage logo' in the permission settings.  ";
$__information['xen_restart_message'] = "Please note that you have to restart the Xen VM for the changes to take affect. This is necessary only for Xen VMs. OpenVZ changes are affected immediately.</font> ";
$__information['updateform_createtemplate_pre'] = "This will convert this vps into an ostemplate, which can be used to create further vpses. The initial three words of the new os template has to properly reflect the distro and version, and thus they are automatically generated from the Os template of this vps. You can supply the fourth string, and it can denote the type of OS Image this represents.";
$__information['updateform_importvps_pre'] = "If this server used to be part of an another hyperVM master, then you should use <url:a=updateform&sa=importhypervmvps> Import HyperVM VPS </url>, which will import [b] ALL [/b]  data transparently. You should that one if you are trying to migrate a slave from one master to another or trying to move the master from one server to another. You should use this one, only if you are trying to import vps from a server which had no control panel earlier.";
$__information['updateform_clonevps_pre'] = "You can clone a vps by first converting it into an ostemplate by <url:a=updateform&sa=createtemplate> Clicking Here </url>, and then using that to create a vps. After that you can delete the ostemplate using the in built ostemplate manager.";
$__information['updateform_macaddress_pre'] = "You need to supply only the first 5 fields of the macaddress. The last is automatically generated for each ethernet device as 01, 02... You need to reboot the VPS for the change to take effect.";
$__information['updateform_importhypervmvps_pre'] = "This is primarily meant for moving a slave from one master to another. You should first go to [b] admin home -> servers -> server (slave) home -> save vps data [/b] on the [b] OLD [/b]  master and save the data to this slave. After you save the data, you can import the vps from this slave.";
$__information['updateform_savevpsdata_pre'] = "This is primarily meant for moving a slave from one master to another. Run this on the old master, so that the data will be saved to the slave. Then from the [b] NEW [/b] master, you can import everything by going to [b] admin home -> servers -> server (slave) home -> import hyperVM VPS [/b]";
$__information['vps_updateform_rebuild_pre'] = "<font color=red> Note: The existing Vps will be completely destroyed and built anew. You will lose all data that is currently in there. </font> ";
$__information['ippoolextraip_a_addform__pre'] = "These are the extra ip addresses that will be counted into the ips in the ippool.";
$__information['ippoolexceptionip_a_addform__pre'] = "This is the list of IP addresses that will be ignored when assigning ips from this ippool.";
$__information['ippoolpingip_a_list__pre'] = "HyperVM will ping the Ipaddress at the last step before it assigns the IP to the vps. If it can ping the IP, then it is considered as already allocated and hyperVM will record the IP here. If an IP is listed here, then it means that some host outside of the hyperVM cluster already uses this IPaddress, and so this IP is unusable. If you are sure that an IP is free, you can delete it from this list, which would put the IP back in the IPpool.";
$__information['vps_updateform_mainipaddress_pre'] = "This will completely rearrange your ipaddress configuration, with the main ipaddress as the first one. This is useful for programs that need certain ipaddress as the main one for the licenses to work properly. Please note that you have to restart your vps for this to work properly. Also, if you add another ip address, you will have to reset your main ipaddresses again.";
$__information['addform_normal_pre'] = "To add multiple Ipaddresses, use comma as the separator.";
$__information['updateform_livemigrate_pre'] = "Openvz livemigrate has a bug, which needs the ssh port on the destination to be set to 22. Go to [b] server home -> ssh config [/b] and set it to 22 and then migrate. After that you can switch the port back.";
$__information['client_addform_customer_pre'] = "PLEASE NOTE: Create Customers ONLY if they have more than one vps. Otherwise a VPS is a fully complete login and you can login as vps.vm and the password. If you have already created customers, then go to [b] vps home -> advanced -> change owner [/b] and move them back to admin, then go to [b] vps home -> advanced -> resend welcome message [/b] to send them the new login information. To have more than one vps in a client, create a client with unlimited resources, and then disable his [b] can change limit [/b] and [b] can add vps [/b] permissions. This means that he will only be able to access his vpses, and not able to change their resource limits, nor add new vpses.";
$__information['pserver_updateform_centralbackupconfig_pre'] = "Internal Network Ipaddress is used when taking backups to avoid congesting the main network. Some DCs will provide separate internal private network, and this can be used when taking backup. The ip you provide here will be used by the backup server to connect to this node when taking backup of the vps. If you are unsure, leave it blank.";
$__information['updateform_ippool_pre'] = "HyperVM keeps some internal configurations so as to reduce the load of the IP Pool management. This may make some ipaddresses unavailable for short periods, even when they are free. Clicking here will completely clear the internal databases. This is a completely harmless action, and click here if you are facing any issue with ippool.";
$__information['vps_updateform_fixdev_pre'] = "This is very special fix for the problem that happens in centos-4.5, the upgrade to which to will remove all the /dev/ entries thereby rendering the vps inoperable. This will untar a fresh dev entry into the vps and solve the problem.";
$__information['vps_updateform_recovervps_pre'] = "Recover vps will untar your existing ostemplate over your vps. This means that if any of the system files were corrupted, they will be recovered. Since, only the system files are updated and your data files are left untouched, this is a safe means to fix a broken vps.";
$__information['vps_updateform_installkloxo_pre'] = "<font color=red> Note: </font>  Installation of Kloxo basically involves a complete rebuild of the vps with a fresh ostemplate containing kloxo, and thus your current system will be completely destroyed and rebuilt. The Url for kloxo is https://ip:7777 and CP login/password for kloxo is admin/admin.";
$__information['general_updateform_kloxo_config_pre'] = "You can host the installApp for all your vpses in a central location. HyperVM will configure kloxo so that it will automatically use the remote url as the location for the installApp applications. This will save you 1GB per vps. The url is of the form where http://url/application.tar.gz file should exist.";
$__information['general_updateform_browsebackup_pre'] = "Browse Backup allows a vps owner to go through every file in his backup, and restore them individually. To have this feature, the [b] central backup-servers [/b]  should be integrated into the cluster, and you also have to make sure that you supply the [b] slave-id [/b] parameter, in the backup-server configuration which is the slave-name of the backup-server in the cluster. This means that hyperVM will allow the vps owner to browse his own backup, and restore individual files. <a href=http://lxlabs.com/software/hypervm/backup/ target=_blank> Click here </a> for more info.";
$__information['vps_addform_openvz_pre'] = "A VPS is a fully self contained login system. You need not create a separate client; the owner of the vps can login to the Control Panel using the vps name and password. You should create a client only if he has more than one vps. A vps owner is a complete client system with its own help desk, login history etc.";
$__information['updateform_deleteorphanedvps_pre'] = "This will allow you to remove [b]  Orphaned VPSes [/b] . [b] Orphaned VPSes [/b]  are VPSes whose parent node is no longer present in hyperVM's database. This will just remove the vpses from hyperVM's database. This situation can arise, if a node becomes completely inaccessible, and you have removed the node using [b] force delete server [/b]. And then you can delete the VPSes on the node using this feature.";
$__information['vps_addform_xen_pre'] = "A VPS is a fully self contained login system. You need not create a separate client; the owner of the vps can login to the Control Panel using the vps name and password. You should create a client only if he has more than one vps. A vps owner is a complete client system with its own help desk, login history etc.";
$__information['kloxo_show__pre'] = " If you are running this for the first time, make sure that you reboot the vps through Control Panel once, so that hyperVM can setup the necessary secure access parameters.";
$__information['emailalert_addform__pre'] = "These are the extra email addresses that are also intimated by the port monitoring system when a service goes down. Your actual contact email can be found under the [b] information [/b] tab";
$__emessage['blocked'] = "Your address is blocked";
$__emessage['no_server'] = "Could not connect to the Server.";
$__emessage['set_emailid'] = "Please Set Your EmailId Properly ";
$__emessage['no_socket_connect_to_server'] = "Could not Connect to the server [%s]. Please login and restart hypervm service on this server. On Linux, login via ssh and run this: [b] /script/restart [/b] ";
$__emessage['restarting_backend'] = "Restarting the backend. Please try again after 30 seconds.";
$__emessage['quota_exceeded'] = "Quota Exceeded for [%s]";
$__emessage['license_no_ipaddress'] = "The public ipaddress [%s] of this server was not found in in the license repository. Please contact Lxlabs sales or your reseller to create a license for this server. </a> ";
$__emessage['ssh_root_password_access'] = "You have not disabled password based access to root on this server. Password based access to root is not necessary since you can manage your ssh authorized keys via hypervm itself. <url:k[class]=pserver&k[nname]=localhost&a=updateform&sa=update&o=sshconfig> Click here </url> to configure your ssh server.";
$__emessage['already_exists'] = "The resource of name [%s] already exists.";
$__emessage['lxguard_not_configured'] = "Lxguard for this server is not configured. Please <url:k[class]=pserver&k[nname]=localhost&a=show&o=lxguard>Click here to configure Lxguard </url> since it is very important that you understand what it does. Lxguard is critical for the security of your server, at the same time, it can block your own IPaddress from accessing the server, which can be frustrating if you don't know what's happening.";
$__emessage['root_cannot_extract_to_existing_dir'] = "Directory you provided already exists. Root user cannot extract archive into an existing directory. Please provide the name of a directory that doesn't exist in the system.";
$__emessage['no_imagemagick'] = "There is no imagemagick in the system. You can install imagemagick by running [b] yum -y install imagemagick [/b].";
$__emessage['warn_license_limit'] = "You are very close to your license limit for [%s]. If the system goes over limit for [%s] the interface will stop working and you won't be able to manage your system. Please increase your license at client.lxlabs.com and update by <url:o=license&a=show> clicking here </url>";
$__emessage['file_already_exists'] = "The file [%s] already exists.";
$__emessage['contact_set_but_not_correct'] = "Your Contact Information doesn't appear to be a valid email address. Click <url:a=updateform&sa=information> here to fix it.</url> ";
$__emessage['contact_not_set'] = "Your Contact Information is not set properly. Click <url:a=updateform&sa=information> here to fix it. </url> ";
$__emessage['you_have_unread_message'] = "You have [%s] Unread Message(s). click <burl:a=list&c=smessage> here  to read it. </burl>";
$__emessage['you_have_unread_ticket'] = "You have [%s] Unread Ticket(s). click <burl:a=list&c=ticket> here  to read it. </burl>";
$__emessage['security_warning'] = "Your password is now set as a generic password which constitutes a grave security threat. Please change it immediately by <url:a=updateform&sa=password> clicking here. </url> ";
$__emessage['ssh_port_not_configured'] = "The ssh port for this server is not set. It is a good idea to change it to something other than the default 22. Please  <url:a=show&o=sshconfig> click here to change:</url>. If you want to keep the ssh port to 22 and still avoid this message, go to the page, and set it forcibly to 22, and the warning will not be displayed again.";
$__emessage['system_is_updating_itself'] = "The system at this point is upgrading itself, and thus you won't be able to make any changes for a few minutes. All read actions work normally though.";
$__emessage['system_is_locked'] = "Someone has initiated system-modification-action on this particular object which is still going on. You wont be able to make any changes till it is finished. All read actions work normally though.";
$__emessage['system_is_locked_by_u'] = "You have initiated a system-modification-action which is still going on. You wont be able to make any changes till it is finished. All read actions work normally though.";
$__emessage['smtp_server_not_running'] = "hyperVM could not connect to an smtp server on this server. That means that hyperVM will not able to send out any mails. This is very critical since hyperVM monitors the health of the entire cluster and sends email to the admin if there is any problem. You should make sure that the smtp service is running on this server. Once you restart the SMTP service, please wait 5 minutes for this error message to disappear, since hyperVM checks for the service availability only once every 5 minutes.";
$__emessage['template_not_owner'] = "You are not the Owner of this Template";
$__emessage['ipaddress_changed_amidst_session'] = "IP Address Changed Amidst Session. Possible Session Hijacking.";
$__emessage['more_than_one_user'] = "More than one user is logged in this account. Click <burl:a=list&c=ssession>here to see list of logins. </burl> ";
$__emessage['login_error'] = "Login Unsuccessful";
$__emessage['file_exists'] = "file(s) [%s] Exists. Not Pasting...";
$__emessage['cannot_unzip_in_root'] = "You cannot unzip files into the root. Please specify a directory and unzip into that.";
$__emessage['nouser_email'] = "The Email doesn't match User's Contact Email Address";
$__emessage['session_expired'] = "Session Expired";
$__emessage['e_password'] = "Password Incorrect";
$__emessage['is_demo'] = "[%s] is Disabled in Demo Version.";
$__emessage['user_create'] = "User [%s] Could not be Created. Please try a different Name";
$__emessage['switch_done'] = "Switching the Servers has been run in the background. You will be sent a mail when the switch is complete.";
$__emessage['mis_changed'] = "Display Configuration successfully changed.";
$__emessage['password_sent'] = "Password was reset and sent successfully.";
$__emessage['added_successfully'] = "[%s] was added successfully.";
$__emessage['backup_has_been_scheduled'] = "The backup is now happening in the background. You will receive a mail at your contact email when it is done.";
$__emessage['update_scheduled'] = "Update is now running in the background. You can refresh this page to see if the update has completed properly.";
$__emessage['restore_has_been_scheduled'] = "The Restore is now happening in the background. You will receive a mail at your contact email when it is done.";
$__emessage['old_kloxo_found'] = "An Kloxo Installation file was found in the vps, which would mean that Kloxo is already installed. If you want me to try again, please delete the kloxo-install-master.sh and /usr/local/lxlabs/kloxo locations using the file manager.";
$__emessage['a_vps_with_the_same_id_exists'] = "A vps with the id [%s] already exists on the system. This either means this was created outside of hyperVM or else it got orphaned because hyperVM was interrupted forcibly in the midst of a migration. You can either a) Login manually and delete the vps. or b) Use our import facility to import this vps into hyperVM. Sorry for the inconvenience.";
$__emessage['could_not_start_vps'] = "Could Not Start Vps, Reason: [%s]";
$__emessage['vps_is_locked_by_another_user'] = " The vps [%s] is locked by another user. This would also be because you had interrupted an earlier activity that would take long time to complete. HyperVM has waited 15 seconds for the other process to finish. Please try after sometime. ";
$__emessage['macaddress_only_five'] = "You need to supply only the first 5 fields of the macaddress. The last is automatically generated for each ethernet device as 01, 02...";
$__emessage['to_use_filemanager_shut_down_xen_vm_first'] = " The filemanager can be used only when the Virtual Machine is shutdown, and it will act as a mechanism to fix any issues if your server is not coming back up.";
$__emessage['rebuild_time_limit'] = " Please wait for [%s] minutes before you rebuild again. ";
$__emessage['vpsid_already_exists_on_another_server'] = "The vpsid [%s] exists on another server.";
$__smessage['vps_creation_in_background'] = "Vpses are getting created in the background. Just periodically refresh this page, and you can see them listed.";
$__smessage['kloxo_installation_started'] = "Kloxo Installation has been started in the VPS. The log is kept in a file called HyperVM-kloxo_install.log in the / directory, which you can view using the File Manager";
