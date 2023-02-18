<?php
/************************************************************************/
/* PHP Simple PasswordProtect v1.0                                      */
/* ===========================                                          */
/*                                                                      */
/*   Written by Steve Dawson - http://www.stevedawson.com               */
/*   Freelance Web Developer - PHP, MySQL, HTML programming             */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* but please leave this header intact, thanks                          */
/************************************************************************/
##########################################################################
$password = "TOfree!";  // Modify Password to suit for access, Max 10 Char.
##########################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>MP3 Download</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<style type="text/css">
<!--
P { FONT-SIZE: 12pt; COLOR: #acacac; FONT-FAMILY: Arial}
TD { FONT-SIZE: 12pt; COLOR: #acacac; FONT-FAMILY: Arial}
a:link {
	color: #333;
}
body {
	background-color: #555;
}
#apDiv1 {
	position:absolute;
	z-index:1;
	top: 50%;
	left: 50%;
	margin-top: -300px;
	margin-left: -200px;
}
-->
</style>
</head>
<body>
<div id="apDiv1">
<img src="images/index.jpg" width="400" height="400"><br>
<?php 
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->

  <p align="center">
  <b>Congratulations</b><br><a href="http://www.brokenrimrecords.com/freejams/Turnover.zip">Click here</a> to download your free mp3.</p>

<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Download Code</b><br>Please enter the correct code</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter code for access to your free mp3 download<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Submit\" type=\"submit\"></p></form>";
}
?>
</div>
</body>
</html>
