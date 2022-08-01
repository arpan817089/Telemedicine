<?php

// session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
	$Date_of_Enrollment = date('y-m-d', strtotime($_POST['Date_of_Enrollment']));
	$Family_Registration_No = $_POST['Family_Registration_No'];
	$name = $_POST['name'];
	$mob_no = $_POST['mob_no'];
	$per_reg = $_POST['per_reg'];
	$rel_cwe = $_POST['rel_cwe'];
	$pat_ticket_id = $_POST['pat_ticket_id'];
	$gender = $_POST['gender'];
	$dob = date('y-m-d', strtotime($_POST['dob']));
	$edu = $_POST['edu'];
	$prof = $_POST['prof'];
	$prof1 = implode(",", $prof);
	$mar_stat = $_POST['mar_stat'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$temp = $_POST['temp'];
	$pulse = $_POST['pulse'];
	$s_bp = $_POST['s_bp'];
	$d_bp = $_POST['d_bp'];
	$spo2 = $_POST['spo2'];
	$diab = $_POST['diab'];
	$asthma = $_POST['asthma'];
	$smoke = $_POST['smoke'];
	$drink = $_POST['drink'];
	$f_ill = $_POST['f_ill'];
	$f_ill1 = implode(",", $f_ill);
	$Other = $_POST['Other'];
	$pm_his = $_POST['pm_his'];
	$pm_his1 = implode(",", $pm_his);
	$Other_pm = $_POST['Other_pm'];
	$ad_hos = $_POST['ad_hos'];
	$pat_con = $_POST['pat_con'];
	$accident = $_POST['accident'];
	$med = $_POST['med'];
	$ch_no = $_POST['ch_no'];
	$del_no = $_POST['del_no'];
	$delivery = $_POST['delivery'];
	$others = $_POST['others'];

	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into patient_registration(Date_of_Enrollment,name,per_reg,pat_ticket_id,rel_cwe,gender,dob,edu,prof,mar_stat,height,weight,temp,pulse,s_bp,d_bp,spo2,diab,asthma,smoke,drink,f_ill,Other,pm_his,Other_pm,ad_hos,pat_con,accident,med,ch_no,del_no,delivery,others,Family_Registration_No,mob_no) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?,?,?,?, ?, ?, ?, ?, ?, ?,?,?,?, ?,?, ?,?,?,?,?)");
		$stmt->bind_param("ssssssssssssssssssssssssssssssssssi", $Date_of_Enrollment, $name, $per_reg,$pat_ticket_id,$rel_cwe, $gender, $dob, $edu, $prof1, $mar_stat, $height, $weight, $temp, $pulse, $s_bp, $d_bp, $spo2, $diab, $asthma, $smoke, $drink, $f_ill1,$Other, $pm_his1, $Other_pm,$ad_hos, $pat_con, $accident, $med, $ch_no, $del_no, $delivery, $others, $Family_Registration_No,$mob_no);
		$execval = $stmt->execute();
		echo $execval;
        date_default_timezone_set('Asia/Kolkata');
            $st_date = date('Y-m-d');
			header("location:DASHBOARD.php?from=$st_date&to=$st_date");
		$stmt->close();
		$conn->close();
	}
}

?>

