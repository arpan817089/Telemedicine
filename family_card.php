<?php
session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
extract($_REQUEST);
$query = "SELECT * FROM `pat_reg_no` where `Family_Registration_No` = '$x'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);
?>

<?php 
extract($_REQUEST);
$query2 = "SELECT * FROM `family_registration` where `Family_Registration_No` = '$x'";
$result = mysqli_query($conn, $query2);
$fetch2 = mysqli_fetch_row($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
	<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Family Registration Card</title>
	<link rel="stylesheet" href="card.css">
</head>

<body>
	<div id="box">

		<form id="fo" action="" method="post">
			<img src="Logo.png" class="user">
			<h2>SHOSHAN SURIN FOUNDATION TELEMEDICINE CENTER</h2>
			<div class="family">Family Registration Card</div>
			<div class="reg_no"><b>Registration Number:</b>
				<input type="text" value="<?php echo $fetch[22]; ?>" name="Family_Registration_No" readonly="readonly">
			</div>
			<div class="cwe"><b>Chief Wage Earner:</b>
				<input type="text" value="<?php echo $fetch[1];?>" name="cwe" disabled>
			</div>
			<div class="date"><b>Member Since:</b>
				<input type="text" value="<?php echo $fetch2[3]; ?>" name="date" disabled>
			</div>

			<p>CORE FAMILY MEMBERS</p>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Relationship</th>
				</tr>
				<tr>
					<td><input type="text" name="pat1" id="pat1" value="<?php echo $fetch[0]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam1" value="<?php echo $fetch[1];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo "CWE"; ?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat2" id="pat2" value="<?php echo $fetch[2]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam2" value="<?php echo $fetch[3];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[16];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat3" id="pat3" value="<?php echo $fetch[4]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam3" value="<?php echo $fetch[5]?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[17];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat4"  id="pat4" value="<?php echo $fetch[6]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam4" value="<?php echo $fetch[7];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[18];?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="pat5" id="pat5" value="<?php echo $fetch[8]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam5" value="<?php echo $fetch[9];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[19]; ?>" readonly="readonly"></td>
				</tr>
                <tr>
					<td><input type="text" name="pat6" id="pat6" value="<?php echo $fetch[10]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam6" value="<?php echo $fetch[11];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[20]; ?>" readonly="readonly"></td>
				</tr>
                <tr>
					<td><input type="text" name="pat7" id="pat7" value="<?php echo $fetch[12]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam7" value="<?php echo $fetch[13];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[21]; ?>" readonly="readonly"></td>
				</tr>
                <tr>
					<td><input type="text" name="pat8" id="pat8" value="<?php echo $fetch[14]; ?>" readonly="readonly"></td>
					<td><input type="text" name="fam8" value="<?php echo $fetch[15];?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[22]; ?>" readonly="readonly"></td>
				</tr>
				<br>
			</table>
			<p>ADDITIONAL MEMBERS</p>
			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Relationship</th>
				</tr>
				<tr>
					<td><input type="text" name="add_pat1" id="add_pat1" value="<?php echo $fetch[16]; ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[23]?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="add_pat2" id="add_pat2" value="<?php echo $fetch[17]; ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[24]?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="add_pat3" id="add_pat3" value="<?php echo $fetch[18]; ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[25]?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="add_pat4" id="add_pat4" value="<?php echo $fetch[19]; ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[26]?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="add_pat5" id="add_pat5" value="<?php echo $fetch[20]; ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[27]?>" readonly="readonly"></td>
				</tr>
				<tr>
					<td><input type="text" name="add_pat6" id="add_pat6" value="<?php echo $fetch[21]; ?>" readonly="readonly"></td>
					<td><input type="text" value="<?php echo $fetch2[28]?>" readonly="readonly"></td>
				</tr>
				<tr>
					<th colspan=3><?php echo "Monthly Subscription Fee : Rs " . $fetch2[29]; ?></th>
				</tr>
			</table>
			<input type="button" id="but" value="PRINT">
			            <?php date_default_timezone_set('Asia/Kolkata');
            $st_date = date('Y-m-d'); ?>
            <button type="submit" id="but2" style="height:20px;padding-bottom:2rem;width:100px;margin-top:2rem;margin-left: 20rem;" class="btn-wide btn btn-success"><a style="color: white;padding-top:20px" href="DASHBOARD.php?from=<?php echo $st_date ?>&to=<?php echo $st_date ?>">Back</a></button>
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