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
<link href="style_loggedin.css" rel="stylesheet" type"text/css">
</head>

<body>

<div id ="menu">

<div id="header">
<img src="images/header_log.gif"></img>
</div>

<div id="start">
<a href="loggedin.php">
<img src="images/start.gif" 
onmouseover="this.src='images/startlys.gif';"
onmouseout="this.src='images/start.gif';">
</a>
</div>

<div id="settings">
<a href="settings.php?error='null'">
<img src="images/settings.gif" 
onmouseover="this.src='images/settingslys.gif';"
onmouseout="this.src='images/settings.gif';">
</a>
</div>

<div id="cameras">
<a href="cameras.php">
<img src="images/mycameras.gif" 
onmouseover="this.src='images/mycameraslys.gif';"
onmouseout="this.src='images/mycameras.gif';">
</a>
</div>

<div id="adduser">
<a href="admin_register.php?error='null'">
<img src="images/addusers.gif" 
onmouseover="this.src='images/adduserslys.gif';"
onmouseout="this.src='images/addusers.gif';">
</a>
</div>



<div id="logout">
<a href="logout.php">
<img src="images/logout.gif" 
onmouseover="this.src='images/logoutlys.gif';"
onmouseout="this.src='images/logout.gif';">
</a>
</div>

</div>

<div id="body">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<form name="form1" method="post" action="insert_ac.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">

<br>
<font color="white">Insert new user into database</font>


<div id="text">
<font color="white" face="Arial Rounded MT Bold">Username</font>
</div>

<div id="input">
<input name="username" type="text" id="username">
<?php
$error=$_GET['error'];
if(($error == "'u'")||($error == "'ue'")){
	echo "<font color='red'>*</font>";
}
?>
</div>

<div id="text">
<font color="white" face="Arial Rounded MT Bold">Email</font>
</div>

<div id="input">
<input name="email" type="text" id="email">
<?php
$error=$_GET['error'];
if(($error == "'e'")||($error == "'ue'")){
	echo "<font color='red'>*</font>";
}
?>
</div>


<?php
$random = (rand()%9);
$random2 = (rand()%9);
$random3 = (rand()%9);
$random4 = (rand()%9);
$password = "$random$random2$random3$random4";
echo "<input name='password' type='hidden' value='".$password."' id='password'>";
?>


<div id="text"><font color="white">Password will generete randomly</font>
<br>
<input type="submit" name="Submit" value="Register new user"></div>

</table>
</form>
</table>
</div>

</body>
</html>
