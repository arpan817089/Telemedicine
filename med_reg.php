<?php
session_start();

$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
if (isset($_POST['reg'])) {

    $name = $_POST['hwname'];
    $day_card = $_POST['day_card'];
    $pass = $_POST['pass'];
    $q1 = "SELECT * FROM `hw_reg` WHERE `User_ID`= $day_card";
    $e1 = mysqli_query($conn, $q1);
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } 
    else {
        if (mysqli_num_rows($e1) > 0) {
           echo '<script type="text/javascript">';
           echo 'setTimeout(function () { swal("Sorry!", "User Already Registered!", "error");';
           echo '}, 1000);</script>';
        }
        else{
        $stmt = $conn->prepare("insert into hw_reg(hwname,User_ID,pass) values(?, ?, ?)");
        $stmt->bind_param("sis", $name, $day_card, $pass);
        $execval = $stmt->execute();
        // echo $execval;
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Hurrah!", "User Registered Successfully!", "success");';
        echo '}, 500);</script>';
        echo "<script>setTimeout(function (){window.location = 'hwlogin.php'},1500);</script>;";
        $stmt->close();
        $conn->close();
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        .button2 {
            background-color: #46C646;
            border-radius: 50px;
            margin-top: 20px;
            width: 30rem;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1 style="margin-top: 50px;">SSF</h1>
                <h2 style="margin-top: 50px;">Tele Medicine</h2>
                <span>
                    <!--<p>login with social media</p>-->
                    <form action="" method="post">
                        <!--<a href="#"><i class="fa fa-home" aria-hidden="true"></i></a>-->
                        <!--<a href="#"><i class="fa fa-info" aria-hidden="true"></i></a>-->

                </span>
            </div>
        </div>


        <div class="right">
            <h5>Registration</h5>

            <!-- <p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p> -->
            <div class="inputs">
                <input type="text" name="hwname" placeholder="Enter Your Name">
                <input type="text" name="day_card" placeholder="User ID">
                <input type="text" name="pass" placeholder="Password">
            </div>


            <div>
                <!-- Angular -->

                <input type="submit" class="button2" name="reg" value="Registration"></input>
                </form>
            </div>
        </div>
        <br>


    </div>



    <!-- partial -->

</body>

</html>