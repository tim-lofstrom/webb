<?php

session_start();

if(isset($_SESSION['myusername'])){
	header("location:loggedin.php");
}
else{
	header("location:index.php");
}
?>