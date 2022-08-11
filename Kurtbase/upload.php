<?php
session_start();
if(isset($_SESSION['myusername'])){}
else{
	header("location:index.php");
}
?>
<html>
<head>
<title>Upload</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>

<!-- Meny med klickbara länkar som lyser om man för musen över dem. -->

<div id="header">
<img src="images/logo.gif"></img>

<div id="profile">
<div id="avatar">

<?php
$user = $_SESSION['myusername'];
$avatar = "images/avatars/$user.png";
echo "<img src='$avatar'></img>";
?>

</div>
<div id="user">
<font color="white" face="Cooper Std" size="2">logged in as:</font>
<?php
$user = $_SESSION['myusername'];
echo "<br>";
echo "<font color='#44c8ff' face='Cooper Std' size='4'>$user</font>";
?>
<br>
<br>
</div>

<div id="logout">
<?php
if(isset($_POST['logout'])){
include('config.php');
$logout = new Funktioner();
$logout->Logout();
} else {
?>
<form action="upload.php" method="post">
<input type="submit" name="logout" value="logout" />
</form>
<?php
   }
?>

</div>

</div>

</div>



<div id ="menu">



<div id="text">
<a href="upload.php">
<img src="images/upload_lys.gif"></img>
</a>
</div>

<div id="space"></div>

<div id="text">
<a href="browse.php">
<img src="images/browse.gif" 
onmouseover="this.src='images/browse_lys.gif'; "
onmouseout="this.src='images/browse.gif';">
</img>
</a>
</div>

<div id="space"></div>

<div id="text">
<a href="settings.php?error='null'">
<img src="images/settings.gif" 
onmouseover="this.src='images/settings_lys.gif'; "
onmouseout="this.src='images/settings.gif';">
</img>
</a>
</div>

</div>

<?php
if(isset($_POST['upload'])){
	include('config.php');
	$upload = new Funktioner();
	$upload->UploadFile();
}
else{
?>
	<br>
	<font color="black" face="Cooper Std">Upload file:</font>
	<form action="upload.php" method="post"
	enctype="multipart/form-data">
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file" />
	<br />
	<input type="submit" name="upload" value="Upload" />
	</form>
<?php
}
?>

<div id="footer">
<center>
<font color="grey" face="Cooper Std">
© Design By Anders Hedström, Code By Kurt Löfström 2011
</font>
</center>
</div>

</body>
</html>
