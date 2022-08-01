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

	$Family_Registration_No = $_POST['Family_Registration_No'];
	setcookie('Family_Registration_No', $Family_Registration_No);
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into pat_reg_no(pat1,fam1,pat2,fam2,pat3,fam3,pat4,fam4,pat5,fam5,add_pat1,add_pat2,add_pat3,add_pat4,add_pat5,add_pat6,Family_Registration_No) values(?,?, ?, ?, ?,?,?, ?, ?, ?,?,?,?, ?, ?,?,?)");
		$stmt->bind_param("sssssssssssssssss", $pat1,$fam1, $pat2,$fam2, $pat3,$fam3, $pat4,$fam4, $pat5, $fam5,$add_pat1, $add_pat2, $add_pat3, $add_pat4, $add_pat5, $add_pat6, $Family_Registration_No);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successful...";
		echo 'Thanks For Registering with us';
		header("location:pat1.php");
		$stmt->close();
		$conn->close();
	}
} 


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js">
	</script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript">
	</script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style1.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient Registration</title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg">
			<img src="1234.webp" height="30px" width="30px">
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
	</div>
	<!-- MultiStep Form -->
	<div class="container-fluid" id="grad1">
		<div class="row justify-content-center mt-0">
			<div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
				<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
					<h2><strong>Personal Registration Info</strong></h2>
					<p>First time patient information (To be done only after Family registration)</p>
					<div class="row">
						<div class="col-md-12 mx-0">
							<form id="msform" action="patient_conn.php"  method="post">
								<!-- progressbar -->
								<ul id="progressbar">
									<li class="active" id="account"><strong>Basic Info</strong></li>
									<li id="personal"><strong>Personal Profile</strong></li>
									<li id="personal"><strong>Medical Profile</strong></li>
									<li id="personal"><strong>Past Medical History</strong></li>
									<li id="personal"><strong>महिलाओं के लिए</strong></li>
									<!-- <li id="confirm"><strong>Finish</strong></li> -->
								</ul>
								<!-- fieldsets -->

								<fieldset>
									<div class="form-card">
										<h2 class="fs-title">Basic Info</h2>

										<input type="date" name="Date_of_Enrollment" id="date" placeholder="Date of Registration" readonly="readonly" />
										<script>
											var date = new Date();
											var year = date.getFullYear();
											var month = String(date.getMonth() + 1).padStart(2, '0');
											var todayDate = String(date.getDate()).padStart(2, '0');
											var datePattern = year + '-' + month + '-' + todayDate;
											document.getElementById("date").value = datePattern;
										</script>
										<input type="text" name="Family_Registration_No" value="<?php echo $_COOKIE['Family_Registration_No']; ?>" id="Family_Registration_No" placeholder="Family Registration No" />
										<input type="text" name="name" placeholder="Name" />
										<input type="text" name="Patient_Registration_No" placeholder="Patient_Registration_No" />
										<br><br>
										<select class="browser-default custom-select" name="per_reg">
											<option selected>Patient_Registration_No</option>
											<option value="<?php echo $_COOKIE['pat1']; ?>" id="reg1"><?php echo $_COOKIE['pat1']; ?> </option>
											<option value="<?php echo $_COOKIE['pat2']; ?>" id="reg2"><?php echo $_COOKIE['pat2']; ?> </option>
											<option value="<?php echo $_COOKIE['pat3']; ?>" id="reg3"><?php echo $_COOKIE['pat3']; ?> </option>
											<option value="<?php echo $_COOKIE['pat4']; ?>" id="reg4"><?php echo $_COOKIE['pat4']; ?> </option>
											<option value="<?php echo $_COOKIE['pat5']; ?>" id="reg5"><?php echo $_COOKIE['pat5']; ?> </option>
										</select>
										
									</div>
									<input type="button" name="next" class="next action-button" value="Next Step" />
								</fieldset>
								<fieldset>
									<div class="form-card">
										<h2 class="fs-title">Personal Profile</h2>
										<select class="browser-default custom-select" name="rel_cwe">
											<option selected>Relationship with CWE</option>
											<option value="Self">Self</option>
											<option value="Spouse">Spouse</option>
											<option value="Brother">Brother</option>
											<option value="Sister">Sister</option>
											<option value="Father">Father</option>
											<option value="Mother">Mother</option>
											<option value="Sister">Sister</option>
										</select>
										<br><br>
										<select class="browser-default custom-select" name="gender">
											<option selected>Select Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>

										</select>
										<br><br>

										<input type="date" name="dob" id="datepicker1" placeholder="Date of Birth" />
										<select class="browser-default custom-select" name="edu">
											<option selected>Education</option>
											<option value="कोई औपचारिक शिक्षा नहीं">कोई औपचारिक शिक्षा नहीं</option>
											<option value="कक्षा 5 तक">कक्षा 5 तक</option>
											<option value="कक्षा 6-10, उत्तीर्ण नहीं">कक्षा 6-10, उत्तीर्ण नहीं</option>
											<option value="10 . उत्तीर्ण">10 . उत्तीर्ण</option>
											<option value="कक्षा 11-12, उत्तीर्ण नहीं">कक्षा 11-12, उत्तीर्ण नहीं</option>
											<option value="उत्तीर्ण">उत्तीर्ण</option>
											<option value="नामांकित स्नातक">नामांकित स्नातक</option>
											<option value="ग्रेजुएट">ग्रेजुएट</option>
											<option value="नामांकित स्नातकोत्तर">नामांकित स्नातकोत्तर</option>
											<option value="पोस्ट ग्रेजुएट">पोस्ट ग्रेजुएट</option>
											<option value="अन्य">अन्य</option>

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
											<option selected>Diabetes</option>
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
											<option selected>Alcohol drinking habit</option>
											<option value="Never (कभी नहीँ)">Never (कभी नहीँ)</option>
											<option value="Occasionally (कभी-कभी)">Occasionally (कभी-कभी)</option>
											<option value="Regularly, once a week or more, moderate quantity (नियमित रूप से, सप्ताह में एक बार या अधिक, मध्यम मात्रा)">Regularly, once a week or more, moderate quantity (नियमित रूप से, सप्ताह में एक बार या अधिक, मध्यम मात्रा)</option>
											<option value="Often with heavy quantity (अक्सर भारी मात्रा में)">Often with heavy quantity (अक्सर भारी मात्रा में)</option>
											<option value="Always, can't stay without (हमेशा, इसके बिना नहीं रह सकता)">Always, can't stay without (हमेशा, इसके बिना नहीं रह सकता)</option>
										</select>
										<br><br>

										<select class="browser-default custom-select" name="f_ill">
											<option selected>Family illness</option>
											<option value="Diabetes">Diabetes</option>
											<option value="Hypertension">Hypertension</option>
											<option value="Option 3">Option 3</option>
										</select>
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
											<input class="form-check-input" type="checkbox" name="pm_his[]" value="विद्यार्थी" id="Child3">
											<label class="form-check-label" for="flexCheckDefault">
												विद्यार्थी
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="pm_his[]" value="मधुमेह" id="Brother">
											<label class="form-check-label" for="flexCheckDefault">
												मधुमेह
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="pm_his[]" value="अन्य" id="flexCheckDefault">
											<label class="form-check-label" for="flexCheckDefault">
												अन्य
											</label>
										</div>
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
									<button type="submit" name="submit" class="next action-button">submit</button>
								</fieldset>
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

</html>