<?php
class Login{

	protected $host="localhost"; // Host name
	protected $username="kurt"; // Mysql username
	protected $password="ollonmacka"; // Mysql password
	protected $db_name="kurtbase"; // Database name
	protected $tbl_name="members"; // Table name
	
function Login(){

	$this->Connect();
	
	// username and password sent from form
	$myusername=$_POST['myusername'];
	$mypassword=$_POST['mypassword'];
	
	$encrypted_password= md5($mypassword);
	$mypassword = ($encrypted_password);
	
	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);
	
	$sql="SELECT * FROM $this->tbl_name WHERE username='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);
	
	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);
	// If result matched $myusername and $mypassword, table row must be 1 row
	
	if($count==1){
	session_start();
	$_SESSION['myusername'] = $myusername;
	echo "
	<form action='checklogin.php' method='post'>
	<input name='session' type='hidden' value='".$myusername."' id='session'>
	</form>
	";
	header("location:upload.php");
	}
	else{
		header("location:login.php?login_attempt=1");
	}
}

function Connect(){
	// Connect to server and select databse.
	mysql_connect("$this->host", "$this->username", "$this->password")or die("cannot connect");
	mysql_select_db("$this->db_name")or die("cannot select DB");
}

}

class Funktioner{

	protected $host="localhost"; // Host name
	protected $username="kurt"; // Mysql username
	protected $password="ollonmacka"; // Mysql password
	protected $db_name="kurtbase"; // Database name
	protected $tbl_name="members"; // Table name

function Logout(){
	session_start();
	session_destroy();
	header("location:index.php");
}

function ChangePW(){

	session_start();
	if(isset($_SESSION['myusername'])){}
	else{
		header("location:index.php");
	}

	// Get values from form
	$myusername= $_SESSION['myusername'];
	$password=$_POST['password'];
	$password_again=$_POST['password_again'];
	
	$encrypted_password = md5($password);
	
	
	if($password == $password_again){
		// Insert new data into mysql
		$sql="UPDATE $this->$tbl_name SET password = '$encrypted_password' WHERE username = '$myusername'";
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

}

function UploadFile(){

	if ($_FILES["file"]["size"] < 40000000000){
		if ($_FILES["file"]["error"] > 0){
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
	else{
		echo "<br>";
		echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		echo "Type: " . $_FILES["file"]["type"] . "<br />";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";

		if (file_exists("upload/" . $_FILES["file"]["name"])){
			echo $_FILES["file"]["name"] . " already exists. ";
		}
		else{
			move_uploaded_file($_FILES["file"]["tmp_name"],
			"upload/" . $_FILES["file"]["name"]);
			echo "Success";
		}
    }
    }
	else{
		echo "Invalid file";
	}

}

function Search(){

	session_start();
	if(isset($_SESSION['myusername'])){}
	else{
		header("location:index.php");
	}

	$this->Connect();
	
	//get value from form
	$search=$_POST['search'];

	echo "$search";

	//ask database for files
	$sql="SELECT * FROM $tbl_name WHERE name='$search'";
	$result=mysql_query($sql);

	echo "$result";
	echo "$sql";

	$query = "SELECT id, name FROM upload";
	//$result = mysql_query($query) or die('Error, query failed');
	if(mysql_num_rows($result) == 0){
		echo "Database is empty <br>";
	}
	else{
		while(list($id, $name) = mysql_fetch_array($result)){
			echo "<a href='download.php?id=$id'>$name</a> <br>";
		}
	}
}

function AddUser(){

	session_start();
	if(isset($_SESSION['myusername'])){}
	else{
		header("location:index.php");
	}

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
		header("location:admin_register.php?error='$error'");
	}
}

function Connect(){
	// Connect to server and select databse.
	mysql_connect("$this->host", "$this->username", "$this->password")or die("cannot connect");
	mysql_select_db("$this->db_name")or die("cannot select DB");
}

}


?>