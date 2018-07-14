<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username=="" || $password==""){
		echo "Admin Request Invalid !!!";
	}
	else{
		if($username==asif && $password==0000){
			header("location:AdminPane.php");
		}
		else{
			header("location:AdminLogin.php");
		}
	}
}
?>
	<legend>&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login</legend>
	<form method="post" action="#">
	Admin Name : <input type="text"placeholder="Name" name="username"><br/>
	Password &nbsp &nbsp &nbsp : <input type="password"placeholder="Password" name="password"></br></br>
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input name="submit" type="submit"><br/><br/>
	</form>