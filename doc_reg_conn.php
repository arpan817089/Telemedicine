<?php

session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
	$doc_name = $_POST['doc_name'];
	

	$SSF_ID = $_POST['SSF_ID'];
	// $Date_of_Registration = date('y-m-d',strtotime($_POST['Date_of_Registration']));
	$Doctors_Registration_No = $_POST['Doctors_Registration_No'];
	$Gender = $_POST['Gender'];
	$Specialty = $_POST['Specialty'];
	$Address = $_POST['Address'];
	$Mobile = $_POST['Mobile'];
	$Availability = $_POST['check'];

	$data = implode(",", $Availability);
	if ($conn->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed : " . $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into doctor(doc_name, SSF_ID, Doctors_Registration_No, Gender, Specialty, Address,Mobile,Availability) values(?,?,?,?, ?, ?,?,?)");
		$stmt->bind_param("siisssis", $doc_name, $SSF_ID, $Doctors_Registration_No, $Gender, $Specialty, $Address, $Mobile, $data);
		$execval = $stmt->execute();
		echo $execval;
            date_default_timezone_set('Asia/Kolkata');
            $st_date = date('Y-m-d');
			header("location:TELEMEDLogin.php");
		$stmt->close();
		$conn->close();
	}
}
