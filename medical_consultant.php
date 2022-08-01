<?php

// $p = $_SESSION['doc'];
session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
$s = mysqli_query($conn,"SELECT * FROM `doctor`");
// if (isset($_POST['submit'])) {
  extract($_REQUEST);
//   $pat_reg  = $_POST['pat_reg'];

  $q1 = "SELECT * FROM `patient_registration`  WHERE `per_reg`='$x'";
  $e1 = mysqli_query($conn, $q1);
  if (mysqli_num_rows($e1) > 0) {

      $res = mysqli_fetch_row($e1);
      $reg_no = $res[3];
      $name = $res[2];
      $gender = $res[6];
      $dob = $res[7];
      $height = $res[11];
      $weight = $res[12];
      $pulse = $res[14];
      $spo2 = $res[17];
      $temp = $res[13];
      $s_bp = $res[15];
      $d_bp = $res[16];
      $diab = $res[18];
  }
// }
?>
<?php
  $conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
  $q1 = "SELECT * FROM `medical_consultant`";
  $result = mysqli_query($conn, $q1) or die('Invalid query: ' . mysql_error());
  $row_first = mysqli_fetch_array($result);
  mysqli_data_seek($result , (mysqli_num_rows($result)-1));
  $row_last =  mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical Consultation</title>
</head>
<style>
      body {
        background: black;
        background-size: 400% 400%;
        height: 270rem;
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
  <script>
    function myfun() {
      var a = document.getElementById("mobilenumber").value;
      if (a == "") {
        document.getElementById("messages").innerHTML = "Fill Mobile Number";
        return false;

      }
      if (a.length < 10) {
        document.getElementById("messages").innerHTML = "mobile number not less than 10";
        return false;
      }
      if (a.length > 10) {
        document.getElementById("messages").innerHTML = "mobile number not more than 10";
        return false;
      }
      if ((a.charAt(0) != 9) && (a.charAt(0) != 8) && (a.charAt(0) != 7) && (a.charAt(0) != 6)) {
        document.getElementById("messages").innerHTML = "mobile number not valid";
        return false;
      }


    }
  </script>




  <!-- <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#"><img src="1234.webp"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-right">
          <li class="nav-item">
            <a class="nav-link" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </div> -->
  <!-- <form action="family_reg_conn.php" method="post"> -->
  <div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
      <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
          <h1><b>Medical Consultation</b></h1>
          <p></p>
          <div class="row">
            <div class="col-md-12 mx-0">
              <form id="msform" action="consultant_reg_conn.php" method="post">
                <!-- progressbar -->
                <!-- <ul id="progressbar">
                  <li class="active" id="account"><strong>Basic Info</strong></li>
                  <li id="confirm"><strong>Finish</strong></li>
                </ul> -->
                <!-- fieldsets -->
                <fieldset>
                  <div class="form-card">
                    <!-- <h2 class="fs-title">Basic Info</h2> -->
                    <label style="padding-left:10px;" for="Date">Date</label><br>
                    <input type="date" name="Date" id="date" placeholder="Date" required readonly="readonly" />
                    <script>
                      var date = new Date();
                      var year = date.getFullYear();
                      var month = String(date.getMonth() + 1).padStart(2, '0');
                      var todayDate = String(date.getDate()).padStart(2, '0');
                      var datePattern = year + '-' + month + '-' + todayDate;
                      document.getElementById("date").value = datePattern;
                      document.getElementById("Age").value = year - <?php echo (int) $dob; ?>;
                    </script>
                    <label style="padding-left:10px;" for="Patient_Registration_Number">Patient_Registration_Number</label><br>
                    <input type="text" name="Patient_Registration_Number" readonly="readonly" value="<?php echo $reg_no; ?>" placeholder="Patient's Registration Number" required />
                    
                    <label style="padding-left:10px;" for="Day Card No">Day Card No</label><br>
                    <input type="text" name="Day_Card_No" id="Day_Card_No" placeholder="Day Card No" readonly="readonly" />
                    <label style="padding-left:10px;" for="Name">Name</label><br>
                    <input type="text" name="Name" id="Name" readonly="readonly" value="<?php echo $name; ?>"  placeholder="Name (PP)" required />
                    <label style="padding-left:10px;" for="Age">Age</label><br>
                    <input type="number" name="Age" id="Age" readonly="readonly"  placeholder="Age (PP)" required />
                    <br><br>
                    <script>
                      var date = new Date();
                      var year = date.getFullYear();
                      var month = String(date.getMonth() + 1).padStart(2, '0');
                      var todayDate = String(date.getDate()).padStart(2, '0');
                      var datePattern = year + '-' + month + '-' + todayDate;
                      document.getElementById("date").value = datePattern;
                      document.getElementById("Age").value = year - <?php echo (int) $dob; ?>;
                    </script>
                    <label style="padding-left:10px;" for="Gender">Gender</label><br>
                    <input type="text" name="Gender" id="Gender" readonly="readonly" value="<?php echo $gender; ?>" placeholder="Gender" required />
                    <br><br>
                    <label style="padding-left:10px;" for="Weight">Weight</label><br>
                    <input type="number" name="Weight" id="Weight" placeholder="वजन (Weight) (in kilogram)" required />
                    <label style="padding-left:10px;" for="Height">Height</label><br>
                    <input type="number" name="Height" id="Height"  placeholder="उच्चता (Height) (in cm)" required />
                    <label style="padding-left:10px;" for="Pulse Rate">Pulse Rate</label><br>
                    <input type="number" name="Pulse_Rate" id="Pulse_Rate"  placeholder="Pulse Rate(in s)" required />
                    <label style="padding-left:10px;" for="Systolic Blood Pressure">Systolic Blood Pressure</label><br>
                    <input type="text" name="Systolic_Blood_Pressure" id="Systolic_Blood_Pressure"  placeholder="सिस्टोलिक रक्तचाप (Systolic Blood Pressure)" required />
                    <label style="padding-left:10px;" for="Diastolic Blood Pressure">Diastolic Blood Pressure</label><br>
                    <input type="text" name="Diastolic_Blood_Pressure" id="Diastolic_Blood_Pressure" placeholder="डायस्टोलिक रक्तचाप (Diastolic Blood Pressure)" required />
                    <label style="padding-left:10px;" for="Temperature">Temperature</label><br>
                    <input type="text" name="Temperature" id="Temperature" placeholder="तापमान Temperature (F)" required />
                    <label style="padding-left:10px;" for="SPO2">SPO2</label><br>
                    <input type="text" name="SPO2" id="SPO2" placeholder="एसपीओ २ SPO2" required />

                    <br><br>
                    <label style="padding-left:10px;" for="Blood Sugar">Blood Sugar</label><br>
                    <input type="text" name="Blood_Sugar" id="Blood_Sugar" class="browser-default custom-select">

                    <br><br>
                    <input type="text" name="Blood_Sugar_level" id="Blood_Sugar_level" placeholder="Blood Sugar level (if advised by Doctor)" />

                    <br><br>
                    <label>शारीरिक परीक्षा पर टिपण्णी (Remarks on Physical Examination)</label>
                    <div class="form-check">
                      <input class="form-check-input" name="Remarks[]" type="checkbox" value="कोई नहीं" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <input type="text" class="form-control" placeholder="कोई नहीं" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-input" name="Remarks[]" type="checkbox" value="नीले रंग की त्वचा मलिनकिरण" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          <input type="text" class="form-control" placeholder="नीले रंग की त्वचा मलिनकिरण" aria-label="Server">
                        </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="Remarks[]" type="checkbox" value="पीलिया" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <input type="text" class="form-control" placeholder="पीलिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="Remarks[]" type="checkbox" value="आंख का फेकापान" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <input type="text" class="form-control" placeholder="आंख का फेकापान" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="Remarks[]" type="checkbox" value="हाथ के नाखुन मेरे सुजान" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <input type="text" class="form-control" placeholder="हाथ के नाखुन मेरे सुजान" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="Remarks[]" type="checkbox" value="शरीर में या पैर में सूजन" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <input type="text" class="form-control" placeholder="शरीर में या पैर में सूजन" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="Remarks[]" type="checkbox" value="गले में या शरीर में गाँठ" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <input type="text" class="form-control" placeholder="गले में या शरीर में गाँठ" aria-label="Server">
                      </label>
                    </div>
                    <br><br>

                    <label>क्लिनिक पर जाने के कारण (वर्तमान समस्याएं) Reasons for the present visit (current problems)</label>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="नियमित चेक अप" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="नियमित चेक अप" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="पेट दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="पेट दर्द" aria-label="Server">
                      </label>
                    </div>
                    
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="कोमार दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="कोमार दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="फॉलोअप चेक अप "id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="फॉलोअप चेक अप " aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="बुखार" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="बुखार" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="सांस लेने में तकलीफ" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="सांस लेने में तकलीफ" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="गले की परेशानी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="गले की परेशानी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="उबकाई" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="उबकाई" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="फिटनेस प्रमाण पत्र" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="फिटनेस प्रमाण पत्र" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="भूख में कमी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="भूख में कमी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="छाती में दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="छाती में दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="सरदर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="सरदर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="पैर / घुटने का दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="पैर / घुटने का दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="गर्दन दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="गर्दन दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="पीठ दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="पीठ दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="आँख की परेशानी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="आँख की परेशानी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="जोड़ों का दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="जोड़ों का दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="गैस / अम्लता" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="गैस / अम्लता" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="कान की परेशानी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="कान की परेशानी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="हाथ का दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="हाथ का दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="दांत की परेशानी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="दांत की परेशानी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="रक्तचाप" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="रक्तचाप" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="सर्दी ज़ुखाम" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="सर्दी ज़ुखाम" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="नर्वस कमजोरी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="नर्वस कमजोरी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="त्वचा की एलर्जी और संक्रमण" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="त्वचा की एलर्जी और संक्रमण" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="कटिस्नायुशूल" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="कटिस्नायुशूल" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="जराचिकित्सा की समस्या" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="जराचिकित्सा की समस्या" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="स्त्री रोग संबंधी समस्या" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="स्त्री रोग संबंधी समस्या" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="मनोवैज्ञानिक समस्या" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="मनोवैज्ञानिक समस्या" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="घबराहट की बीमारियां" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="घबराहट की बीमारियां" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="कब्ज़" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="कब्ज़" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="दस्त" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="दस्त" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="उल्टी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="उल्टी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="घाव" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="घाव" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="हड्डी में दर्द" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="हड्डी में दर्द" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="मूत्र पथ से संबंधित समस्या" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="मूत्र पथ से संबंधित समस्या" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="दुर्बलता" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="दुर्बलता" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="मधुमेह" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="मधुमेह" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="रक्तस्रवण" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="रक्तस्रवण" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="बहरापन" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="बहरापन" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="आंखों की रोशनी के साथ समस्या" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="आंखों की रोशनी के साथ समस्या" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="तीव्र श्वसन संक्रमण" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="तीव्र श्वसन संक्रमण" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="न्यूमोनिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="न्यूमोनिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="तीव्र डायरिया रोग" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="तीव्र डायरिया रोग" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="दण्डाणुज पेचिश" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="दण्डाणुज पेचिश" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="आंतों का बुखार" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="आंतों का बुखार" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="वायरल हेपेटाइटिस" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="वायरल हेपेटाइटिस" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="मलेरिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="मलेरिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="डेंगू" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="डेंगू" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="चिकनगुनिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="चिकनगुनिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="डिप्थीरिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="डिप्थीरिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="काली खांसी" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="काली खांसी" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="छोटी चेचक" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="छोटी चेचक" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="मीसल्स" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="मीसल्स" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="मस्तिष्कावरण शोथ" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="मस्तिष्कावरण शोथ" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="तीव्र एन्सेफलाइटिस की समस्या" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="तीव्र एन्सेफलाइटिस की समस्या" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="अज्ञात बुखार" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="अज्ञात बुखार" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="कालाजार" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="कालाजार" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="लेप्टोस्पाइरोसिस" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="लेप्टोस्पाइरोसिस" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="तीव्र फ्लेसीड पक्षाघात <15 वर्ष की आयु" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="तीव्र फ्लेसीड पक्षाघात <15 वर्ष की आयु" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="पशु का काटना" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="पशु का काटना" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="रेबीज" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="रेबीज" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="सांप का काटना" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="सांप का काटना" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="बिसहरिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="बिसहरिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="फाइलेरिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="फाइलेरिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="थैलेसीमिया" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="थैलेसीमिया" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="शराब की लत" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="शराब की लत" aria-label="Server">
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" name="current_problems[]" type="checkbox" value="Other" id="flexCheckDefault1">
                      <label class="form-check-label" for="flexCheckDefault1">
                        <input type="text" class="form-control" placeholder="Other" aria-label="Server">
                      </label>
                    </div>

                    <input type="text" name="Other_comment" id="Other_comment" placeholder="Any Other comment" />
                    <br><br>
                    <select name="Type_of_Consulting" id="Type_of_Consulting" class="browser-default custom-select">
                      <option selected>Type of Consulting</option>
                      <option value="Real time">Real time</option>
                      <option value="Differed">Differed</option>
                    </select>
                    <br><br>

                    <select name="Assigned_Doctor" id="Assigned_Doctor" class="browser-default custom-select">
                      <option selected>Assigned Doctor</option>
                      <?php
                      while($r = mysqli_fetch_array($s)){
                        ?>
                        <option><?php echo $r['doc_name'] ?></option>
                        <?php
                      }
                      ?>
                      
                      
                      
                      
                    </select>
                    <br><br>
                    <label style="padding-left:10px;" for="Consultation Date">Consultation Date</label><br>
                    <input type="date" name="Consultation_Date" id="Consultation_Date" placeholder="Consultation Date">
                    <br><br>
                    <label style="padding-left:10px;" for="Consultation Time">Consultation Time</label><br>
                    <input type="time" name="Consultation_Time" id="Consultation_Time" placeholder="Consultation Time" />
                    <input type="submit" name="submit" class="next action-button" value="submit" />
                </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
                          <script>
                          var form = document.getElementById("msform");
                          form.addEventListener('submit', function(event) {
                            var Year = new Date().getFullYear().toString().slice(-2);
                            var Month = String(date.getMonth() + 1).padStart(2, '0');
      
                            function myFunction() {
                            //   let count = Number(localStorage.getItem('count')) || 0;
                            //   localStorage.setItem('count', count + 1);
                            //   return count;
                            
                            let count = <?php echo $row_last[22] ?>;
                            count++;
                            return count;
                            }
                            if (myFunction() <= 9)
                            {
                               let random = 'D' + Month + Year + "000" + myFunction();
                               document.getElementById("Day_Card_No").value = random;
                               alert("Day Card number for this form is = " + random);
                            }
                            else if ((myFunction() > 9) && (myFunction() <= 99))
                            {
                               let random = 'D' + Month + Year + "00" + myFunction();
                               document.getElementById("Day_Card_No").value = random;
                               alert("Day Card number for this form is = " + random);
                            }
                            else if ((myFunction() > 99) && (myFunction() <= 999))
                            {
                               let random = 'D' + Month + Year + "0" + myFunction();
                               document.getElementById("Day_Card_No").value = random;
                               alert("Day Card number for this form is = " + random);
                            }
                            else
                            {
                               let random = 'D' + Month + Year + myFunction();
                               document.getElementById("Day_Card_No").value = random;
                               alert("Day Card number for this form is = " + random);
                            }
                          })
                        </script>
                   
  </form>
</body>

</html>