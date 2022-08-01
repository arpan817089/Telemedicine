 <?php

// session_start();
$conn = mysqli_connect("localhost","arp7029","790Aa@790","doc_patient");

if(isset($_POST['submit']))
{
	$Chief_Earner_Name = $_POST['Chief_Earner_Name'];
	$Family_Registration_No = $_POST['Family_Registration_No'];
	$Date_of_Registration = date('y-m-d',strtotime($_POST['Date_of_Registration']));
	$Mobile_No = $_POST['Mobile_No'];
	$Address = $_POST['Address'];
	$Location_Code = $_POST['Location_Code'];
	$fam1 = $_POST['fam1'];
	$fam2 = $_POST['fam2'];
	$fam3 = $_POST['fam3'];
	$fam4 = $_POST['fam4'];
	$fam5 = $_POST['fam5'];
	$Additional_members_1 = $_POST['add1'];
	$add_mem2 = $_POST['add2'];
	$add_mem3 = $_POST['add3'];
	$add_mem4 = $_POST['add4'];
	$add_mem5 = $_POST['add5'];
	$add_mem6 = $_POST['add6'];
	$amount = $_POST['amount'];
    $Education = $_POST['Education'];
    $Monthly_Family_Income = $_POST['Monthly_Family_Income'];
    $Marital_status = $_POST['Marital_status'];
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into family_registration(Chief_Earner_Name, Family_Registration_No, Date_of_Registration, Mobile_No, Address, Location_Code,fam1,fam2,fam3,fam4,fam5,Additional_members_1,add_mem2,add_mem3,add_mem4,add_mem5,add_mem6,amount, Education, Monthly_Family_Income, Marital_status) values(?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?, ?, ?,?)");
		$stmt->bind_param("sssisssssssssssssssss", $Chief_Earner_Name, $Family_Registration_No, $Date_of_Registration, $Mobile_No, $Address, $Location_Code,$fam1,$fam2,$fam3,$fam4,$fam5,$Additional_members_1,$add_mem2,$add_mem3,$add_mem4,$add_mem5,$add_mem6,$amount, $Education, $Monthly_Family_Income, $Marital_status);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Registration successful...";
		header("location:card.php");
		$stmt->close();
		$conn->close();
	}
}

	
?>  