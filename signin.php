<?php 
	session_start();
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	

	$conn = mysql_connect("localhost","root","");
	$db   = mysql_select_db("login");

	// $sql = "SELECT email , password FROM login WHERE email='$email' AND password = '$pass'";
	// $result = mysql_query($sql) die(mysql_error());

	$sqll=mysql_query("SELECT email,password FROM login WHERE (email='$email' AND password='$pass')") or die(mysql_error());
	$result = mysql_fetch_array($sqll);
	if($result > 0){
		
		$_SESSION['user'] = $result['email'];
		header("Location:next.php");
	}else{
		echo "failure";
	}
	//$result2 = mysql_num_rows($result);


 ?>