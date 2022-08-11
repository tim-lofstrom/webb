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
$db_name="kurtbase"; // Database name
$tbl_name="files"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$uploader = $_SESSION['myusername'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$query = "INSERT INTO $tbl_name (name, type, size, uploader, content ) ".
"VALUES ('$fileName', '$fileType', '$fileSize', '$uploader', '$content')";

mysql_query($query) or die('Error, query failed');

echo "<input type='hidden' name='fileName' value='$fileName'>";

header("location:upload.php");
}
else{
	echo "fail";
}

?> 