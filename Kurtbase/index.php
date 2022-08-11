 <html>
<head>
<title>Start</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>

<div id ="header">

<div id="logo">
<img src="images/logo.gif"></img>
</div>

<div id="profile">
<br>
<br>
<br>
<br>
<?php
if((isset($_POST['myusername'])) and (($_POST['myusername']) != null)
and (isset($_POST['mypassword'])) and (($_POST['mypassword']) != null)){
 
include('config.php');
$login = new Login();
$login->Login();

} else {

?>
   
 <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" >
<form name="form1" method="post" action="index.php">
<table width="100%" border="0" cellpadding="3" cellspacing="1" >
<tr>
<td width="100">
<font color="#626262" face="Cooper Std" size="2">username</font>
<?php
if ((isset($_POST['myusername'])) and (($_POST['myusername']) == null)){
	echo "<font color='red'>*</font>";
}
?>
<br>
<input name="myusername" type="text" id="myusername">
</td>
<td>
<font color="#626262" face="Cooper Std" size="2">password</font>
<?php
if ((isset($_POST['mypassword'])) and (($_POST['mypassword']) == null)){
	echo "<font color='red'>*</font>";
}
?>
<br>
<input name="mypassword" type="password" id="mypassword">
<input type="submit" value="OK">
</td>
</tr>
</table>
</form>
</table>
 
<?php
   }
?>
</div>
</div>

<div id="menu"></div>

<img src="images/trollface.png"></img>

<div id="footer">
<center>
<font color="grey" face="Cooper Std">
© Design By Anders Hedström, Code By Kurt Löfström 2011
</font>
</center>
</div>

</body>
</html>
