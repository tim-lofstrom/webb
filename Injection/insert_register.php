<?php

$host="localhost"; // Host name
$username="kurt"; // Mysql username
$password="ollonmacka"; // Mysql password
$db_name="kurtnet"; // Database name
$tbl_name="new_members"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
$username=$_POST['username'];
$email=$_POST['email'];
$inputcheck=$_POST['spam'];
$check=$_POST['check'];

if(($username != "" )&&($email != "")){


// Insert data into mysql
if(($check == $inputcheck)){
$sql="INSERT INTO $tbl_name(username, email)VALUES('$username', '$email')";
$result=mysql_query($sql);
}
else{
$error = "n";
header("location:register.php?error='$error'");
}

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
	
header("location:register.php?error='$error'");

}


// close connection
mysql_close();
?>

<html>
<head>
<title>Start</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>
<div id ="header"></div>

<div id ="menu">

<?php
// if successfully insert data into database, displays message "Successful".
if($result){
echo "<center><font color='white'>Thank you for registering. You will be sent a password on your mail.</center>";
echo "<BR>";
echo "<center><a href='index.php'>Back to main page</a></center>";
}

else {
echo "ERROR";
}
?>

</div>

</body>
</html>