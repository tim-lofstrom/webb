<?php
session_start();
if(isset($_SESSION['myusername'])){}
else{
	header("location:index.php");
}
?>
<html>
<head>
<title>Start</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>

<!-- Meny med klickbara länkar som lyser om man för musen över dem. -->

<div id ="header">

<center><img src="images/logo.gif"></img></center>

<div id="menu">

<div id="about">
<a href="loggedin.php">
<img src="images/start_lys.gif">
</a>
</div>

<div id="space"></div>

<div id="about">
<a href="settings.php">
<img src="images/settings.gif" 
onmouseover="this.src='images/settings_lys.gif'; "
onmouseout="this.src='images/settings.gif';">
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

<div id ="body">
<font color="black">START</font>
</div>

</body>
</html>
