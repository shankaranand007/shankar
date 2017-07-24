 <?php
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $select=$_POST['select'];
 $txt=$_POST['txt'];



 $conn=mysql_connect("localhost","root","");
 $db=mysql_select_db("login");

 	// function test_input($data){
 	// 	$data=trim($data);
 	// 	$data=stripcslashes($data);
 	// 	$data=htmlspecialchars($data);
 	// 	return $data;

 	// }

 	
	$sql="INSERT INTO login(email,password,opt,txt) VALUES ('$email','$pass','$select','$txt')";
	$sqlg=mysql_query($sql)or die(mysql_error());
		
	#..$sqll="SELECT email,password FROM login WHERE (email='$email' AND password='$pass')";
	#..$cheack=mysql_query($sqll)or die(mysql_error());
	if ($sqlg) {
		
		header("location:signin.html");
	}


?> 
