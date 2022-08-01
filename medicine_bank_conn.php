<?php

// session_start();
$conn = mysqli_connect("localhost","arp7029","790Aa@790","doc_patient");

if(isset($_POST['submit']))
{
	$medicine_name = $_POST['medicine_name'];
	$batch_no = $_POST['batch_no'];
	$expiry_date = date('y-m-d',strtotime($_POST['expiry_date']));
	$pack_type = $_POST['pack_type'];
	$sell_unit = $_POST['sell_unit'];
	$current_stock = $_POST['current_stock'];
	$reorder_level = $_POST['reorder_level'];
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into medicine_bank(medicine_name, batch_no, expiry_date, pack_type, sell_unit, current_stock,reorder_level) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisssis", $medicine_name, $batch_no, $expiry_date, $pack_type, $sell_unit, $current_stock,$reorder_level);
		$execval = $stmt->execute();
		echo $execval;
		echo "Data inserted successfully...";
		$stmt->close();
		$conn->close();
	}
}

	
?>  