<?php

// session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
    $Date = date('y-m-d', strtotime($_POST['Date']));
    $Patient_ID = $_POST['Patient_ID'];
    setcookie('Patient_ID', $Patient_ID);
    $Patient_Name = $_POST['Patient_Name'];
    setcookie('Patient_Name', $Patient_Name);
    $Doctor_ID = $_POST['Doctor_ID'];
    setcookie('Doctor_ID', $Doctor_ID);
    $Doctor_Name = $_POST['Doctor_Name'];
    setcookie('Doctor_Name', $Doctor_Name);
    $Symptom_summary = $_POST['Symptom_summary'];
    $Diagnosis_Description = $_POST['Diagnosis_Description'];
    $m1 = $_POST['m1'];
    setcookie('m1', $m1);
    $f1 = $_POST['f1'];
    setcookie('f1', $f1);
    $d1 = $_POST['d1'];
    setcookie('d1', $d1);
    $m2 = $_POST['m2'];
    setcookie('m2', $m2);
    $f2 = $_POST['f2'];
    setcookie('f2', $f2);
    $d2 = $_POST['d2'];
    setcookie('d2', $d2);
    $m3 = $_POST['m3'];
    setcookie('m3', $m3);
    $f3 = $_POST['f3'];
    setcookie('f3', $f3);
    $d3 = $_POST['d3'];
    setcookie('d3', $d3);
    $m4 = $_POST['m4'];
    setcookie('m4', $m4);
    $f4 = $_POST['f4'];
    setcookie('f4', $f4);
    $d4 = $_POST['d4'];
    setcookie('d4', $d4);
    $m5 = $_POST['m5'];
    setcookie('m5', $m5);
    $f5 = $_POST['f5'];
    setcookie('f5', $f5);
    $d5 = $_POST['d5'];
    setcookie('d5', $d5);
    $m6 = $_POST['m6'];
    setcookie('m6', $m6);
    $f6 = $_POST['f6'];
    setcookie('f6', $f6);
    $d6 = $_POST['d6'];
    setcookie('d6', $d6);
    $m7 = $_POST['m7'];
    setcookie('m7', $m7);
    $f7 = $_POST['f7'];
    setcookie('f7', $f7);
    $d7 = $_POST['d7'];
    setcookie('d7', $d7);
    $m8 = $_POST['m8'];
    setcookie('m8', $m8);
    $f8 = $_POST['f8'];
    setcookie('f8', $f8);
    $d8 = $_POST['d8'];
    setcookie('d8', $d8);
    $Tests = $_POST['Tests'];
    setcookie('Tests', $Tests);
    $Special_instruction = $_POST['Special_instruction'];
    setcookie('Special_instruction', $Special_instruction);
    $Next_recommended_Visit = $_POST['Next_recommended_Visit'];
    setcookie('Next_recommended_Visit', $Next_recommended_Visit);

    if ($conn->connect_error) {
        echo "$conn->connect_error";
        die("Connection Failed : " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into prescription(Date,Patient_ID,Patient_Name,Doctor_ID,Doctor_Name,Symptom_summary,Diagnosis_Description,m1,f1,d1,m2,f2,d2,m3,f3,d3,m4,f4,d4,m5,f5,d5,m6,f6,d6,m7,f7,d7,m8,f8,d8,Tests,Special_instruction,Next_recommended_Visit) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssssssssssssssssssssssssssssss", $Date, $Patient_ID, $Patient_Name, $Doctor_ID, $Doctor_Name, $Symptom_summary, $Diagnosis_Description, $m1, $f1, $d1, $m2, $f2, $d2, $m3, $f3, $d3, $m4, $f4, $d4, $m5, $f5, $d5, $m6, $f6, $d6, $m7, $f7, $d7, $m8, $f8, $d8, $Tests, $Special_instruction, $Next_recommended_Visit);
        $execval = $stmt->execute();
        echo $execval;
        header("Location: prescrip_conn.php");
        $stmt->close();
        $conn->close();
    }
}

?>

<?php
session_start();
$p = $_SESSION['pat_reg'];
?>




<!doctype html>
<html lang="en">

<head>
    <title>PRESCRIPTION</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        input[type="text"] {
            font-size: 1.2rem;
        }
    </style>
    <div class="container-fluid" id="fo" style="background-color: white">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="text-align: center;margin-top:1rem"><img src="DocClinic.png" height="120px" width="120px" style="float: left ;">PRESCRIPTION <img src="Logo.png" height="100px" width="100px" style="float: right;"></h1>
                <br><br><br>
                <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                <h5>DOCTOR INFORMATION</h5>
                <div>
                    <h1-6>Doctor Name: <br><input type="text" value="<?php echo $_COOKIE['Doctor_Name']; ?>" style="outline:none;background:transparent;"></h1-6>
                    <h1-6 style="float: right">Date: &nbsp;<input type="date" id="date" style="outline:none;background:transparent;"></h1-6>
                </div> <br>

                <script>
                    var date = new Date();
                    var year = date.getFullYear();
                    var month = String(date.getMonth() + 1).padStart(2, '0');
                    var todayDate = String(date.getDate()).padStart(2, '0');
                    var datePattern = year + '-' + month + '-' + todayDate;
                    document.getElementById("date").value = datePattern;
                </script>
                <div>
                    <h1-6>Doctor ID: <br><input type="text" value="<?php echo $_COOKIE['Doctor_ID']; ?>" style="outline:none;background:transparent;"></h1-6><br><br>
                    <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                    <h5>PATIENT INFORMATION</h5>
                </div><br><br>
                <div>
                    <h1-6>Patient Name:<br><input type="text" value="<?php echo $_COOKIE['Patient_Name']; ?>" style="outline:none;background:transparent;" ></h1-6>
                  <br><br>
                    <h1-6>Patient Reg No: <br><input type="text" value="<?php echo $_SESSION['pat_reg']; ?>" style="outline:none;background:transparent;"></h1-6>
                </div>
                <br>
                <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                <br><br><br>
                <h5>MEDICINES</h5><br>
                <table>
                    <tr>
                        <th style="padding-left:3rem;">Medicine</th>
                        <th style="padding-left:3rem;">Frequencies</th>
                        <th style="padding-left:3rem;">Duration</th>
                    </tr>
                    <tr>
                        <td><input type="text" style="outline:none;background:transparent;" name="pat1" id="pat1" value="<?php if (empty($_COOKIE['m1'])) {
                                                                                                                                echo " ";
                                                                                                                            } else {
                                                                                                                                echo $_COOKIE['m1'];
                                                                                                                            } ?>"></td>
                        <td><input type="text" style="outline:none;background:transparent;" name="fam1" value="<?php if (empty($_COOKIE['f1'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f1'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d1'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d1'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat2" value="<?php if (empty($_COOKIE['m2'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m2'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat2" ></td>
                        <td><input type="text" name="fam2" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f2'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f2'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d2'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d2'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat3" value="<?php if (empty($_COOKIE['m3'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m3'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat3"></td>
                        <td><input type="text" name="fam3" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f3'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f3'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d3'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d3'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat4" value="<?php if (empty($_COOKIE['m4'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m4'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat4"></td>
                        <td><input type="text" name="fam4" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f4'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f4'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d4'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d4'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m5'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m5'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f5'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f5'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d5'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d5'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m6'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m6'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f6'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f6'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d6'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d6'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m7'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m7'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f7'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f7'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d7'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d7'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m8'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $_COOKIE['m8'];
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f8'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $_COOKIE['f8'];
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d8'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $_COOKIE['d8'];
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <br>
                </table>
                <br>
                <h1-6>Any Instruction<input type="text" style="width: 250px;margin-top:20px;margin-left:10px;outline:none;background:transparent;"></h1-6>
                <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                <br>
                <h5>TESTS</h5>
                <h1-6>Name <br><input type="text" value="<?php if (empty($_COOKIE['m8'])) {
                                                                        echo "";
                                                                    } else {
                                                                        echo $_COOKIE['Tests'];
                                                                    } ?>" style="width: 50%;outline:none;background:transparent;"></h1-6>
                <br><br>
                <h1-6>Any Instruction<br><input type="text" value="<?php if (empty($_COOKIE['Special_instruction'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $_COOKIE['Special_instruction'];
                                                                        } ?>" style="width: 350px;outline:none;background:transparent;"></h1-6>
                <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                <br><br><br>
                <h5>DIAGONOSIS</h5><br><br>
                <h1-6>Any Instruction <br><input type="text" style="width: 300px;outline:none;background:transparent;"></h1-6>
                <br><br>
                <h1-6>Next Visit <br><input type="Date" value="<?php echo $_COOKIE['Next_recommended_Visit']; ?>" style="width: 300px;outline:none;background:transparent;"></h1-6>



            </div>

            <button type="button" id="but" style="margin-left:40rem;width:5rem;margin-bottom:2rem;text-align:center;font-size:1.3rem;" class="btn btn-primary">PRINT</button></h2>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script>
    window.onload = function() {
        document.getElementById("but")
            .addEventListener("click", () => {
                document.getElementById("but").style.display = "none";
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
                html2pdf().from(invoice).set(opt).save();
            })
    }
</script>

</html>