<?php

// session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
if (isset($_POST['submit'])) {
    $Date = date('y-m-d', strtotime($_POST['Date_of_Registration']));
    $Patient_ID = $_POST['Patient_ID'];
    setcookie('Patient_ID', $Patient_ID);
    $Patient_Name = $_POST['Patient_Name'];
    setcookie('Patient_Name', $Patient_Name);
    $Doctor_ID = $_POST['Doctor_ID'];
    setcookie('Doctor_ID', $Doctor_ID);
    $Doctor_Name = $_POST['Doctor_Name'];
    setcookie('Doctor_Name', $Doctor_Name);
    $prescrip_ticket_id = $_POST['pat_ticket_id'];
    setcookie('prescrip_ticket_id', $prescrip_ticket_id);
    $age = $_POST['age'];
    setcookie('age', $age);
    $Weight = $_POST['Weight'];
    setcookie('Weight', $Weight);
    $Height = $_POST['Height'];
    setcookie('Height', $Height);
    $Systolic_Blood_Pressure = $_POST['Systolic_Blood_Pressure'];
    setcookie('Systolic_Blood_Pressure', $Systolic_Blood_Pressure);
    $Diastolic_Blood_Pressure = $_POST['Diastolic_Blood_Pressure'];
    setcookie('Diastolic_Blood_Pressure', $Diastolic_Blood_Pressure);
    $Temperature = $_POST['Temperature'];
    setcookie('Temperature', $Temperature);
    $SPO2 = $_POST['SPO2'];
    setcookie('SPO2', $SPO2);
    $Blood_Sugar = $_POST['Blood_Sugar'];
    setcookie('Blood_Sugar', $Blood_Sugar);
    $Blood_Sugar_level = $_POST['Blood_Sugar_level'];
    setcookie('Blood_Sugar_level', $Blood_Sugar_level);

    $Symptom_summary = $_POST['Symptom_summary'];
    $Diagnosis_Description = $_POST['Diagnosis_Description'];
    $m1 = $_POST['m1'];
    setcookie('m1', $m1);

    $f1 = $_POST['f1'];
    $f1_1 = implode(",", $f1);
    setcookie('f1_1', $f1_1);

    $d1 = $_POST['d1'];
    setcookie('d1', $d1);
    $med_no1 = $_POST['med_no1'];
    setcookie('med_no1', $med_no1);
    
    $m2 = $_POST['m2'];
    setcookie('m2', $m2);

    $f2 = $_POST['f2'];
    $f1_2 = implode(",", $f2);
    setcookie('f1_2', $f1_2);


    $d2 = $_POST['d2'];
    setcookie('d2', $d2);
    $med_no2 = $_POST['med_no2'];
    setcookie('med_no2', $med_no2);

    $m3 = $_POST['m3'];
    setcookie('m3', $m3);

    $f3 = $_POST['f3'];
    $f1_3 = implode(",", $f3);
    setcookie('f1_3', $f1_3);

    $d3 = $_POST['d3'];
    setcookie('d3', $d3);
    $med_no3 = $_POST['med_no3'];
    setcookie('med_no3', $med_no3);
    
    $m4 = $_POST['m4'];
    setcookie('m4', $m4);

    $f4 = $_POST['f4'];
    $f1_4 = implode(",", $f4);
    setcookie('f1_4', $f1_4);
    $d4 = $_POST['d4'];
    setcookie('d4', $d4);
    $med_no4 = $_POST['med_no4'];
    setcookie('med_no4', $med_no4);
    
    $m5 = $_POST['m5'];
    setcookie('m5', $m5);

    $f5 = $_POST['f5'];
    $f1_5 = implode(",", $f5);
    setcookie('f1_5', $f1_5);

    $d5 = $_POST['d5'];
    setcookie('d5', $d5);
    $med_no5 = $_POST['med_no5'];
    setcookie('med_no5', $med_no5);
    
    $m6 = $_POST['m6'];
    setcookie('m6', $m6);

    $f6 = $_POST['f6'];
    $f1_6 = implode(",", $f6);
    setcookie('f1_6', $f1_6);

    $d6 = $_POST['d6'];
    setcookie('d6', $d6);
    $med_no6 = $_POST['med_no6'];
    setcookie('med_no6', $med_no6);
    $no = $_POST['no'];
    setcookie('no', $no);
    $diag = $_POST['diag'];
    setcookie('diag',$diag);
    $Tests = $_POST['tests'];
    // $Tests = implode(",", $Test);
    setcookie('Tests', $Tests);
    $Special_instruction = $_POST['Special_instruction'];
    setcookie('Special_instruction', $Special_instruction);
    $Next_recommended_Visit = $_POST['Next_recommended_Visit'];
    setcookie('Next_recommended_Visit', $Next_recommended_Visit);
    $med_no = $_POST['no'];
    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into prescription(prescrip_ticket_id,Doctor_Name,Doctor_ID,Patient_Name,Patient_ID,age,m1,f1_1,d1,med_no1,m2,f1_2,d2,med_no2,m3,f1_3,d3,med_no3,m4,f1_4,d4,med_no4,m5,f1_5,d5,med_no5,m6,f1_6,d6,med_no6,Tests,Special_instruction,Next_recommended_Visit,diag,no_of_medicine) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssisssisssisssisssisssisssissssi",$prescrip_ticket_id, $Doctor_Name, $Doctor_ID, $Patient_Name, $Patient_ID, $age,$m1,$f1_1,$d1,$med_no1,$m2,$f1_2,$d2,$med_no2,$m3,$f1_3,$d3,$med_no3,$m4,$f1_4,$d4,$med_no4,$m5,$f1_5,$d5,$med_no5,$m6,$f1_6,$d6,$med_no6, $Tests, $Special_instruction, $Next_recommended_Visit,$diag,$med_no);
        $execval = $stmt->execute();
        echo $execval;
        header("Location:p_letter.php");
        $stmt->close();
        $conn->close();
    }
}
$pat1 = $_COOKIE['Patient_Name'];
setcookie('pat1', $pat1);

$Doctor_Name1 = $_COOKIE['Doctor_Name'];
setcookie('Doctor_Name1', $Doctor_Name1);

$prescrip_ticket_id1 = $_COOKIE['prescrip_ticket_id'];
setcookie('prescrip_ticket_id1', $prescrip_ticket_id1);

$query = "SELECT * FROM `medical_consultant` WHERE `Name`LIKE '$pat1'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);

$query2 = "SELECT * FROM `patient_registration` WHERE `name`LIKE '$pat1'";
$result2 = mysqli_query($conn, $query2);
$fetch2 = mysqli_fetch_row($result2);

$query3 = "SELECT * FROM `doctor` WHERE `doc_name`LIKE '$Doctor_Name1'";
$result3 = mysqli_query($conn, $query3);
$fetch3 = mysqli_fetch_row($result3);

$query4 = "SELECT * FROM `prescription` WHERE `prescrip_ticket_id`LIKE '$prescrip_ticket_id1'";
$result4 = mysqli_query($conn, $query4);
$fetch4 = mysqli_fetch_row($result4);
?>

<?php
session_start();
// $p = $_SESSION['pat_reg'];
?>




<!doctype html>
<?php header('Content-Type: text/html; charset=utf-8'); ?>
<html lang="en">
  <head>
    <title>Prescription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <div class="container-fluid" id="fo">
    
    <div class="row">
    <div class="col-sm-4" style="margin-top: 5px;border-radius:80px;">
    <img src="Logo.png" style = "height:80px; width:80px; "class="rounded"alt="">
    </div>
    <div class="col-sm-3" style="margin-top: 5px;text-align: center; border-radius:80px;">
    <label for="Patient" style="font-size:18px;padding-top:20px;"><b>PRESCRIPTION</b></label>
    </div>
    <div class="col-sm-5" style="margin-top: 5px;text-align: right; border-radius:80px;">
    <img src="Logo.png" style = "height:80px; width:80px; "class="rounded"alt="">
    </div>
    <div class="col-sm-4" style="margin-top: 5px;">
    </div>
    <div class="col-sm-12" style="margin-top: 5px;text-align: center;">
    
    </div>  
            <div class="col-sm-4">
                <label  style="margin: -3px 0px; font-size:13px;"for="Doctor"><b> Doctor Name: </b><?php echo $fetch3[0] ?></label><br>
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>Reg.No: <?php echo "&nbsp" ?></b><?php echo $fetch3[2] ?></label><br>
                <label for="Doctor" style="font-size:13px;"><b>Speciality:<?php echo "&nbsp" ?></b><?php echo $fetch3[4] ?></label>
            </div>
            <div class="col-sm-4">
            
            </div>
            <div class="col-sm-4">
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>Prescription ID:</b> <?php echo $_COOKIE['prescrip_ticket_id']; ?> </label><br>
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>SSF Telemedicine Centre Kulburu, Kamdara. </b></label><br>
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>Gumla, Jharkhand, 835201 </b></label><br>
                <label for="Doctor" style="font-size:13px;"><b>www.sfoundation.in</b></label>
            </div>
            <div class="col-sm-4" style="border-radius:30px;font-size:13px;">
                    <label for="Patient" style="font-size:13px;"><b>Patient ID:<?php echo "&nbsp" ?></b><?php echo $fetch2[3] ?></label>
            </div>
            <div class="col-sm-6" style="border-radius:30px;font-size:13px;">
                    <label for="Patient" style="font-size:13px;"><b>Patient Name:<?php echo "&nbsp" ?></b><?php echo $fetch2[2] ?></label>
            </div>
            <div class="col-sm-2" style="border-radius:30px;font-size:13px;">
                <label for="Patient" style="font-size:13px;"><b>Age:<?php echo "&nbsp" ?></b><?php echo $fetch[3] ?></label>
            </div>
            <div class="col-sm-12" >
                <label for="Patient" style="margin: 20px 0px;font-size:13px;"><b>Patient Information:</b></label>
            </div>
            <div class="col-sm-12" style="border-radius:30px;font-size:13px;">
            <p><b>VITALS:<?php echo "&nbsp" ?></b><?php echo $fetch[15] ?></p>
            <p><b>Presented complaints:<?php echo "&nbsp" ?></b><?php echo $fetch2[24] ?></p>
            <p><b>Brief History:<?php echo "&nbsp" ?></b><?php echo $fetch2[24] ?></p>
            <p><b>Diagnosis:<?php echo "&nbsp" ?></b><?php echo $_COOKIE['diag']; ?></ ?></p>
            </div>
            <div class="col-sm-12" style="margin: 20px 0px 0px 0px;font-size:13px;">
                <label for="Patient" style="font-size:13px;"><b>Treatment Plan:</b></label>
            </div>
            <div class="col-sm-12" style="text-align: center;border-radius:20px;font-size:13px;">
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Medicine</th>
                        <th scope="col">Frequency</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($x = 0; $x < $_COOKIE['no']; $x++)
                        {
                        ?>
                            <tr>
                               
                            <th scope="row"><?php echo $x + 1; ?></th>
                            <td><?php echo $fetch4[$x + 1 + (3 * ($x + 2))]; ?></td>
                            <td><?php echo $fetch4[$x + 2 + (3 * ($x + 2))];?></td>
                            <td><?php echo $fetch4[$x + 3 + (3 * ($x + 2))]; ?></td>
                            <td><?php echo $fetch4[$x + 4 + (3 * ($x + 2))]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div> 
            <div class="col-sm-12" style="border-radius:30px;margin:15px 0px;font-size:13px;">
                    <label for="Patient"><b>Special Instruction:<?php echo "&nbsp" ?></b><?php echo $_COOKIE['Special_instruction']; ?></label>
            </div>
            <div class="col-sm-12" style="border-radius:30px;margin-top:5px;font-size:13px;">
                    <label for="Patient"><b>Test Plan:<?php echo "&nbsp" ?></b><?php echo $_COOKIE['Tests']; ?></label>
            </div>
            <div class="d-block text-center col-sm-12" style="margin-top: 10px;" >
                        <button type="button" id="but1" style="margin-right: 2rem;" class="btn-wide btn btn-success"><a style="color: white;" href="prescrip_new2.php?x=<?php echo $_COOKIE['Patient_Name']; ?>">Back</a></button>
            <button type="button" id="but" class="btn-wide btn btn-success">Print</button>   
        </div>    
        </div>
        <script>
    window.onload = function() {
        document.getElementById("but")
            .addEventListener("click", () => {
                document.getElementById("but").style.display = "none";
                document.getElementById("but1").style.display = "none";
                const invoice = this.document.getElementById("fo");
                var opt = {
                    margin: 5,
                    
                    filename: 'prescription.pdf',
                    image: {
                        type: 'pdf',
                        quality: 1.0
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        orientation: 'p',
                        unit: 'mm',
                        format: 'A4',
                        orientation: 'portrait'
                    }
                };
                html2pdf().from(invoice).set(opt).save().then(() => {
						document.getElementById("but1").style.display = "block"
					});
            })
    }
</script>   
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>