<?php
session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
$msg = "";

if (isset($_POST['login'])) {
    $day_card = $_POST['day_card'];
    $pass = $_POST['pass'];
    $q1 = "SELECT * FROM `hw_reg` WHERE `User_ID` = $day_card";
    $q2 = "SELECT * FROM `hw_reg` WHERE `pass` = '$pass'";
    $e1 = mysqli_query($conn, $q1);
    $e2 = mysqli_query($conn, $q2);
    if ((mysqli_num_rows($e1) > 0) && (mysqli_num_rows($e2) > 0)) {
        // $_SESSION['usr'] = $username;
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("","User Login Successfully!", "success");';
        echo '}, 1000);</script>';
        date_default_timezone_set('Asia/Kolkata');
        $st_date = date('Y-m-d');
        // header("location:DASHBOARD.php?from=$st_date&to=$st_date");
         echo("<script>setTimeout(function (){window.location = 'DASHBOARD.php?from=$st_date&to=$st_date'},1500);</script>");
    } else {
           echo '<script type="text/javascript">';
           echo 'setTimeout(function () { swal("Sorry!", "Invalid Login Details!", "error");';
           echo '}, 1000);</script>';
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                <form action="" method="post">
                <!-- <span>
                    <p>login with social media</p>

                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-info" aria-hidden="true"></i></a>

                </span> -->
            </div>
        </div>


        <div class="right">
            <h5>Login</h5>

            <!-- <p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p> -->
            <div class="inputs">
                <input type="text" name="day_card" placeholder="User ID">
                <input type="text" name="pass" placeholder="Password">
            </div>
            <!-- <div class="options">
                <select class="browser-default custom-select" name="LogDetls">
                    <option selected>Select</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="Doctor">Doctor</option>
            </div> -->



            <div>
                <!-- Angular -->

                <input type="submit" class="button button2" style="cursor:pointer;" name="login" value="Login"></input>
                </form>
            </div>
        </div>
        <br>


    </div>



    <!-- partial -->

</body>

</html>