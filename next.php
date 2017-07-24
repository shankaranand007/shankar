<?php 

	include("php_home.php");
session_start();


$email=$_SESSION['user'];


if(isset($_POST['textarea'])){
$text=$_POST['textarea'];

$query=mysql_query(" INSERT INTO texts(email,text) VALUES ('$email','$text') ") or die("error");


}


$query=mysql_query("SELECT * FROM texts WHERE email='$email' ");
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		nxt.php
	</title>
</head>
<body>

		<form action="next.php" method="POST">
				<textarea name="textarea"></textarea>
				<input type="submit" name="submit"  value="submit">
		</form>

<p>

<?php 

while($result= mysql_fetch_assoc($query))
{
	$user = $result['text'];
	$txt = $result['email'];
	print_r($txt." ".$user);
	

}
	?></p>

</body>
</html>
