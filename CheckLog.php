<?php
	error_reporting(0);

	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username=="" || $password==""){
			header("location:Login.php?satus=nullvalue");
		}
		else{	

			$myfile = fopen("user.txt", 'r');
			$isvalid = "";
			
			
			while (!feof($myfile))
			{
			
				$data = fgets($myfile);
				$arr = explode("|",$data);
					
				if($arr[0]==$username && $arr[1]==$password){
					setcookie('abc','valid',time()+3600,'/');
					if($_POST['rm']=='on'){
					setcookie('rm','123',time()+3600,'/');
					}
					$isvalid = "validuser";
				}
			}			
		if($isvalid == "validuser"){
			//echo $_COOKIE['abc'];
			//$_SESSION['abc']= "123";
			header("location:Userpage.php");
		}
		else{
			header("location:Login.php?status=invaliduser");
		}
	
	}
}
?>