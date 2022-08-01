<?php
// mysql_set_charset('utf8');
session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
	$Chief_Earner_Name = $_POST['Chief_Earner_Name'];
	setcookie('Chief_Earner_Name', $Chief_Earner_Name);
	$Family_Registration_No = $_POST['Family_Registration_No'];
	setcookie('Family_Registration_No', $Family_Registration_No);
	$Date_of_Registration = date('y-m-d', strtotime($_POST['Date_of_Registration']));
	$Date = $_POST['Date_of_Registration'];
	setcookie('Date', $Date);
	$Mobile_No = $_POST['Mobile_No'];
	$Address = $_POST['Address'];
	$Location_Code = $_POST['Location_Code'];
	$fam1 = $_POST['Chief_Earner_Name'];;
	setcookie('fam1', $fam1);
	$fam2 = $_POST['fam2'];
	setcookie('fam2', $fam2);
	$fam3 = $_POST['fam3'];
	setcookie('fam3', $fam3);
	$fam4 = $_POST['fam4'];
	setcookie('fam4', $fam4);
	$fam5 = $_POST['fam5'];
	setcookie('fam5', $fam5);
	$fam6 = $_POST['fam6'];
	setcookie('fam6', $fam6);
	$fam7 = $_POST['fam7'];
	setcookie('fam7', $fam7);
	$fam8 = $_POST['fam8'];
	setcookie('fam8', $fam8);

	$rel1 = 'CWE';
	setcookie('rel1', $rel1);
	$rel2 = $_POST['rel2'];
	setcookie('rel2', $rel2);
	$rel3 = $_POST['rel3'];
	setcookie('rel3', $rel3);
	$rel4 = $_POST['rel4'];
	setcookie('rel4', $rel4);
	$rel5 = $_POST['rel5'];
	setcookie('rel5', $rel5);

	$rel6 = $_POST['rel6'];
	setcookie('rel6', $rel6);
	$rel7 = $_POST['rel7'];
	setcookie('rel7', $rel7);
	$rel8 = $_POST['rel8'];
	setcookie('rel8', $rel8);
	
	// $rel5 = $_POST['rel5'];
	// setcookie('rel5', $rel5);

	// $Additional_members_1 = $_POST['add1'];
	$add1 = $_POST['add1'];
	setcookie('add1', $add1);

	// $add_mem2 = $_POST['add2'];
	$add2 = $_POST['add2'];
	setcookie('add2', $add2);

	// $add_mem3 = $_POST['add3'];
	$add3 = $_POST['add3'];
	setcookie('add3', $add3);

	// $add_mem4 = $_POST['add4'];
	$add4 = $_POST['add4'];
	setcookie('add4', $add4);

	// $add_mem5 = $_POST['add5'];
	$add5 = $_POST['add5'];
	setcookie('add5', $add5);

	// $add_mem6 = $_POST['add6'];
	$add6 = $_POST['add6'];
	setcookie('add6', $add6);

// 	$add_rel1 = $_POST['add_rel1'];
// 	setcookie('add_rel1', $add_rel1);
// 	$add_rel2 = $_POST['add_rel2'];
// 	setcookie('add_rel2', $add_rel2);
// 	$add_rel3 = $_POST['add_rel3'];
// 	setcookie('add_rel3', $add_rel3);
// 	$add_rel4 = $_POST['add_rel4'];
// 	setcookie('add_rel4', $add_rel4);
// 	$add_rel5 = $_POST['add_rel5'];
// 	setcookie('add_rel5', $add_rel5);
// 	$add_rel6 = $_POST['add_rel6'];
// 	setcookie('add_rel6', $add_rel6);

	$amount = $_POST['amount'];
	setcookie('amount', $amount);
	$Education = $_POST['Education'];
	$Monthly_Family_Income = $_POST['Monthly_Family_Income'];
	$Marital_status = $_POST['Marital_status'];

	// $Family_Members_1 = $_POST['Family_Members_1'];

	// $data = implode(",", $Family_Members_1);


	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into family_registration(Chief_Earner_Name, Family_Registration_No, Date_of_Registration, Mobile_No, Address, Location_Code,fam1,fam2,fam3,fam4,fam5,fam6,fam7,fam8,rel1,rel2,rel3,rel4,rel5,rel6,rel7,rel8,Additional_members_1,add_mem2,add_mem3,add_mem4,add_mem5,add_mem6,amount, Education, Monthly_Family_Income, Marital_status) values(?,?,?,?,?,?,?,?,?,?,?,?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?, ?, ?, ?, ?,?)");
		$stmt->bind_param("sssissssssssssssssssssssssssssss", $Chief_Earner_Name, $Family_Registration_No, $Date_of_Registration, $Mobile_No, $Address, $Location_Code, $fam1, $fam2, $fam3, $fam4, $fam5,$fam6,$fam7,$fam8,$rel1,$rel2,$rel3,$rel4,$rel5,$rel6,$rel7,$rel8, $add1, $add2, $add3, $add4, $add5, $add6, $amount, $Education, $Monthly_Family_Income, $Marital_status);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successful...";
		header("location:card.php");
		$stmt->close();
		$conn->close();
	}
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
	<title>Telemedicine-Login Admin</title>
	<link rel="stylesheet" href="card.css">
</head>

<body>
	<div id="box">

		<form id="fo" action="pre_pat_regis.php" method="post">
			<img src="Logo.png" class="user">
			<h2>SHOSHAN SURIN FOUNDATION TELEMEDICINE CENTER</h2>
			<div class="family">Family Registration Card</div>
			<div class="reg_no"><b>Registration Number:</b>
				<input type="text" value="<?php echo $_COOKIE['Family_Registration_No']; ?>" name="Family_Registration_No" readonly="readonly">
			</div>
			<div class="cwe"><b>Chief Wage Earner:</b>
				<input type="text" value="<?php echo $_COOKIE['Chief_Earner_Name']; ?>" name="cwe" disabled>
			</div>
			<div class="date"><b>Member Since:</b>
				<input type="text" value="<?php echo $_COOKIE['Date']; ?>" name="date" disabled>
			</div>

			<p>CORE FAMILY MEMBERS</p>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Relationship</th>
				</tr>
				<tr>
					<td><input type="text" name="pat1" id="pat1" readonly="readonly"></td>
					<td><input type="text" name="fam1" value="<?php if (empty($_COOKIE['fam1'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam1'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo "CWE"; ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat2" id="pat2" readonly="readonly"></td>
					<td><input type="text" name="fam2" value="<?php if (empty($_COOKIE['fam2'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam2'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel2'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel2'];
													} ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat3" id="pat3" readonly="readonly"></td>
					<td><input type="text" name="fam3" value="<?php if (empty($_COOKIE['fam3'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam3'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel3'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel3'];
													} ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat4" id="pat4" readonly="readonly"></td>
					<td><input type="text" name="fam4" value="<?php if (empty($_COOKIE['fam4'])) {
																	echo "";
																} else {
																	echo $_COOKIE['fam4'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel4'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel4'];
													} ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat5" id="pat5" readonly="readonly"></td>
					<td><input type="text" name="fam5" value="<?php if (empty($_COOKIE['fam5'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam5'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel5'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel5'];
													} ?>" readonly="readonly"></td>
				</tr>
								<tr>
					<td><input type="text" name="pat6" id="pat6" readonly="readonly"></td>
					<td><input type="text" name="fam6" value="<?php if (empty($_COOKIE['fam6'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam6'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel6'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel6'];
													} ?>" readonly="readonly"></td>
				</tr>
								<tr>
					<td><input type="text" name="pat7" id="pat7" readonly="readonly"></td>
					<td><input type="text" name="fam7" value="<?php if (empty($_COOKIE['fam7'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam7'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel7'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel7'];
													} ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat8" id="pat8" readonly="readonly"></td>
					<td><input type="text" name="fam8" value="<?php if (empty($_COOKIE['fam8'])) {
																	echo " ";
																} else {
																	echo $_COOKIE['fam8'];
																} ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['rel8'])) {
														echo " ";
													} else {
														echo $_COOKIE['rel8'];
													} ?>" readonly="readonly"></td>
				</tr>
				<br>
			</table>
			<p>ADDITIONAL MEMBERS</p>
			<!-- <form name="tablegen">
				<label>Rows: <input type="text" name="rows" id="rows" /></label><br />
				<label>Cols: <input type="text" name="cols" id="cols" /></label><br />
				<input name="generate" type="button" value="Create Table!" onclick='createTable();' />
			</form>

			<div id="wrapper"></div> -->
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<!--<th>Relationship</th>-->
				</tr>
				<tr>
					<td><input type="text" name="add_pat1" id="add_pat1" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['add1'])) {
														echo " ";
													} else {
														echo $_COOKIE['add1'];
													} ?>" readonly="readonly"></td>

				</tr>
				<tr>
					<td><input type="text" name="add_pat2" id="add_pat2" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['add2'])) {
														echo " ";
													} else {
														echo $_COOKIE['add2'];
													} ?>" readonly="readonly"></td>

				</tr>
				<tr>
					<td><input type="text" name="add_pat3" id="add_pat3" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['add3'])) {
														echo " ";
													} else {
														echo $_COOKIE['add3'];
													} ?>" readonly="readonly"></td>

				</tr>
				<tr>
					<td><input type="text" name="add_pat4" id="add_pat4" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['add4'])) {
														echo " ";
													} else {
														echo $_COOKIE['add4'];
													} ?>" readonly="readonly"></td>

				</tr>
				<tr>
					<td><input type="text" name="add_pat5" id="add_pat5" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['add5'])) {
														echo " ";
													} else {
														echo $_COOKIE['add5'];
													} ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="add_pat6" id="add_pat6" readonly="readonly"></td>
					<td><input type="text" value="<?php if (empty($_COOKIE['add6'])) {
														echo " ";
													} else {
														echo $_COOKIE['add6'];
													} ?>" readonly="readonly"></td>

				</tr>
				<tr>
					<th colspan=2><?php echo "Monthly Subscription Fee : Rs " . $_COOKIE['amount']; ?></th>
				</tr>
			</table>

			<input type="button" id="but" value="PRINT">
			<input type="submit" id="but2" name="submit" value="CONFIRM REGISTRATION">
			<!-- <button type="button" name="submit" id = "but">PRINT</button> -->
			<!-- <script type="text/javascript">
				function createTable() {
					var num_rows = document.getElementById('rows').value;
					var num_cols = document.getElementById('cols').value;
					var theader = '<table border="1">\n';
					var tbody = '';
					for (var i = 0; i < 1; i++) {
						tbody += '<tr>';

						for (var j = 0; j < 1; j++) {
							tbody += '<th>';
							tbody += 'ID';
							tbody += '</th>'
						}
						for (var j = 1; j < 2; j++) {
							tbody += '<th>';
							tbody += 'NAME';
							tbody += '</th>'
						}
						for (var j = 2; j < 3; j++) {
							tbody += '<th>';
							tbody += 'RELATIONSHIP';
							tbody += '</th>'
						}
						tbody += '</tr>\n';
					}

					for (var i = 1; i < num_rows; i++) {
						tbody += '<tr>';

						for (var j = 1; j < 2; j++) {
							tbody += '<td>';
							tbody += '<input type="text" name="add_pat1" id="add_pat1" readonly="readonly">';
							tbody += '</td>';
							tbody += '<td>';
							tbody += '<input type="text" value="1234" readonly="readonly">';
							tbody += '</td>';
							tbody += '<td>';
							tbody += '<input type="text" value="add1" readonly="readonly">';
							tbody += '</td>'
						}
						tbody += '</tr>\n';
					}

					var tfooter = '</table>';
					document.getElementById('wrapper').innerHTML = theader + tbody + tfooter;
				}
			</script> -->
			<!-- </head> -->


			<script>
				let random1 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "01";
				document.getElementById("pat1").value = random1;
				let random2 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "02";
				document.getElementById("pat2").value = random2;
				let random3 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "03";
				document.getElementById("pat3").value = random3;
				let random4 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "04";
				document.getElementById("pat4").value = random4;
				let random5 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "05";
				document.getElementById("pat5").value = random5;
				let random6 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "06";
				document.getElementById("pat6").value = random6;
				let random7 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "07";
				document.getElementById("pat7").value = random7;
				let random8 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "08";
				document.getElementById("pat8").value = random8;

				let add_random1 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "11";
				document.getElementById("add_pat1").value = add_random1;
				let add_random2 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "12";
				document.getElementById("add_pat2").value = add_random2;
				let add_random3 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "13";
				document.getElementById("add_pat3").value = add_random3;
				let add_random4 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "14";
				document.getElementById("add_pat4").value = add_random4;
				let add_random5 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "15";
				document.getElementById("add_pat5").value = add_random5;
				let add_random6 = '<?php echo $_COOKIE['Family_Registration_No'] ?>' + "16";
				document.getElementById("add_pat6").value = add_random6;
			</script>

		</form>
	</div>
	<script>
		window.onload = function() {
			document.getElementById("but2").style.display = "none";
			document.getElementById("but")
				.addEventListener("click", () => {
					document.getElementById("but").style.display = "none";

					const invoice = this.document.getElementById("fo");
					var opt = {
						margin: 1,
						filename: 'fam_reg.pdf',
						image: {
							type: 'jpeg',
							quality: 0.98
						},
						html2canvas: {
							scale: 2
						},
						jsPDF: {
							unit: 'in',
							format: 'letter',
							orientation: 'portrait'
						}
					};
					html2pdf().from(invoice).set(opt).save().then(() => {
						document.getElementById("but2").style.display = "block"
					});

				})
		}
	</script>
</body>

</html>