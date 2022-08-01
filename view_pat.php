<?php
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
    $pat_reg  = $_POST['pat_reg'];

    $q1 = "SELECT * FROM `pat_reg_no`  WHERE `pat1`='$pat_reg'";
    $e1 = mysqli_query($conn, $q1);
    if (mysqli_num_rows($e1) > 0) {

        $res = mysqli_fetch_row($e1);
        $nm = $res[0];
        $fam = $res[16];
        $fam1 = $res[1];
    }

    $q2 = "SELECT * FROM `pat_reg_no`  WHERE `pat2`='$pat_reg'";
    $e2 = mysqli_query($conn, $q2);
    if (mysqli_num_rows($e2) > 0) {

        $res = mysqli_fetch_row($e2);
        $nm = $res[2];
        $fam = $res[16];
        $fam1 = $res[3];
    }
    $q3 = "SELECT * FROM `pat_reg_no`  WHERE `pat3`='$pat_reg'";
    $e3 = mysqli_query($conn, $q3);
    if (mysqli_num_rows($e3) > 0) {

        $res = mysqli_fetch_row($e3);
        $nm = $res[4];
        $fam = $res[16];
        $fam1 = $res[5];
    }
    $q4 = "SELECT * FROM `pat_reg_no`  WHERE `pat4`='$pat_reg'";
    $e4 = mysqli_query($conn, $q4);
    if (mysqli_num_rows($e4) > 0) {

        $res = mysqli_fetch_row($e4);
        $nm = $res[6];
        $fam = $res[16];
        $fam1 = $res[7];
    }
    $q5 = "SELECT * FROM `pat_reg_no`  WHERE `pat5`='$pat_reg'";
    $e5 = mysqli_query($conn, $q5);
    if (mysqli_num_rows($e5) > 0) {

        $res = mysqli_fetch_row($e5);
        $nm = $res[8];
        $fam = $res[16];
        $fam1 = $res[9];
    }
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "doc_patient");
if (isset($_POST['submit'])) {
    $pat_reg = $_POST['pat_reg'];
    setcookie('pat_reg', $pat_reg);
}

$pat_reg1 = $_COOKIE['pat_reg'];
setcookie('pat_reg1', $pat_reg1);
$query = "SELECT * FROM `patient_registration` WHERE `per_reg`LIKE '$pat_reg1'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);
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
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 8s ease infinite;
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
                    <h1><strong>PATIENT REGISTRATION</strong></h1>
                    <p>First time patient information (To be done only after Family registration)</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="pre_view_pat.php" method="post">
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
                                        <input type="text" name="Family_Registration_No" placeholder="Family Registration No" value="<?php echo $fetch[31]; ?>" readonly="readonly" />
                                        <label style="padding-left:10px;" for="Name">Name</label><br>
                                        <input type="text" name="name" placeholder="Name" value="<?php echo $fam1 ?>"  readonly="readonly" />
                                        <label style="padding-left:10px;" for="Patient Registration No">Patient Registration No</label><br>
                                        <input type="text" name="per_reg" id="reg_no" value="<?php echo $nm ?>" placeholder="Personal Registration No" readonly="readonly" />
                                        <label style="padding-left:10px;" for="Patient Ticket ID">Patient Ticket ID</label><br>
                                        <input type="text" name="pat_ticket_id" id="pat_ticket_id" placeholder="Patient Ticket Id" readonly="readonly" value="<?php echo $fetch[3]; ?>" />


                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Profile</h2>
                                        <label style="padding-left:10px;" for="Relationship With CWE">Relationship With CWE</label><br>
                                        <input type="text" name="Relationship With CWE" id="pat_ticket_id" placeholder="Relationship With CWE" readonly="readonly" value="<?php echo $fetch[4]; ?>" />
                                        <br><br>
                                        <label style="padding-left:10px;" for="Gender">Gender</label><br>
                                        <input type="text" name="Gender" id="Gender" placeholder="Gender" readonly="readonly" value="<?php echo $fetch[5]; ?>" />
                                        <br><br>
                                        <label style="padding-left:10px;" for="DOB">DOB</label><br>
                                        <input type="date" name="dob" id="datepicker1" placeholder="Date of Birth" value="<?php echo $fetch[6]; ?>" />
                                        <label style="padding-left:10px;" for="Education">Education</label><br>
                                        <input type="text" name="Education" id="Education" placeholder="Education" value="<?php echo $fetch[7]; ?>" />
                                        <br><br>

                                        <label style="padding-left:10px;" for="Profession">Profession</label>
                                        <input type="text" name="Profession" id="Profession" placeholder="Profession" value="<?php echo $fetch[8]; ?>" />
                                        <br><br>
                                        <label style="padding-left:10px;" for="Marital Status">Marital Status</label>
                                        <input type="text" name="Marital Status" id="Marital Status" placeholder="Marital Status" value="<?php echo $fetch[9]; ?>" />
                                        <br><br>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Medical Profile</h2>
                                        <label style="padding-left:10px;" for="Height">Height</label>
                                        <input type="text" name="height" placeholder="Height" value="<?php echo $fetch[10]; ?>" />
                                        <label style="padding-left:10px;" for="Weight">Weight</label>
                                        <input type="text" name="weight" placeholder="Weight" value="<?php echo $fetch[11]; ?>" />
                                        <label style="padding-left:10px;" for="तापमान Temperature (F)">तापमान Temperature (F)</label>
                                        <input type="text" name="temp" placeholder="तापमान Temperature (F)" value="<?php echo $fetch[12]; ?>" />
                                        <label style="padding-left:10px;" for="Pulse">Pulse</label>
                                        <input type="text" name="pulse" placeholder="Pulse" value="<?php echo $fetch[13]; ?>" />
                                        <label style="padding-left:10px;" for="सिस्टोलिक रक्तचाप (Systolic Blood Pressure)">सिस्टोलिक रक्तचाप (Systolic Blood Pressure)</label>
                                        <input type="text" name="s_bp" placeholder="सिस्टोलिक रक्तचाप (Systolic Blood Pressure)" value="<?php echo $fetch[14]; ?>" />
                                        <label style="padding-left:10px;" for="डायस्टोलिक रक्तचाप (Diastolic Blood Pressure)">डायस्टोलिक रक्तचाप (Diastolic Blood Pressure)</label>
                                        <input type="text" name="d_bp" placeholder="डायस्टोलिक रक्तचाप (Diastolic Blood Pressure)" value="<?php echo $fetch[15]; ?>" />
                                        <label style="padding-left:10px;" for="एसपीओ २ SPO2">एसपीओ २ SPO2</label>
                                        <input type="text" name="spo2" placeholder="एसपीओ २ SPO2" value="<?php echo $fetch[16]; ?>" />

                                        <label style="padding-left:10px;" for="Diabetes">Diabetes</label>
                                        <input type="text" name="Diabetes" id="Diabetes" placeholder="Diabetes" value="<?php echo $fetch[17]; ?>" />

                                        <br><br>
                                        <label style="padding-left:10px;" for="Do you have asthma or any breathing trouble? (क्या आपको अस्थमा है या सांस लेने में कोई परेशानी है?)">Do you have asthma or any breathing trouble? (क्या आपको अस्थमा है या सांस लेने में कोई परेशानी है?)</label>
                                        <input type="text" name="Do you have asthma" id="Do you have asthma" placeholder="Do you have asthma" value="<?php echo $fetch[18]; ?>" />
                                        <br><br>
                                        <label style="padding-left:10px;" for="Smoking habits (धूम्रपान की आदतें)">Smoking habits (धूम्रपान की आदतें)</label>
                                        <input type="text" name="Smoking habits (धूम्रपान की आदतें)" id="Smoking habits (धूम्रपान की आदतें)" placeholder="Smoking habits (धूम्रपान की आदतें)" value="<?php echo $fetch[19]; ?>" />
                                        <br><br>

                                        <label style="padding-left:10px;" for="Alcohol drinking habit">Alcohol drinking habit</label>
                                        <input type="text" name="Alcohol drinking habit" id="Alcohol drinking habit" placeholder = "Alcohol drinking habit" value="<?php echo $fetch[20]; ?>" />
                                        <br><br>

                                        <label style="padding-left:10px;" for="Family Illness">Family Illness</label>
                                        <input type="text" name="Family Illness" id="Family Illness" placeholder="Family Illness" value="<?php echo $fetch[21]; ?>" />
                                        <br><br>



                                    </div>


                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next Step" />
                                </fieldset>



                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Past Medical History</h2>

                                        <label style="padding-left:10px;" for="पिछली बीमारियां:">पिछली बीमारियां:</label>
                                        
                                        <input type="text" name="पिछली बीमारियां:" id="पिछली बीमारियां:" placeholder="पिछली बीमारियां:" value="<?php echo $fetch[22]; ?>" />
                                        <br><br>
                                        <label style="padding-left:10px;" for="अस्पताल में भर्ती">अस्पताल में भर्ती</label>
                                        
                                        <input type="text" name="अस्पताल में भर्ती" id="अस्पताल में भर्ती" placeholder="अस्पताल में भर्ती" value="<?php echo $fetch[23]; ?>" />
                                        <br><br>

                                        <label style="padding-left:10px;" for="स्वास्थ्य की स्थिति">स्वास्थ्य की स्थिति</label>
                                        
                                        <input type="text" name="स्वास्थ्य की स्थिति" id="स्वास्थ्य की स्थिति" placeholder="स्वास्थ्य की स्थिति" value="<?php echo $fetch[24]; ?>" />
                                        <br><br>
                                        <label style="padding-left:10px;" for="चोट या दुर्घटनाएं">चोट या दुर्घटनाएं</label>
                                        <input type="text" name="accident" value="<?php echo $fetch[25]; ?>"  placeholder="चोट या दुर्घटनाएं" />
                                        <label style="padding-left:10px;" for="वर्तमान दवाएं">वर्तमान दवाएं</label>
                                        <input type="text" name="med" value="<?php echo $fetch[26]; ?>"  placeholder="वर्तमान दवाएं" />
                                    </div>



                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card" name="ch_no">
                                        <h2 class="fs-title">प्रसूति / स्त्री रोग संबंधी इतिहास (महिलाओं के लिए):</h2>
                                        <label style="padding-left:10px;" for="बच्चों की संख्या">बच्चों की संख्या</label>
                                        <input type="text" name="ch_no" value="<?php echo $fetch[27]; ?>" placeholder="बच्चों की संख्या" />
                                        
                                        <label style="padding-left:10px;" for="गर्भधारण की कुल संख्या">गर्भधारण की कुल संख्या</label>
                                        <input type="text" name="del_no" value="<?php echo $fetch[28]; ?>" placeholder="गर्भधारण की कुल संख्या" />
                                        <label style="padding-left:10px;" for="गर्भपातगर्भपात">गर्भपातगर्भपात</label>
                                        <input type="text" name="delivery" value="<?php echo $fetch[29]; ?>" placeholder="गर्भपातगर्भपात" />
                                        <label style="padding-left:10px;" for="अन्य जटिलताएं">अन्य जटिलताएं</label>
                                        <input type="text" name="others" value="<?php echo $fetch[30]; ?>" placeholder="अन्य जटिलताएं" />
                                    </div>
                                    <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous"/> -->
                                    <!-- <button id="myButton" name = "submit" class="float-left submit-button" >Submit</button>

                                <script type="text/javascript">
                                    document.getElementById("myButton").onclick = function () {
                                        location.href = "http://localhost/tel/patient_conn.php";
                                    };
                                </script> -->
                                    <!-- <input type="button" name="submit" class="next action-button" value="submit" /> -->
                                    <button type="submit" name="submit" class="next action-button">Go Back</button>
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