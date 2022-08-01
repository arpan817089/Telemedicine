<?php
session_start();

$conn=mysqli_connect("localhost","arp7029", "790Aa@790","doc_patient");
$msg="";

if(isset($_POST['login'])){
	
	$Doctor_Registration_No = $_POST['Doctor_Registration_No'];
	$SSF_ID=$_POST['SSF_ID'];
    $Doctor_Registration_No_query = "select * from doc_patient where Doctor_Registration_No = $Doctor_Registration_No";
    $SSF_ID_query = "select * from doc_patient where SSF_ID = $SSF_ID";
    $query1 = mysqli_query($conn,$Doctor_Registration_No_query);
    $query2 = mysqli_query($conn,$SSF_ID_query);
    $Doctor_Registration_No_count = mysqli_num_rows($query1);
    $SSF_ID_count =  mysqli_num_rows($query2);
    if (($Doctor_Registration_No_count > 0) && ($SSF_ID_count > 0)) {
        echo("Login Successful");
        header("location:doc_dash.php");
    }
    else{
        echo"invalid login details";
        // header("location:doc_login.php");
    }
// 	if($LogDetls=="Volunteer")
// 	{
// 		$q1="SELECT * FROM `family_registration_info` WHERE `cw_number`='$username' and `mobile`='$password'";
// 		$e1=mysqli_query($conn,$q1);
// 		if(mysqli_num_rows($e1)>0){
// 			$_SESSION['usr']=$username;
// 			header("location:Volunteer/index.php");
			
// 		}
// 		else
// 		{
// 			echo"invalid login details";
// 		}
// 	}
// 	else if($LogDetls=="Doctor")
// 	{
// 		$q1="SELECT * FROM `doc_registration_info` WHERE `d_regno`='$username' and `mob`='$password'";
// 		$e1=mysqli_query($conn,$q1);
// 		if(mysqli_num_rows($e1)>0){
// 			$_SESSION['dcr']=$username;
// 			header("location:doctor/index.php");
// 	}
// 	else
// 		{
// 			echo"invalid login details";
// 		}
// 	}
	
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
            <p class="margin-bottom : 20px;">Doctor Registration No</p>
            <input type="text" name="Doctor_Registration_No" placeholder="Enter Registration No">
            <p>SSF ID</p>
            
            <input type="text" name="SSF_ID" placeholder="Enter SSF ID">
            <br>
            <!-- <p>Login as?</p> -->
            
			
			<!-- <select class="browser-default custom-select" name="LogDetls">
                <option selected>Select</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Doctor">Doctor</option> -->
            
            <input type="submit" name="login" value="Sign In">
            <!-- <a href="#">Forget Password</a>      -->
        </form>
    </div>
</body>
</html>