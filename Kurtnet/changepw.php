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
$myusername= $_SESSION['myusername'];
$password=$_POST['password'];
$password_again=$_POST['password_again'];

$encrypted_password = md5($password);


if($password == $password_again){
// Insert data into mysql
$sql="UPDATE $tbl_name SET password = '$encrypted_password' WHERE username = '$myusername'";
$result=mysql_query($sql);

if($result){
header("location:settings.php?error='success'");
}
else{
	mysql_error();
}


}
else{
$error="match";	
echo "fail";
header("location:settings.php?error='$error'");
}


// close connection
mysql_close();
?>