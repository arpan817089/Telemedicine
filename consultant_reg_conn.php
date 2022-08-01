<?php

// session_start();
$conn = mysqli_connect("localhost","arp7029","790Aa@790","doc_patient");

if(isset($_POST['submit']))
{
	$date = date('y-m-d',strtotime($_POST['Date']));
	$Day_Card_No  = $_POST['Day_Card_No'];
	$Name = $_POST['Name'];
	$Age  = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Weight = $_POST['Weight'];
	$Height = $_POST['Height'];
	$Pulse_Rate = $_POST['Pulse_Rate'];
	$Systolic_Blood_Pressure = $_POST['Systolic_Blood_Pressure'];
	$Diastolic_Blood_Pressure = $_POST['Diastolic_Blood_Pressure'];
	$Temperature = $_POST['Temperature'];
	$SPO2 = $_POST['SPO2'];
    $Blood_Sugar = $_POST['Blood_Sugar'];
    $Blood_Sugar_level = $_POST['Blood_Sugar_level'];
    $Remarks = $_POST['Remarks'];
    $Remarks1 = implode(",",$Remarks);
	$current_problems = $_POST['current_problems'];
    $current_problems1 = implode(",",$current_problems);
    $Other_comment = $_POST['Other_comment'];
    $Type_of_Consulting = $_POST['Type_of_Consulting'];
    $Assigned_Doctor = $_POST['Assigned_Doctor'];
    $Consultation_Date = date('y-m-d',strtotime($_POST['Consultation_Date']));
    $Consultation_Time = $_POST['Consultation_Time'];
    $Patient_Registration_Number = $_POST['Patient_Registration_Number'];
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ".$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into medical_consultant(date,Day_Card_No,Name,Age,Gender,Weight,Height,Pulse_Rate,Systolic_Blood_Pressure,Diastolic_Blood_Pressure,Temperature,SPO2,Blood_Sugar,Blood_Sugar_level,Remarks,current_problems,Other_comment,Type_of_Consulting,Assigned_Doctor,Consultation_Date,Consultation_Time,Patient_Registration_Number) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?,?,?,?, ?, ?,?,?)");
		$stmt->bind_param("sssisiiisssssissssssss",$date,$Day_Card_No,$Name,$Age,$Gender,$Weight,$Height,$Pulse_Rate,$Systolic_Blood_Pressure,$Diastolic_Blood_Pressure,$Temperature,$SPO2,$Blood_Sugar,$Blood_Sugar_level,$Remarks1,$current_problems1,$Other_comment,$Type_of_Consulting,$Assigned_Doctor,$Consultation_Date,$Consultation_Time,$Patient_Registration_Number);
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