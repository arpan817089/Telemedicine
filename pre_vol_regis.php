<?php
session_start();

$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
// $conn = mysqli_connect("localhost", "root", "", "doc_patient");
$msg = "";

if (isset($_POST['login'])) {

    $username = $_POST['uid'];
    $LogDetls = $_POST['LogDetls'];
    if ($LogDetls == "Volunteer") {
        // $username = $_POST['uid'];
        $q1 = "SELECT * FROM `patient_registration` WHERE `mob_no`=$username";
        $e1 = mysqli_query($conn, $q1);
        
        if (mysqli_num_rows($e1) > 0) {
            // $_SESSION['usr'] = $username;
            $fetch = mysqli_fetch_row($e1);
            header("location:medical_consultant.php?x=$fetch[3]");
        } else {
            echo "invalid login details";
        }
    } else if ($LogDetls == "Doctor") {
        // $username = $_POST['uid'];
        $q1 = "SELECT * FROM `patient_registration` WHERE `per_reg`='$username'";
        $e1 = mysqli_query($conn, $q1);
       
        if (mysqli_num_rows($e1) > 0) {
            // $_SESSION['usr'] = $username;
            $fetch = mysqli_fetch_row($e1);
            // $fetch1 = $fetch[2];
            header("location:medical_consultant.php?x=$fetch[3]");
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
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        .button2 {
            background-color: #46C646;
            border-radius: 50px;
        }
    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>SSF</h1>
                <h2>Tele Medicine</h2>
                <span>
                    <!--<p>login with social media</p>-->
                    <form action="" method="post">
                        <!--<a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>-->
                        <!--<a href="#"><i class="fa fa-info" aria-hidden="true"></i></a>-->

                </span>
            </div>
        </div>


        <div class="right">
            <h5>Patient Info</h5>

            <!-- <p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p> -->
            <div class="inputs">
                <input type="text" name="uid" placeholder="Registration Details">

            </div>
            <div class="options">
                <select class="browser-default custom-select" name="LogDetls" style="width: 100%;padding: 10px;font-size: 16px;border: none;outline: none;border-bottom: 2px solid #B0B3B9;">
                    <option selected>Select</option>
                    <option value="Volunteer">Mobile Number</option>
                    <option value="Doctor">Registration No</option>
            </div>



            <div class="remember-me--forget-password">
                <!-- Angular -->

                <input type="submit" class="button button2" style="cursor:pointer;" name="login" value="Fetch Details"></input>
                </form>
            </div>
        </div>
        <br>


    </div>



    <!-- partial -->

</body>

</html>