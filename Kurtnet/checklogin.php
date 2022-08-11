<?php
$host="localhost"; // Host name
$username="kurt"; // Mysql username
$password="ollonmacka"; // Mysql password
$db_name="kurtnet"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$encrypted_password=md5($mypassword);
$mypassword = ($encrypted_password);

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
/*session_register("myusername");
session_register("mypassword");*/

session_start();
$_SESSION['myusername'] = $myusername;
echo "
<form action='checklogin.php' method='post'>
<input name='session' type='hidden' value='".$myusername."' id='session'>
</form>
";

header("location:login_success.php");
}
?>

<html>
<head>
<title>Start</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>
<div id ="header">
<center><img src="images/logo.gif"></img></center>
</div>

<div id ="menu">
<?php
if($count != 1){
	echo "<br>";
	echo "<center><font color='black'>Wrong Username or Password</font></center>";
	echo "<br>";
	echo "<center><a href='index.php'>Back to main page</a></center>";
}
?>
</div>

</body>
</html>
