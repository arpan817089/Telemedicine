<?php

// $p = $_SESSION['doc'];
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_POST['submit'])) {
  $pat_reg  = $_POST['pat_reg'];

  $q1 = "SELECT * FROM `prescription`  WHERE `Patient_ID`='$pat_reg'";
  $e1 = mysqli_query($conn, $q1);
  if (mysqli_num_rows($e1) > 0) {

      $res = mysqli_fetch_row($e1);
      $Patient_Name = $res[2];
      $Doctor_ID = $res[3];
      $Symptom_summary = $res[5];
      $Doctor_Name = $res[4];
      $Diagnosis_Description = $res[6];
      $m1 = $res[7];
      $f1 = $res[8];
      $d1 = $res[9];
      $m2 = $res[10];
      $f2 = $res[11];
      $d2 = $res[12];
      $m3 = $res[13];
      $f3 = $res[14];
      $d3 = $res[15];
      $m4 = $res[16];
      $f4 = $res[17];
      $d4 = $res[18];
      $m5 = $res[19];
      $f5 = $res[20];
      $d5 = $res[21];
      $m6 = $res[22];
      $f6 = $res[23];
      $d6 = $res[24];
      $m7 = $res[25];
      $f7 = $res[26];
      $d7 = $res[27];
      $m8 = $res[28];
      $f8 = $res[29];
      $d8 = $res[30];
      $Tests = $res[31];
      $Special_instruction = $res[32];
      $Next_recommended_Visit = $res[33];
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
                    <h1-6>Doctor Name: <br><input type="text" value="<?php echo $Doctor_Name; ?>" style="outline:none;background:transparent;"></h1-6>
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
                    <h1-6>Doctor ID: <br><input type="text" value="<?php echo $Doctor_ID; ?>" style="outline:none;background:transparent;"></h1-6><br><br>
                    <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                    <h5>PATIENT INFORMATION</h5>
                </div><br><br>
                <div>
                    <h1-6>Patient Name:<br><input type="text" value="<?php echo $Patient_Name; ?>" style="outline:none;background:transparent;" ></h1-6>
                  <br><br>
                    <h1-6>Patient Reg No: <br><input type="text" value="<?php echo $pat_reg; ?>" style="outline:none;background:transparent;"></h1-6>
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
                                                                                                                                echo $m1;
                                                                                                                            } ?>"></td>
                        <td><input type="text" style="outline:none;background:transparent;" name="fam1" value="<?php if (empty($_COOKIE['f1'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f1;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d1'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d1;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat2" value="<?php if (empty($_COOKIE['m2'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m2;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat2" ></td>
                        <td><input type="text" name="fam2" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f2'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f2;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d2'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d2;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat3" value="<?php if (empty($_COOKIE['m3'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m3;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat3"></td>
                        <td><input type="text" name="fam3" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f3'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f3;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d3'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d3;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat4" value="<?php if (empty($_COOKIE['m4'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m4;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat4"></td>
                        <td><input type="text" name="fam4" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f4'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f4;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d4'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d4;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m5'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m5;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f5'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f5;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d5'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d5;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m6'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m6;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f6'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f6;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d6'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d6;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m7'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m7;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f7'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f7;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d7'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d7;
                                                        } ?>" style="outline:none;background:transparent;"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="pat5" value="<?php if (empty($_COOKIE['m8'])) {
                                                                        echo " ";
                                                                    } else {
                                                                        echo $m8;
                                                                    } ?>" style="outline:none;background:transparent;" id="pat5"></td>
                        <td><input type="text" name="fam5" style="outline:none;background:transparent;" value="<?php if (empty($_COOKIE['f8'])) {
                                                                                                                    echo " ";
                                                                                                                } else {
                                                                                                                    echo $f8;
                                                                                                                } ?>"></td>
                        <td><input type="text" value="<?php if (empty($_COOKIE['d8'])) {
                                                            echo " ";
                                                        } else {
                                                            echo $d8;
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
                                                                        echo $Tests;
                                                                    } ?>" style="width: 50%;outline:none;background:transparent;"></h1-6>
                <br><br>
                <h1-6>Any Instruction<br><input type="text" value="<?php if (empty($_COOKIE['Special_instruction'])) {
                                                                            echo "";
                                                                        } else {
                                                                            echo $Special_instruction;
                                                                        } ?>" style="width: 350px;outline:none;background:transparent;"></h1-6>
                <h5>---------------------------------------------------------------------------------------------------------------------------------------------------------</h5>
                <br><br><br>
                <h5>DIAGONOSIS</h5><br><br>
                <h1-6>Any Instruction <br><input type="text" style="width: 300px;outline:none;background:transparent;"></h1-6>
                <br><br>
                <h1-6>Next Visit <br><input type="Date" value="<?php echo $Next_recommended_Visit; ?>" style="width: 300px;outline:none;background:transparent;"></h1-6>



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