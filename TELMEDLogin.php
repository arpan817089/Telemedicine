<?php
session_start();

$conn=mysqli_connect("localhost","arp7029", "790Aa@790","doc_patient");
$msg="";

if(isset($_POST['login'])){
	
	$username = $_POST['uid'];
// 	$password=$_POST['pwd'];
	$LogDetls=$_POST['LogDetls'];
	if($LogDetls=="Doctor")
	{
		$q1="SELECT * FROM `doctor` WHERE `Doctors_Registration_No`='$username'";
		$e1=mysqli_query($conn,$q1);
		if(mysqli_num_rows($e1)>0){
			$_SESSION['dcr']=$username;
			echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("","User Login Successfully!", "success");';
            echo '}, 1000);</script>';
            echo("<script>setTimeout(function (){window.location = 'date_pat.php'},1500);</script>"); 
	}
	else
		{
           echo '<script type="text/javascript">';
           echo 'setTimeout(function () { swal("Sorry!", "Invalid Login Details!", "error");';
           echo '}, 1000);</script>';
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <style>
                    .button2 {background-color: #46C646;
                        border-radius: 50px;}
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
                <h5>Login</h5>

                <!-- <p>Don't have an account? <a href="#">Creat Your Account</a> it takes less than a minute</p> -->
                <div class="inputs">
                    <input type="text"  name="uid" placeholder="Registration ID">

                </div>
                <div class="options">
                <select class="browser-default custom-select" name="LogDetls" style="width: 100%;padding: 10px;font-size: 16px;border: none;outline: none;border-bottom: 2px solid #B0B3B9;">
                <option selected>Select</option>
                <!--<option value="Volunteer">Health Worker</option>-->
                <option value="Doctor">Doctor</option>
                </div>

                

                <div class="remember-me--forget-password">
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