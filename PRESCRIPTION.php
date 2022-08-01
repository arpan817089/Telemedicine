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
    $m2 = $_POST['m2'];
    setcookie('m2', $m2);

    $f2 = $_POST['f2'];
    $f1_2 = implode(",", $f2);
    setcookie('f1_2', $f1_2);


    $d2 = $_POST['d2'];
    setcookie('d2', $d2);

    $m3 = $_POST['m3'];
    setcookie('m3', $m3);

    $f3 = $_POST['f3'];
    $f1_3 = implode(",", $f3);
    setcookie('f1_3', $f1_3);

    $d3 = $_POST['d3'];
    setcookie('d3', $d3);

    $m4 = $_POST['m4'];
    setcookie('m4', $m4);

    $f4 = $_POST['f4'];
    $f1_4 = implode(",", $f4);
    setcookie('f1_4', $f1_4);
    $d4 = $_POST['d4'];
    setcookie('d4', $d4);

    $m5 = $_POST['m5'];
    setcookie('m5', $m5);

    $f5 = $_POST['f5'];
    $f1_5 = implode(",", $f5);
    setcookie('f1_5', $f1_5);

    $d5 = $_POST['d5'];
    setcookie('d5', $d5);

    $m6 = $_POST['m6'];
    setcookie('m6', $m6);

    $f6 = $_POST['f6'];
    $f1_6 = implode(",", $f6);
    setcookie('f1_6', $f1_6);

    $d6 = $_POST['d6'];
    setcookie('d6', $d6);
    $diag = $_POST['diag'];
    setcookie('diag',$diag);
    $Test = $_POST['Tests'];
    $Tests = implode(",", $Test);
    setcookie('Tests', $Tests);
    $Special_instruction = $_POST['Special_instruction'];
    setcookie('Special_instruction', $Special_instruction);
    $Next_recommended_Visit = $_POST['Next_recommended_Visit'];
    setcookie('Next_recommended_Visit', $Next_recommended_Visit);

    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into prescription(prescrip_ticket_id,Doctor_Name,Doctor_ID,Patient_Name,Patient_ID,age,m1,f1_1,d1,m2,f1_2,d2,m3,f1_3,d3,m4,f1_4,d4,m5,f1_5,d5,m6,f1_6,d6,Tests,Special_instruction,Next_recommended_Visit,diag) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssissssssssssssssssssssss",$prescrip_ticket_id, $Doctor_Name, $Doctor_ID, $Patient_Name, $Patient_ID, $age,$m1,$f1_1,$d1,$m2,$f1_2,$d2,$m3,$f1_3,$d3,$m4,$f1_4,$d4,$m5,$f1_5,$d5,$m6,$f1_6,$d6, $Tests, $Special_instruction, $Next_recommended_Visit,$diag);
        $execval = $stmt->execute();
        echo $execval;
        header("Location: PRESCRIPTION.php");
        $stmt->close();
        $conn->close();
    }
}
$pat1 = $_COOKIE['Patient_Name'];
setcookie('pat1', $pat1);

$Doctor_Name1 = $_COOKIE['Doctor_Name'];
setcookie('Doctor_Name1', $Doctor_Name1);

$query = "SELECT * FROM `medical_consultant` WHERE `Name`LIKE '$pat1'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);

$query2 = "SELECT * FROM `patient_registration` WHERE `name`LIKE '$pat1'";
$result2 = mysqli_query($conn, $query2);
$fetch2 = mysqli_fetch_row($result2);

$query3 = "SELECT * FROM `doctor` WHERE `doc_name`LIKE '$Doctor_Name1'";
$result3 = mysqli_query($conn, $query3);
$fetch3 = mysqli_fetch_row($result3);

?>

<?php
session_start();
// $p = $_SESSION['pat_reg'];
?>





<!doctype html>
<html lang="en">

<head>
    <title>PRESCRIPTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid" id="fo">
        <div class="row">

            <div class="col-lg-4" style="margin: 70px 20px;padding-left: 50px;">
                <label style="font-family: 'Times New Roman', Times, serif;"><b>Dr -</b> <?php echo $_COOKIE['Doctor_Name']; ?></label><br>
                <label style="font-family: 'Times New Roman', Times, serif;"><b> Registration No - </b><?php echo $_COOKIE['Doctor_ID']; ?></label><br>
                <label style="font-family: 'Times New Roman', Times, serif;"><b> Speciality - </b><?php echo $fetch3[4]; ?></label><br>

            </div>
            <div class="col-lg-2" style="margin: 20px 5px; float: left;">
                <img src="Logo.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            </div>
            <div class="col-lg-3" style="margin: 50px 1px;">
                <label style="font-family: 'Times New Roman', Times, serif;"><b>Prescription ID - <?php echo $_COOKIE['prescrip_ticket_id']; ?></b></label><br>
                <label style="font-family: 'Times New Roman', Times, serif;"><b>SSF Telemedicine Centre Kulburu, Kamdara. </b></label><br>
                <label style="font-family: 'Times New Roman', Times, serif;"><b>Gumla, Jharkhand, 835201 </b></label><br>
                <label style="font-family: 'Times New Roman', Times, serif;"><b>www.sfoundation.in</b></label><br>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4" style="margin: 10px 50px;padding-left: 20px;">
                <label style="font-family: 'Times New Roman', Times, serif; "><b>Patient Name -</b><?php echo $_COOKIE['Patient_Name']; ?></label><br>
                <label style="font-family: 'Times New Roman', Times, serif; "><b>Patient ID -</b><?php echo $_COOKIE['Patient_ID']; ?></label><br>
                <label style="font-family: 'Times New Roman', Times, serif; "><b>AGE/GENDER -</b><?php echo $fetch[3]; ?>/<?php echo $fetch[4]; ?></label><br>
            </div>

        </div>
        <div class="border border-primary" style="height: 350px; width: 90%; border-radius:30px; margin: 20px 60px;">
            <p style="font-family: 'Times New Roman', Times, serif; margin: 10px 20px;font-size: 18px;"><b>VITALS:</b></p>
            <p style="font-family: 'Times New Roman', Times, serif; margin: -10px 20px;">SBP: <?php echo $fetch[8] ?>, DBP: <?php echo $fetch[9] ?>, Temp(in C): <?php echo $fetch[10] ?>, Weight(in kg): <?php echo $fetch[5] ?></p><br>

            <p style="font-family: 'Times New Roman', Times, serif; margin: 10px 20px;font-size: 18px;"><b>Presented complaints:</b></p>
            <p style="font-family: 'Times New Roman', Times, serif; margin: -10px 20px;"><?php echo $fetch[15] ?></p><br>

            <p style="font-family: 'Times New Roman', Times, serif; margin: 10px 20px;font-size: 18px;"><b>Brief History</b></p>
            <p style="font-family: 'Times New Roman', Times, serif; margin: -10px 20px;"><?php echo $fetch2[22] ?>, <?php echo $fetch2[20] ?></p><br>

            <p style="font-family: 'Times New Roman', Times, serif; margin: 10px 20px;font-size: 18px;"><b>Diagnosis</b></p>
            <input style="margin-left: 1rem;border:none; outline:none;" value = "<?php echo $_COOKIE['diag']; ?>"  type="text"><br>
        </div>

        <br><br><br><br>
        <div class="col-lg-3" style="margin: 20px 50px;">
            <label style="font-family: 'Times New Roman', Times, serif;"><b>Treatment Plan:</b></label><br>
        </div>
        <form class="form-horizontal row justify-content-center">
            <div class="table-responsive " style="width: 100%;">
                <table class="table   table-highlight text-center ">
                    <thead>
                        <th>Medicine</th>
                        <th>Frequency</th>
                        <th>Duration</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['m1']; ?>" /></td>
                            <td><textarea class="form-control" id="return2" rows="5"><?php echo $_COOKIE['f1_1']; ?></textarea></td>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['d1']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['m2']; ?>" /></td>
                            <td><textarea class="form-control" id="return2" rows="5"><?php echo $_COOKIE['f1_2']; ?></textarea></td>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['d2']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['m3']; ?>" /></td>
                            <td><textarea class="form-control" id="return2" rows="5"><?php echo $_COOKIE['f1_3']; ?></textarea></td>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['d3']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['m4']; ?>" /></td>
                            <td><textarea class="form-control" id="return2" rows="5"><?php echo $_COOKIE['f1_4']; ?></textarea></td>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['d4']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['m5']; ?>" /></td>
                            <td><textarea class="form-control" id="return2" rows="5"><?php echo $_COOKIE['f1_5']; ?></textarea></td>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['d5']; ?>" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['m6']; ?>" /></td>
                            <td><textarea class="form-control" id="return2" rows="5"><?php echo $_COOKIE['f1_6']; ?></textarea></td>
                            <td><input type="text" style = "border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['d6']; ?>" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
        <div class="col-lg-3" style="margin: 20px 50px;">
            <p style="font-family: 'Times New Roman', Times, serif; margin: 10px 20px;font-size: 18px;"><b>Special Instructions</b><br><br></p>
            <p style="font-family: 'Times New Roman', Times, serif; margin: -10px 20px;"><input type="text" value = "<?php echo $_COOKIE['Special_instruction']; ?>" style = "border:none; outline:none;" style="width: 500px;"></p><br>
        </div>
        <div class="col-lg-3" style="margin: 20px 50px;">
            <p style="font-family: 'Times New Roman', Times, serif; margin: 10px 20px;font-size: 18px;"><b>Test Plan:</b></p>
            <p style="font-family: 'Times New Roman', Times, serif; margin: -10px 20px;"><input type="text" style="width: 500px;border:none; outline:none;" class="form-control" value="<?php echo $_COOKIE['Tests']; ?>" /></p><br>
        </div>
        <div class="d-block text-center card-footer">
        <button type="button" id="but1" style="margin-right: 2rem;" class="btn-wide btn btn-success"><a style="color: white;" href="prescrip_new2.php?x=<?php echo $_COOKIE['Patient_Name']; ?>">Back</a></button>
        <button type="button" id="but" class="btn-wide btn btn-success">Print</button>
        </div>
        <script>
    window.onload = function() {
        document.getElementById("but")
            .addEventListener("click", () => {
                document.getElementById("but").style.display = "none";
                document.getElementById("but1").style.display = "none";
                const invoice = this.document.getElementById("fo");
                var opt = {
                    margin: 1,
                    filename: 'prescription.pdf',
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
						document.getElementById("but1").style.display = "block"
					});
            })
    }
</script>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>