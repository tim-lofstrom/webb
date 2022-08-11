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
<img src="images/upload.gif" 
onmouseover="this.src='images/upload_lys.gif'; "
onmouseout="this.src='images/upload.gif';">
</img>
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
<img src="images/settings_lys.gif"></img>
</a>
</div>

</div>


<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<form name="form1" method="post" action="changepw.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<br>
<font color="black" face="Arial Rounded MT Bold">Change Password</font>
<br>
<br>
<div id="text">
<br>
<font color="black" face="Arial Rounded MT Bold">New Password</font>
</div>

<div id="input">
<input name="password" type="password" id="password">
</div>

<div id="text">
<font color="black" face="Arial Rounded MT Bold">New Password again</font>
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




<?php
if(isset($_POST['AddUser'])){
	include('config.php');
	$AddUser = new Funktioner();
	$Adduser->AddUser();
}
else{
?>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<form name="form1" method="post" action="insert_ac.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<br>
<font color="black">Insert new user into database</font>
<div id="text">
<font color="black" face="Arial Rounded MT Bold">Username</font>
</div>
<div id="input">
<input name="username" type="text" id="username">
</div>
<div id="text">
<font color="black" face="Arial Rounded MT Bold">Email</font>
</div>
<div id="input">
<input name="email" type="text" id="email">
</div>
<?php
$random = (rand()%9);
$random2 = (rand()%9);
$random3 = (rand()%9);
$random4 = (rand()%9);
$password = "$random$random2$random3$random4";
echo "<input name='password' type='hidden' value='".$password."' id='password'>";
?>
<div id="text"><font color="black">Password will generete randomly</font>
<br>
<input type="submit" name="AddUser" value="Register new user"></div>
</table>
</form>
</table>
<?php
}
?>



<?php
   if( isset($_POST['avatar']) ) {
 
      include('SimpleImage.php');
      $image = new SimpleImage();
      $image->load($_FILES['uploaded_image']['tmp_name']);
      $image->resize(80, 80);
	  $user = $_SESSION['myusername'];
	  $path ="images/avatars/$user.png";
      $image->save($path);
   } else {
 
?>
	<font color="black" face="Arial Rounded MT Bold">Change Avatar:</font>
	<form action="settings.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploaded_image" />
	<input type="submit" name="avatar" value="Change Avatar" />
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
