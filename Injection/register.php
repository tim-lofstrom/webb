<html>
<head>
<title>Start</title>
<link href="style.css" rel="stylesheet" type"text/css">
</head>

<body>

<div id ="header">
</div>

<div id="menu2">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<form name="form1" method="post" action="insert_register.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">

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

<td>
<font color="white">Enter a Username and your Email and you will be sent a one time password.
<br>The password changes at first login.</font>
</td>

<div id="inputcheck">
<font color="white">Input numbers from the right</font>
<br>
<input name="spam" type="text" id="spam">
<?php
$error=$_GET['error'];
if($error == "'n'"){
	echo "<font color='red'>*</font>";
}
?>
</div>


<div id="antispam">
<?php
//slumpa fram random siffra
srand(time());
$random = (rand()%9);
$image="images/spam/spam_$random.gif";
echo "<img src=$image>";

$random2 = (rand()%9);
$image2="images/spam/spam_$random2.gif";
echo "<img src=$image2>";

$random3 = (rand()%9);
$image3="images/spam/spam_$random3.gif";
echo "<img src=$image3>";

$random4 = (rand()%9);
$image4="images/spam/spam_$random4.gif";
echo "<img src=$image4>";

$random5 = (rand()%9);
$image5="images/spam/spam_$random5.gif";
echo "<img src=$image5>";

$random6 = (rand()%9);
$image6="images/spam/spam_$random6.gif";
echo "<img src=$image6>";

$check="$random$random2$random3$random4$random5$random6";
echo "<input name='check' type='hidden' value='".$check."' id='check'>";
?>
</div>

<div id="registerme">
<input type="image" name="Submit" value="Submit" src="images/registerme.gif" 
onmouseover="this.src='images/registerme_lys.gif'; "
onmouseout="this.src='images/registerme.gif';">
</div>

</table>
</form>
</table>
</div>

</body>
</html>
