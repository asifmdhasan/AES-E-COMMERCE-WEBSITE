<?php
	if(isset($_COOKIE['rm'])){
		echo $_COOKIE['rm'];
		header("location:Userpage.php");
	}
	else{
		if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid user !!!";
		}else if($status == "nullvalue"){
			echo "Username/Password not be null !!!";
		}
	}
?>
	<legend>&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Login</legend></br>
	<form method="post" action="CheckLog.php">
	UserName : <input type="text"placeholder="Name" name="username"><br/>
	Password &nbsp : <input type="password"placeholder="Password" name="password"></br></br>
	Remember Me<input type="checkbox" name="rm"></br></br>
	<input name="submit" type="submit"><br/><br/>
		New User?
		<a href="REGISTRATION.php">Registration!!</a>
	</form>
	<?php
	}
	?>