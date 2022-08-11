<?php
session_start();
if(isset($_SESSION['myusername'])){}
else{
	header("location:index.php");
}
?>
<html>
<head>
<title>Settings</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>

<!-- Meny med klickbara bilder som lyser när man har musen över -->

<div id ="header">
<center><img src="images/logo.gif"></img></center>

<div id="menu">

<div id="about">
<a href="loggedin.php">
<img src="images/start.gif" 
onmouseover="this.src='images/start_lys.gif';"
onmouseout="this.src='images/start.gif';">
</a>
</div>

<div id="space"></div>

<div id="about">
<a href="settings.php">
<img src="images/settings_lys.gif">
</a>
</div>

<div id="space"></div>

<div id="about">
<a href="cameras.php">
<img src="images/cameras.gif" 
onmouseover="this.src='images/cameras_lys.gif';"
onmouseout="this.src='images/cameras.gif';">
</a>
</div>

<div id="space"></div>

<div id="about">
<a href="logout.php">
<img src="images/logout.gif" 
onmouseover="this.src='images/logout_lys.gif'; "
onmouseout="this.src='images/logout.gif';">
</a>
</div>

</div>

</div>


<!-- Body med inställningar för lösenordsbyte -->
<div id ="body">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<form name="form1" method="post" action="changepw.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<br>
<font color="white" face="Arial Rounded MT Bold">Change Password</font>
<br>
<br>
<div id="text">
<?php
$error=$_GET['error'];
if($error == "'success'"){
	echo "<font color='red'>Password successfully changed</font>";
}
?>
<?php
$error=$_GET['error'];
if($error == "'match'"){
	echo "<font color='red'>Password did not match</font>";
}
?>
<br>
<font color="white" face="Arial Rounded MT Bold">New Password</font>
</div>

<div id="input">
<input name="password" type="password" id="password">
</div>

<div id="text">
<font color="white" face="Arial Rounded MT Bold">New Password again</font>
</div>

<div id="input">
<input name="password_again" type="password" id="password_again">
<br>
</div>


<div id="text">
<br>
<input type="submit" name="Submit" value="Change password">
</div>

</table>
</form>
</table>
</div>

</body>
</html>
