<?php
session_start();

$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
$msg = "";

if (isset($_POST['login'])) {

	$username = $_POST['uid'];
	$password = $_POST['pwd'];
	$LogDetls = $_POST['LogDetls'];
	if ($LogDetls == "Volunteer") {
		$q1 = "SELECT * FROM `medical_consultant` WHERE `Day_Card_No`=$username";
		$e1 = mysqli_query($conn, $q1);
		if (mysqli_num_rows($e1) > 0) {
			$_SESSION['usr'] = $username;
			header("location:doctor_dashboard1.php");
		} else {
			echo "invalid login details";
		}
	} else if ($LogDetls == "Doctor") {
		$q1 = "SELECT * FROM `doctor` WHERE `Doctors_Registration_No`='$username'";
		$e1 = mysqli_query($conn, $q1);
		if (mysqli_num_rows($e1) > 0) {
			$_SESSION['dcr'] = $username;
			header("location:date_pat.php");
		} else {
			echo "invalid login details";
		}
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Telemedicine-Login Admin</title>
	<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	<div class="loginBox">
		<img src="Logo.png" class="user">
		<h2>Login</h2>
		<form action="" method="post">
			<p>Registration No</p>
			<input type="text" name="uid" placeholder="Enter Registration No">
			<!-- <p>Password</p>
            
            <input type="password" name="pwd" placeholder="******"> -->
			<br>
			<p>Login as?</p>


			<select class="browser-default custom-select" name="LogDetls">
				<option selected>Select</option>
				<option value="Volunteer">Volunteer</option>
				<option value="Doctor">Doctor</option>

				<input type="submit" name="login" value="Sign In">
				<a href="#">Forget Password</a>
		</form>
	</div>
</body>

</html>