<?php

// session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>Login for Prescription</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="loginBox">
        <img src="Logo.png" class="user">
        <h2>Patient Info</h2>
        <form action="get_prescrip.php" method="post">
            <p>Patient Registration No</p>
            <input type="text" name="pat_reg" placeholder="Enter Patient Registration No">
            <input type="submit" name="submit" value="Fetch Details">
        </form>
    </div>
</body>
</html>