<?php

// session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
	$pat1 = $_POST['pat1'];
	setcookie('pat1', $pat1);
	$pat2 = $_POST['pat2'];
	setcookie('pat2', $pat2);
	$pat3 = $_POST['pat3'];
	setcookie('pat3', $pat3);
	$pat4 = $_POST['pat4'];
	setcookie('pat4', $pat4);
	$pat5 = $_POST['pat5'];
	setcookie('pat5', $pat5);
	$pat6 = $_POST['pat6'];
	setcookie('pat6', $pat6);
	$pat7 = $_POST['pat7'];
	setcookie('pat7', $pat7);
	$pat8 = $_POST['pat8'];
	setcookie('pat8', $pat8);
	
	$add_pat1 = $_POST['add_pat1'];
	$add_pat2 = $_POST['add_pat2'];
	$add_pat3 = $_POST['add_pat3'];
	$add_pat4 = $_POST['add_pat4'];
	$add_pat5 = $_POST['add_pat5'];
	$add_pat6 = $_POST['add_pat6'];
 
	$fam1 = $_POST['fam1'];
	$fam2 = $_POST['fam2'];
	$fam3 = $_POST['fam3'];
	$fam4 = $_POST['fam4'];
	$fam5 = $_POST['fam5'];
	$fam6 = $_POST['fam6'];
	$fam7 = $_POST['fam7'];
    $fam8 = $_POST['fam8'];
	$Family_Registration_No = $_POST['Family_Registration_No'];
	setcookie('Family_Registration_No', $Family_Registration_No);
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pat_reg_no(pat1,fam1,pat2,fam2,pat3,fam3,pat4,fam4,pat5,fam5,pat6,fam6,pat7,fam7,pat8,fam8,add_pat1,add_pat2,add_pat3,add_pat4,add_pat5,add_pat6,Family_Registration_No) values(?,?, ?, ?, ?,?,?, ?, ?, ?,?,?,?, ?, ?,?,?,?,?, ?, ?,?,?)");
		$stmt->bind_param("sssssssssssssssssssssss", $pat1,$fam1, $pat2,$fam2, $pat3,$fam3, $pat4,$fam4, $pat5, $fam5,$pat6,$fam6,$pat7,$fam7,$pat8,$fam8,$add_pat1, $add_pat2, $add_pat3, $add_pat4, $add_pat5, $add_pat6, $Family_Registration_No);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successful...";
		echo 'Thanks For Registering with us';
		header("location:pre_pat_regis.php");
		$stmt->close();
		$conn->close();
	}
} 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telemedicine Patient Login</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
</head>
<style>
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	/*animation: gradient 8s ease infinite;*/
	height: 40rem;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
</style>
<body>
    <div class="loginBox">
        <img src="Logo.png" class="user">
        <h2>Patient Info</h2>
        <form action="PatRegis.php" method="post">
            <p>Patient Registration No</p>
            <input type="text" name="pat_reg" placeholder="Enter Patient Registration No">
            <input type="submit" name="submit" value="Fetch Details">
        </form>
    </div>
</body>
</html>


