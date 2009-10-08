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
$accountlist = array('client' => "Kloxo Account",'domain' => 'Domain Owner', 'mailaccount' => "Mail Account");
$progname = $sgbl->__var_program_name;


if (lxfile_exists("__path_program_htmlbase/lib/indexheader_vendor.html")) {
	lreadfile("__path_program_htmlbase/lib/indexheader_vendor.html");
} else {
	lreadfile("__path_program_htmlbase/lib/indexheader.html");
}

$ghtml->print_jscript_source("/htmllib/js/lxa.js");
if ($sgbl->is_this_slave()) { print("Slave Server\n"); exit; }

$logfo = db_get_value("general",  "admin", "login_pre");
$logfo = str_replace("<%programname%>", $sgbl->__var_program_name, $logfo);

if(!$cgi_forgotpwd ){
	$ghtml->print_message();


	if (if_demo()) {
		include_once "lib/demologins.php";
	} else {
		?>

<style type="text/css">
@import url("/htmllib/lib/admin_login.css");
</style>
<div id="ctr" align="center">
<div class="login">
<div class="login-form">
<div align="center"><font name=Verdana size=5 color=red> <b> Login </b></font></div>
<br>
<form name=loginform action="/htmllib/phplib/"
	onsubmit="encode_url(loginform) ; return fieldcheck(this);" method=post>
<div class="form-block">
<div class="inputlabel">Username</div>
<input name=frm_clientname type=text class=inputbox size=30 />
<div class="inputlabel">Password</div>
<input name=frm_password type=password class=passbox size=30 /> <br>

		<?php
		/*
		 if ($ghtml->iset("frm_nf")) {
			print("<input type=hidden name=frm_nf value=" . $ghtml->frm_nf . ">");
			}
			*/
		?> <input type=hidden name=id value="<?php echo mt_rand() ?>">

<div align="left"><input type=submit class=button name=login value=Login /></div>
</div>
</form>
</div>
<div class="login-text">
<div class="ctr"><img src="/img/login/icon.gif" width="64" height="64"
	alt="security" /></div>
		<?=$logfo?> <a class=forgotpwd
	href="javascript:document.forgotpassword.submit()"><font color=black><u>Forgot
Password?</u></a>
<form name="forgotpassword" method="post" action="/login/"><input
	type="hidden" name=frm_forgotpwd value="1"></form>
<script> document.loginform.frm_clientname.focus(); </script></div>
<div class="clr"></div>
</div>
</div>
<div id="break"></div>

		<?php

	}


}
elseif ($cgi_forgotpwd == 1) {
	?>
<style type="text/css">
@import url(/htmllib/lib/admin_login.css);
</style>
<div id="ctr" align="center">
<div class="login">
<div class="login-form">
<div align="center"><font name=Verdana size=5 color=red> <b> Forgot
Password </b></font></div>
<br>

<form name=sendmail action="<?php echo $_SERVER['PHP_SELF']; ?>"
	method="post">
<div class="form-block">

<div class="inputlabel">Username</div>
<input name=frm_clientname type=text class=inputbox size=30 />
<div class="inputlabel">Email Id</div>
<input name=frm_email type=text class=passbox size=30 /><br>
<div align="left"><input type=submit class=button name=forgot value=Send /></div>
</div>

</div>
<div class="login-text">
<div class="ctr"><img src="/img/login/icon1.gif" width="64" height="64"
	alt="security" /></div>
<p>Welcome to <?php echo  $sgbl->__var_program_name?></p>
<p>Use a valid username and email-id to get password.</p>
<br>

<a class=forgotpwd href="javascript:history.go(-1);"><font color=black><u>Back
to login</u></a> <input type="hidden" name="frm_forgotpwd" value="2">
</form>
<script> document.sendmail.frm_clientname.focus(); </script></div>
<div class="clr"></div>
</div>
</div>
<div id="break"></div>


	<?php
} elseif ($cgi_forgotpwd==2) {


	$progname = $sgbl->__var_program_name;
	$cprogname = ucfirst($progname);

	$cgi_clientname = $ghtml->frm_clientname;
	$cgi_email = $ghtml->frm_email;


	htmllib::checkForScript($cgi_clientname);
	$classname = $ghtml->frm_class;

	if (!$classname) {
		$classname = getClassFromName($cgi_clientname);
	}


	/*
	 if ($cgi_clientname == 'admin') {
		$ghtml->print_redirect("/?frm_emessage=cannot_reset_admin");
		}
		*/

	if ($cgi_clientname != "" && $cgi_email != "") {
		$tablename = $classname;
		$rawdb = new Sqlite(null, $tablename);
		$email = $rawdb->rawQuery("select contactemail from $tablename where nname = '$cgi_clientname';");


		if($email && $cgi_email == $email[0]['contactemail']) {
			$rndstring =  randomString(8);
			$pass = crypt($rndstring);

			$rawdb->rawQuery("update $tablename set password = '$pass' where nname = '$cgi_clientname'");
			$mailto = $email[0]['contactemail'];
			$name = "$cprogname";
			$email = "Admin";

			$cc = "";
			$subject = "$cprogname Password Reset Request";
			$message = "\n\n\nYour password has been reset to the one below for your $cprogname login.\n";
			$message .= "The Client IP address which requested the Reset: {$_SERVER['REMOTE_ADDR']}\n";
			$message .= 'Username: '. $cgi_clientname."\n";
			$message .= 'New Password: '. $rndstring.'';

			//$message = nl2br($message);

			lx_mail(null, $mailto, $subject, $message);

			$ghtml->print_redirect("/login/?frm_smessage=password_sent");

		} else {
			$ghtml->print_redirect("/login/?frm_emessage=nouser_email");
		}
	}
}
?>
</center>
</html>
