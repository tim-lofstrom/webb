<?php
session_start();
if(isset($_SESSION['myusername'])){}
else{
	header("location:index.php");
}
?>

<?php

$host="localhost"; // Host name
$username="kurt"; // Mysql username
$password="ollonmacka"; // Mysql password
$db_name="kurtnet"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$encrypted_password = md5($password);


if(($username != "" )&&($email != "")){

// Insert data into mysql
$sql="INSERT INTO $tbl_name(username, password, email)VALUES('$username', '$encrypted_password', '$email')";
$result=mysql_query($sql);

}
else{
$error="";
if (($username == "")&&($email == "")){
	$error="ue";
}
else if($username == ""){
	$error="u";
}
else{
	$error="e";
}
	
header("location:admin_register.php?error='$error'");

}
// close connection
mysql_close();
?>

<html>
<head>
<title>Start</title>
<link href="style_loggedin.css" rel="stylesheet" type"text/css">
</head>

<body>
<div id ="header"></div>

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
<img src="images/mycameras.gif" 
onmouseover="this.src='images/mycameraslys.gif';"
onmouseout="this.src='images/mycameras.gif';">
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

<div id ="body">

<?php
// if successfully insert data into database, displays message "Successful".
if($result){
echo "<br>";
echo "<font color='white'>New member successfylly inserted into database.";
echo "<br>";
echo "Username: $username";
echo "<br>";
echo "Password: $password";
echo "<br>";
echo "<a href='loggedin.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?>

</div>

</body>
</html>