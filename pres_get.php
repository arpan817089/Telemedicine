<?php
if(isset($_POST['submit']))
{
$pres_ID = $_POST['pat_reg'];    
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
extract($_REQUEST);
$query = "SELECT * FROM `prescription` where `prescrip_ticket_id` = '$pres_ID'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);
}
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
    <div class="col-sm-3 border border-default" style="margin-top: 5px;text-align: center; border-radius:80px;">
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
                <label  style="margin: -3px 0px; font-size:13px;"for="Doctor"><b> Doctor Name: </b><?php echo $fetch[2] ?></label><br>
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>Doctor ID: <?php echo "&nbsp" ?></b><?php echo $fetch[3] ?></label><br>
                <!--<label for="Doctor" style="font-size:13px;"><b>Speciality:<?php echo "&nbsp" ?></b><?php echo $fetch3[4] ?></label>-->
            </div>
            <div class="col-sm-4">
            
            </div>
            <div class="col-sm-4">
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>Prescription ID:</b> <?php echo $fetch[1]; ?> </label><br>
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>SSF Telemedicine Centre Kulburu, Kamdara. </b></label><br>
                <label  style="margin: -3px 0px;font-size:13px;"for="Doctor"><b>Gumla, Jharkhand, 835201 </b></label><br>
                <label for="Doctor" style="font-size:13px;"><b>www.sfoundation.in</b></label>
            </div>
            <div class="col-sm-4" style="border-radius:30px;font-size:13px;">
                    <label for="Patient" style="font-size:13px;"><b>Patient ID:<?php echo "&nbsp" ?></b><?php echo $fetch[5] ?></label>
            </div>
            <div class="col-sm-6" style="border-radius:30px;font-size:13px;">
                    <label for="Patient" style="font-size:13px;"><b>Patient Name:<?php echo "&nbsp" ?></b><?php echo $fetch[4] ?></label>
            </div>
            <div class="col-sm-2" style="border-radius:30px;font-size:13px;">
                <label for="Patient" style="font-size:13px;"><b>Age:<?php echo "&nbsp" ?></b><?php echo $fetch[6] ?></label>
            </div>
            <div class="col-sm-12" >
                <label for="Patient" style="margin: 20px 0px;font-size:13px;"><b>Patient Information:</b></label>
            </div>
            <div class="col-sm-12" style="border-radius:30px;font-size:13px;">
            <!--<p><b>VITALS:<?php echo "&nbsp" ?></b><?php echo $fetch[15] ?></p>-->
            <!--<p><b>Presented complaints:<?php echo "&nbsp" ?></b><?php echo $fetch2[24] ?></p>-->
            <!--<p><b>Brief History:<?php echo "&nbsp" ?></b><?php echo $fetch2[24] ?></p>-->
            <p><b>Diagnosis:<?php echo "&nbsp" ?></b><?php echo $fetch[34]; ?></ ?></p>
            </div>
            <div class="col-sm-12" style="margin: 20px 0px;font-size:13px;">
                <label for="Patient" style="font-size:13px;"><b>Treatment Plan:</b></label>
            </div>
            <div class="col-sm-12" style="margin-top: 5px;text-align: center;border-radius:20px;font-size:13px;">
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">Sl No.</th>
                        <th scope="col">Medicine</th>
                        <th scope="col">Frequency</th>
                        <th scope="col">Duration</th>
                        <th scope="col">No of Medicines</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td><?php echo $fetch[7]; ?></td>
                        <td><?php echo $fetch[8]; ?></td>
                        <td><?php echo $fetch[9]; ?></td>
                        <td><?php echo $fetch[10]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td><?php echo $fetch[11]; ?></td>
                        <td><?php echo $fetch[12]; ?></td>
                        <td><?php echo $fetch[13]; ?></td>
                        <td><?php echo $fetch[14]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td><?php echo $fetch[15]; ?></td>
                        <td><?php echo $fetch[16]; ?></td>
                        <td><?php echo $fetch[17]; ?></td>
                        <td><?php echo $fetch[18]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                        <td><?php echo $fetch[19]; ?></td>
                        <td><?php echo $fetch[20]; ?></td>
                        <td><?php echo $fetch[21]; ?></td>
                        <td><?php echo $fetch[22]; ?></td>
                        </tr>
            <!--        </tbody>-->
            <!--    </table>-->
            <!--</div>-->
            <!--<div class="col-sm-12 border border-default" style="margin-top: 5px;text-align: center;border-radius:20px;">-->
            <!--    <table class="table table-sm">-->
            <!--        <thead>-->
            <!--            <tr>-->
            <!--            <th scope="col">Sl No.</th>-->
            <!--            <th scope="col">Medicine</th>-->
            <!--            <th scope="col">Frequency</th>-->
            <!--            <th scope="col">Duration</th>-->
            <!--            </tr>-->
            <!--        </thead>-->
            <!--        <tbody>-->
                    <tr>
                        <th scope="row">5</th>
                        <td><?php echo $fetch[23]; ?></td>
                        <td><?php echo $fetch[24]; ?></td>
                        <td><?php echo $fetch[25]; ?></td>
                        <td><?php echo $fetch[26]; ?></td>
                        </tr>
                        <tr>
                        <th scope="row">6</th>
                        <td><?php echo $fetch[27]; ?></td>
                        <td><?php echo $fetch[28]; ?></td>
                        <td><?php echo $fetch[29]; ?></td>
                        <td><?php echo $fetch[30]; ?></td>
                        </tr>
                        <tr>
                        <!--<th scope="row">7</th>-->
                        <!--<td><?php echo $_COOKIE['m7']; ?></td>-->
                        <!--<td><?php echo $_COOKIE['f1_7']; ?></td>-->
                        <!--<td><?php echo $_COOKIE['d7']; ?></td>-->
                        <!--</tr>-->
                        <!--<tr>-->
                        <!--<th scope="row">8</th>-->
                        <!--<td><?php echo $_COOKIE['m8']; ?></td>-->
                        <!--<td><?php echo $_COOKIE['f1_8']; ?></td>-->
                        <!--<td><?php echo $_COOKIE['d8']; ?></td>-->
                        <!--</tr>-->
                    </tbody>
                </table>
            </div> 
            <div class="col-sm-12" style="border-radius:30px;margin:15px 0px;font-size:13px;">
                    <label for="Patient"><b>Special Instruction:<?php echo "&nbsp" ?></b><?php echo $fetch[31]; ?></label>
            </div>
            <div class="col-sm-12" style="border-radius:30px;margin-top:5px;font-size:13px;">
                    <label for="Patient"><b>Test Plan:<?php echo "&nbsp" ?></b><?php echo $fetch[32]; ?></label>
            </div>
            <div class="d-block text-center col-sm-12" style="margin-top: 10px;" >
            <?php date_default_timezone_set('Asia/Kolkata');
            $st_date = date('Y-m-d'); ?>
            <button type="button" id="but1" style="margin-right: 2rem;" class="btn-wide btn btn-success"><a style="color: white;" href="DASHBOARD.php?from=<?php echo $st_date ?>&to=<?php echo $st_date ?> ?>">Back</a></button>
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