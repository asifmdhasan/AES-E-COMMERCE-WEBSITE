<?php
error_reporting(0);
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dd = $_POST['dd'];
	$mm = $_POST['mm'];
	$yyyy = $_POST['yyyy'];
	if($username=="" || $password=="" || $confirmpassword=="" || $email=="" || $gender=="" || $dd=="" || $mm=="" || $yyyy==""){
		echo "invalid";
	}
	else{
		$myfile=fopen("user.txt",'a');
		$data=$username. "|" .$password. "|" .$confirmpassword. "|" .$email. "|" .$gender. "|" .$dd. "|" .$mm. "|" .$yyyy. "\r\n";
		fwrite($myfile,$data);
		fclose($myfile);
		echo $data;
		header("location:Login.php");
	}
}
?>
	
	<legend>REGISTRATION</legend>
	<br/><br/>
	<form method="post" action="CheckReg.php">
	UserName: <input type="text"placeholder="Name" name="username"><br/>
	
	Password :<input type="password" placeholder="Password" name="password"></br>
		
	Confirm Password :<input type="password"placeholder="Confirm Password"name="confirmpassword"></br>
		
	Email :<input type="text"placeholder="Email"name="email"></br>
		
	Gender :
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender"value="Female">Female</br>
	
	DOB :
	<input name="dd"placeholder="Date" type="text" size="1">/<input  name="mm" placeholder="Month"type="text" size="1">/<input name="yyyy"placeholder="Year" type="text" size="1"> 
	<br/><br/>
	
	<input type="submit" name="submit" value="Submit">
	
	</form>