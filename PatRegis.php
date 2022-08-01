<?php header('Content-Type: text/html; charset=utf-8'); ?>

<?php

session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
// $conn = mysqli_connect("localhost", "root", "", "doc_patient");
// if (isset($_POST['login'])) {

    if (isset($_POST['submit'])) {
    $pat_reg  = $_POST['pat_reg'];
;
    $q1 = "SELECT * FROM `pat_reg_no`  WHERE `pat1`= '$pat_reg'";
    $e1 = mysqli_query($conn, $q1);
    if (mysqli_num_rows($e1) > 0) {

        $res = mysqli_fetch_row($e1);
        $nm = $res[0];
        $fam = $res[22];
        $fam1 = $res[1];
    }

    $q2 = "SELECT * FROM `pat_reg_no`  WHERE `pat2`='$pat_reg'";
    $e2 = mysqli_query($conn, $q2);
    if (mysqli_num_rows($e2) > 0) {

        $res = mysqli_fetch_row($e2);
        $nm = $res[2];
        $fam = $res[22];
        $fam1 = $res[3];
    }
    $q3 = "SELECT * FROM `pat_reg_no`  WHERE `pat3`='$pat_reg'";
    $e3 = mysqli_query($conn, $q3);
    if (mysqli_num_rows($e3) > 0) {

        $res = mysqli_fetch_row($e3);
        $nm = $res[4];
        $fam = $res[22];
        $fam1 = $res[5];
    }
    $q4 = "SELECT * FROM `pat_reg_no`  WHERE `pat4`='$pat_reg'";
    $e4 = mysqli_query($conn, $q4);
    if (mysqli_num_rows($e4) > 0) {

        $res = mysqli_fetch_row($e4);
        $nm = $res[6];
        $fam = $res[22];
        $fam1 = $res[7];
    }
    $q5 = "SELECT * FROM `pat_reg_no`  WHERE `pat5`='$pat_reg'";
    $e5 = mysqli_query($conn, $q5);
    if (mysqli_num_rows($e5) > 0) {

        $res = mysqli_fetch_row($e5);
        $nm = $res[8];
        $fam = $res[22];
        $fam1 = $res[9];
    }
    
    $q6 = "SELECT * FROM `pat_reg_no`  WHERE `pat6`='$pat_reg'";
    $e6 = mysqli_query($conn, $q6);
    if (mysqli_num_rows($e6) > 0) {

        $res = mysqli_fetch_row($e6);
        $nm = $res[10];
        $fam = $res[22];
        $fam1 = $res[11];
    }
    
    $q7 = "SELECT * FROM `pat_reg_no`  WHERE `pat7`='$pat_reg'";
    $e7 = mysqli_query($conn, $q7);
    if (mysqli_num_rows($e7) > 0) {

        $res = mysqli_fetch_row($e7);
        $nm = $res[12];
        $fam = $res[22];
        $fam1 = $res[13];
    }
    
    $q8 = "SELECT * FROM `pat_reg_no`  WHERE `pat8`='$pat_reg'";
    $e8 = mysqli_query($conn, $q8);
    if (mysqli_num_rows($e8) > 0) {

        $res = mysqli_fetch_row($e8);
        $nm = $res[14];
        $fam = $res[22];
        $fam1 = $res[15];
    }
    
    $q9 = "SELECT * FROM `pat_reg_no`  WHERE `add_pat1`='$pat_reg'";
    $e9 = mysqli_query($conn, $q9);
    if (mysqli_num_rows($e9) > 0) {

        $res = mysqli_fetch_row($e9);
        $nm = $res[16];
        $fam = $res[22];
        // $fam1 = $res[15];
    }
    
    $q10 = "SELECT * FROM `pat_reg_no`  WHERE `add_pat2`='$pat_reg'";
    $e10 = mysqli_query($conn, $q10);
    if (mysqli_num_rows($e10) > 0) {

        $res = mysqli_fetch_row($e10);
        $nm = $res[17];
        $fam = $res[22];
        // $fam1 = $res[15];
    }
    
    
    $q11 = "SELECT * FROM `pat_reg_no`  WHERE `add_pat3`='$pat_reg'";
    $e11 = mysqli_query($conn, $q11);
    if (mysqli_num_rows($e11) > 0) {

        $res = mysqli_fetch_row($e11);
        $nm = $res[18];
        $fam = $res[22];
        // $fam1 = $res[15];
    }
    
    
    $q12 = "SELECT * FROM `pat_reg_no`  WHERE `add_pat4`='$pat_reg'";
    $e12 = mysqli_query($conn, $q12);
    if (mysqli_num_rows($e12) > 0) {

        $res = mysqli_fetch_row($e12);
        $nm = $res[19];
        $fam = $res[22];
        // $fam1 = $res[15];
    }
    
    
    $q13 = "SELECT * FROM `pat_reg_no`  WHERE `add_pat5`='$pat_reg'";
    $e13 = mysqli_query($conn, $q13);
    if (mysqli_num_rows($e13) > 0) {

        $res = mysqli_fetch_row($e13);
        $nm = $res[20];
        $fam = $res[22];
        // $fam1 = $res[15];
    }
    
    $q14 = "SELECT * FROM `pat_reg_no`  WHERE `add_pat6`='$pat_reg'";
    $e14 = mysqli_query($conn, $q14);
    if (mysqli_num_rows($e14) > 0) {

        $res = mysqli_fetch_row($e14);
        $nm = $res[21];
        $fam = $res[22];
        // $fam1 = $res[15];
    }
}
?>

<?php
  $conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
  $q1 = "SELECT * FROM `patient_registration`";
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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" >
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script> -->
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <!-- <link rel="stylesheet" href="style1.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->
    <!-- <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    $( function() {
      $( "#datepicker1" ).datepicker();
    } );
    </script> -->
    <!-- <link rel="stylesheet" href="style1.css"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
</head>

<body>
<style>
      body {
        background: black;
        background-size: 400% 400%;
        height: 85rem;
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
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h1><img src="Logo.png" height="100px" width="100px"><strong>PATIENT REGISTRATION</strong><img src="Logo.png" height="100px" width="100px"></h1>
                    <p>First time patient information (To be done only after Family registration)</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="patient_conn.php" method="post">
                                <!-- progressbar -->
                                <!-- <ul id="progressbar">
                                    <li class="active" id="account"><strong>Basic Info</strong></li>
                                    <li id="personal"><strong>Personal Profile</strong></li>
                                    <li id="personal"><strong>Medical Profile</strong></li>
                                    <li id="personal"><strong>Past Medical History</strong></li>
                                    <li id="personal"><strong>महिलाओं के लिए</strong></li>
                                     <li id="confirm"><strong>Finish</strong></li>
                                </ul> -->
                                <!-- fieldsets -->

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Basic Info</h2>
                                        <label style="padding-left:10px;" for="Date">Date</label><br>
                                        <input type="date" name="Date_of_Enrollment" id="date" placeholder="Date of Registration" readonly="readonly" />
                                        <script>
                                            var date = new Date();
                                            var year = date.getFullYear();
                                            var month = String(date.getMonth() + 1).padStart(2, '0');
                                            var todayDate = String(date.getDate()).padStart(2, '0');
                                            var datePattern = year + '-' + month + '-' + todayDate;
                                            document.getElementById("date").value = datePattern;
                                        </script>
                                        <label style="padding-left:10px;" for="Family Registration No">Family Registration No</label><br>
                                        <input type="text" name="Family_Registration_No" placeholder="Family Registration No" value="<?php echo $fam ?>" readonly="readonly" />
                                        <label style="padding-left:10px;" for="Name">Name</label><br>
                                        <input type="text" name="name" placeholder="Name" value="<?php echo $fam1 ?>"  readonly="readonly" />
                                        <label style="padding-left:10px;" for="Patient Registration No">Patient Registration No</label><br>
                                        <input type="text" name="per_reg" id="reg_no" value="<?php echo $nm ?>" placeholder="Personal Registration No" readonly="readonly" />
                                        <input type="text" name="pat_ticket_id" id="pat_ticket_id" placeholder="Patient Ticket Id" readonly="readonly" />
                                        <label style="padding-left:10px;" for="Mobile No">Mobile No</label><br>
                                        <input type="text" name="mob_no" id="mob_no"  placeholder="Personal Mobile No" required/>

                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Profile</h2>
                                        <select class="browser-default custom-select" name="rel_cwe">
                                            <option selected>Relationship with CWE</option>
                                            <option value="खुद (self)">खुद (self)</option>
                                            <option value="पति या पत्नी">पति या पत्नी</option>
                                            <option value="बेटा">बेटा</option>
                                            <option value="बेटी">बेटी</option>
                                            <option value="पिता"> पिता </option>
                                            <option value="माता">माता</option>
                                            <option value="बहू">बहू</option>
                                            <option value="भइया">भइया</option>
                                            <option value="बहन">बहन</option>
                                            <option value="दादा">दादा</option>
                                            <option value="दादी मा">दादी मा</option>
                                            <option value="पोता">पोता</option>
                                            <option value="पोती">पोती</option>
                                            <option value="अन्य">अन्य</option>
                                        </select>
                                        <br><br>
                                        <select class="browser-default custom-select" name="gender">
                                            <option selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                        <br><br>
                                        <label for="Date Of Birth">Date Of Birth</label>
                                        <input type="date" name="dob" id="datepicker1" placeholder="Date of Birth" />
                                        <select class="browser-default custom-select" name="edu">
                                            <option selected>Education</option>
                                            <option value="कोई औपचारिक शिक्षा नहीं">कोई औपचारिक शिक्षा नहीं</option>
                                            <option value="कक्षा 5 तक">कक्षा 5 तक</option>
                                            <option value="कक्षा 6-10, उत्तीर्ण नहीं">कक्षा 6-10, उत्तीर्ण नहीं</option>
                                            <option value="10 . उत्तीर्ण">10 . उत्तीर्ण</option>
                                            <option value="कक्षा 11-12, उत्तीर्ण नहीं">कक्षा 11-12, उत्तीर्ण नहीं</option>
                                            <option value="12 उत्तीर्ण">12 उत्तीर्ण</option>
                                            <option value="नामांकित स्नातक">नामांकित स्नातक</option>
                                            <option value="ग्रेजुएट">ग्रेजुएट</option>
                                            <option value="नामांकित स्नातकोत्तर">नामांकित स्नातकोत्तर</option>
                                            <option value="पोस्ट ग्रेजुएट">पोस्ट ग्रेजुएट</option>
                                            <!-- <option value="अन्य">अन्य</option> -->

                                        </select>
                                        <br><br>

                                        <label>Profession</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="किसान" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                किसान
                                            </label>
                                        </div>
                                                                                <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="किसान" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                नौकरी
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="घरेलू कार्यकर्ता" id="Child1">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                घरेलू कार्यकर्ता
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="दैनिक दांव" id="Child2">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                दैनिक दांव
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="विद्यार्थी" id="Child3">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                विद्यार्थी
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="भइया/ Brother" id="Brother">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                भइया/ Brother
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="समाज सेवक" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                समाज सेवक
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="बेरोजगार" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                बेरोजगार
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="सेवातनवृत" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                सेवातनवृत
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="prof[]" type="checkbox" value="कुशल कामगार (राजमिस्त्री, दर्जी, बढ़ई, बिजली मिस्त्री, नर्स आदि)" id="amembers">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                कुशल कामगार (राजमिस्त्री, दर्जी, बढ़ई, बिजली मिस्त्री, नर्स आदि)
                                            </label>
                                        </div>
                                        <br><br>
                                        <select class="browser-default custom-select" name="mar_stat">
                                            <option selected>Marital status</option>
                                            <option value="Not Married/ अविवाहित">Not Married/ अविवाहित</option>
                                            <option value="विवाहित/ Married">विवाहित/ Married</option>
                                            <option value="विधवा / अलग (Widow/ Separated)">विधवा / अलग (Widow/ Separated)</option>
                                        </select>
                                        <br><br>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Medical Profile</h2>

                                        <input type="text" name="height" placeholder="Height" />
                                        <input type="text" name="weight" placeholder="Weight" />
                                        <input type="text" name="temp" placeholder="तापमान Temperature (F)" />
                                        <input type="text" name="pulse" placeholder="Pulse" />
                                        <input type="text" name="s_bp" placeholder="सिस्टोलिक रक्तचाप (Systolic Blood Pressure)" />
                                        <input type="text" name="d_bp" placeholder="डायस्टोलिक रक्तचाप (Diastolic Blood Pressure)" />
                                        <input type="text" name="spo2" placeholder="एसपीओ २ SPO2" />

                                        <select class="browser-default custom-select" name="diab">
                                            <option selected>Do you have Diabetes? (क्या आपको मधुमेह है?)</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Dont Know">Dont Know</option>
                                        </select>
                                        <br><br>
                                        <select class="browser-default custom-select" name="asthma">
                                            <option selected>Do you have asthma or any breathing trouble? (क्या आपको अस्थमा है या सांस लेने में कोई परेशानी है?)</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select>
                                        <br><br>

                                        <select class="browser-default custom-select" name="smoke">
                                            <option selected>Smoking habits (धूम्रपान की आदतें)</option>
                                            <option value="एक दिन में 10 से अधिक">एक दिन में 10 से अधिक</option>
                                            <option value="दिन में 10 से कम">दिन में 10 से कम</option>
                                            <option value="अनियमित रूप से धूम्रपान करें">अनियमित रूप से धूम्रपान करें</option>
                                            <option value="पिछले 5 वर्षों में छोड़ दिया">पिछले 5 वर्षों में छोड़ दिया</option>
                                            <option value="5 साल से अधिक समय पहले छोड़ दिया">5 साल से अधिक समय पहले छोड़ दिया</option>
                                            <option value="कभी धूम्रपान नहीं किया">कभी धूम्रपान नहीं किया</option>
                                        </select>
                                        <br><br>

                                        <select class="browser-default custom-select" name="drink">
                                            <option selected>Alcohol drinking habit (शराब पीने की आदत)</option>
                                            <option value="Never (कभी नहीँ)">Never (कभी नहीँ)</option>
                                            <option value="Occasionally (कभी-कभी)">Occasionally (कभी-कभी)</option>
                                            <option value="Regularly, once a week or more, moderate quantity (नियमित रूप से, सप्ताह में एक बार या अधिक, मध्यम मात्रा)">Regularly, once a week or more, moderate quantity (नियमित रूप से, सप्ताह में एक बार या अधिक, मध्यम मात्रा)</option>
                                            <option value="Often with heavy quantity (अक्सर भारी मात्रा में)">Often with heavy quantity (अक्सर भारी मात्रा में)</option>
                                            <option value="Always, can't stay without (हमेशा, इसके बिना नहीं रह सकता)">Always, can't stay without (हमेशा, इसके बिना नहीं रह सकता)</option>
                                        </select>
                                        <br><br>
                                        
                                        
                                        <label>Family illness(पारिवारिक बीमारी)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_ill[]" type="checkbox" value="Diabetes (मधुमेह)" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Diabetes (मधुमेह)
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_ill[]" type="checkbox" value="Hypertension (उच्च रक्तचाप)" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Hypertension (उच्च रक्तचाप)
                                            </label>
                                        </div>
                                        
                                        <!--<div class="form-check">-->
                                        <!--    <input class="form-check-input" name="f_ill[]" type="checkbox" value="Other (अन्य)" id="Spouse">-->
                                        <!--    <label class="form-check-label" for="flexCheckDefault">-->
                                        <!--        Other (अन्य)-->
                                        <!--    </label>-->
                                        <!--</div>-->
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_ill[]" type="checkbox" value="टीबी" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                टीबी
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_ill[]" type="checkbox" value="सेरेब्रल अटैक" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                सेरेब्रल अटैक
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_ill[]" type="checkbox" value="ज्ञात नहीं है" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                ज्ञात नहीं है
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" name="f_ill[]" type="checkbox" value="कुछ नहीं" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                कुछ नहीं
                                            </label>
                                        </div>
                                        <br>
                                        <label style="padding-left:10px;" for="Other (अन्य)">Other (अन्य)</label><br>
                                        <input type="text" name="Other"   placeholder="Other (अन्य)" />
                                        <br><br>



                                    </div>


                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next Step" />
                                </fieldset>



                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Past Medical History</h2>

                                        <label>पिछली बीमारियां:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="कैंसर" id="Spouse">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                कैंसर
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="हृदय रोग" id="Child1">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                हृदय रोग
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="उच्च रक्तचाप" id="Child2">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                उच्च रक्तचाप
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="मधुमेह" id="Brother">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                मधुमेह
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="टीबी" id="Brother">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                टीबी
                                            </label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="सेरेब्रल अटैक" id="Brother">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                सेरेब्रल अटैक
                                            </label>
                                        </div>
                                        
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="pm_his[]" value="कुछ नही" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                कुछ नहीं
                                            </label>
                                        </div>
                                        
                                        <!--<div class="form-check">-->
                                        <!--    <input class="form-check-input" type="checkbox" name="pm_his[]" value="अन्य" id="flexCheckDefault">-->
                                        <!--    <label class="form-check-label" for="flexCheckDefault">-->
                                        <!--        अन्य-->
                                        <!--    </label>-->
                                        <!--</div>-->
<br><br>                                        
                                        
                                        <label style="padding-left:10px;" for="Other (अन्य)">Other (अन्य)</label><br>
                                        <input type="text" name="Other_pm"   placeholder="Other (अन्य)" />
                                        <br><br>
                                        <select class="browser-default custom-select" name="ad_hos">
                                            <option selected>अस्पताल में भर्ती</option>
                                            <option value="बच्चे का जन्म">बच्चे का जन्म</option>
                                            <option value="चिकित्सा">चिकित्सा</option>
                                            <option value="शल्य चिकित्सा">शल्य चिकित्सा</option>
                                        </select>
                                        <br><br>


                                        <select class="browser-default custom-select" name="pat_con">
                                            <option selected>स्वास्थ्य की स्थिति</option>
                                            <option value="उत्कृष्ट">उत्कृष्ट</option>
                                            <option value="अच्छा">अच्छा</option>
                                            <option value="निष्पक्ष">निष्पक्ष</option>
                                            <option value="बुरा">बुरा</option>
                                            <option value="बहुत बुरा">बहुत बुरा</op
                                        </select>
                                        <br><br>

                                        <input type="text" name="accident" placeholder="चोट या दुर्घटनाएं" />
                                        <input type="text" name="med" placeholder="वर्तमान दवाएं" />
                                    </div>



                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card" name="ch_no">
                                        <h2 class="fs-title">प्रसूति / स्त्री रोग संबंधी इतिहास (महिलाओं के लिए):</h2>
                                        <input type="text" name="ch_no" placeholder="बच्चों की संख्या" />
                                        <input type="text" name="del_no" placeholder="गर्भधारण की कुल संख्या" />
                                        <input type="text" name="delivery" placeholder="गर्भपातगर्भपात" />
                                        <input type="text" name="others" placeholder="अन्य जटिलताएं" />
                                    </div>
                                    <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous"/> -->
                                    <!-- <button id="myButton" name = "submit" class="float-left submit-button" >Submit</button>

                                <script type="text/javascript">
                                    document.getElementById("myButton").onclick = function () {
                                        location.href = "http://localhost/tel/patient_conn.php";
                                    };
                                </script> -->
                                    <!-- <input type="button" name="submit" class="next action-button" value="submit" /> -->
                                    <button type="submit" name="submit" class="next action-button">submit</button>
                                    <!-- <script>
                                       var form = document.getElementById("msform");
                                       form.addEventListener('submit',function(event){  
		                                   var Year = new Date().getFullYear().toString().slice(-2);
		                                   var Month = String(date.getMonth() + 1).padStart(2, '0');
		
		                                   function getValue(){
		                                     let store = document.getElementById("location_code").value;
		                                     return store;
                                       }
		
                                       function myFunction() {
                                         let count = Number(localStorage.getItem('count')) || 0;
                                         localStorage.setItem('count', count + 1);
                                         return count;
                                       }
                                       let random = getValue() + Month + Year +  "000" + myFunction() +"0" + myFunction();
		                                   document.getElementById("reg_no").value = random;
		                                   alert("Your Registration number is = " + random);
    
                                     })
                            </script> -->
                                </fieldset>

                                <!-- <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                                <a href="PatRegis.html">
                                                    <h5>Back to Fill Another Form</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var form = document.getElementById("msform");
    form.addEventListener('submit', function(event) {
        var date = new Date();
        var todayDate = String(date.getDate()).padStart(2, '0');
        var Year = new Date().getFullYear().toString().slice(-2);
        var Month = String(date.getMonth() + 1).padStart(2, '0');

        function myFunction() {
        //   let count = Number(localStorage.getItem('count')) || 0;
        //   localStorage.setItem('count', count + 1);
        //   return count;
                            
        let count = <?php echo $row_last[0] ?>;
        count++;
        return count;
        }
        let random = Year + month + todayDate + "0" + myFunction();
        document.getElementById("pat_ticket_id").value = random;
        alert("Your patient ticket id is = " + random);

    })
</script>


<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
</script>
<?php

?>

</html>