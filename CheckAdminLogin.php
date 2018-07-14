<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username=="" || $password==""){
		echo "invalid";
	}
	else{
		if($username==asif && $password==0000){
			header("location:Seller.php");
		}
		else{
			header("location:AdminLogin.php");
		}
	}
}

?>