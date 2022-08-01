<?php
session_start();
$p = $_SESSION['pat_reg'];
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Prescription</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
</head>
  <body>
  <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h1><strong>PRESCRIPTION</strong></h1>
                    <p></p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="doc_reg_conn.php" method="post">
                                <!-- progressbar -->

                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Basic Info</h2>
                                        <input type="date" id="date" name="Date" placeholder="Date" readonly="readonly" required />
                                        <script>
                                        var date = new Date();
                                        var year = date.getFullYear();
                                        var month = String(date.getMonth() + 1).padStart(2, '0');
                                        var todayDate = String(date.getDate()).padStart(2, '0');
                                        var datePattern = year + '-' + month + '-' + todayDate;
                                        document.getElementById("date").value = datePattern;
                                        </script>
                                        <input type="text" name="Patient_ID" placeholder="Patient_ID" value="<?php echo $p; ?>" readonly="readonly" />
                                        <input type="text " name="Patient_Name" id="Patient_Name" readonly="readonly" value="<?php echo $_SESSION['pat_name']; ?>" placeholder="Patient Name" required />
                                        <!-- <span id="messages" style="color: red;"></span><br><br> -->
                                        <input type="text" name="Doctor_ID" placeholder="Doctor ID" value="<?php echo $_SESSION['doc_id'] ?>" readonly="readonly" required />
                                        <br><br>
                                        <input type="text" name="Doctor_Name" placeholder="Doctor Name" value="<?php echo $_SESSION['doc_name'] ?>" readonly="readonly" required />
                                        <input type="text" name="Symptom_summary" placeholder="Symptom summary" value="<?php echo $_SESSION['phy_rem'] ?>" required />
                                        
                                        <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Instructions</label>
                                        <textarea class="form-control" name="Diagnosis_Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <label style="text-align: center;" for="">
                                        <h3>MEDICINES | DOSES | DURATION</h3>
                                        </label>
                                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-6">
                                <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?>  required>
                                <option selected>Medicine 1</option>
                                <option value="N/A">N/A</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Amytriptyline 10">Amytriptyline 10</option>
                                <option value="Amytriptyline 25">Amytriptyline 25</option>
                                <option value="Aspirin 150">Aspirin 150</option>
                                <option value="Aspirin 75">Aspirin 75</option>
                                <option value="ATENOLOL 25">ATENOLOL 25</option>
                                <option value="ATENOLOL 50">ATENOLOL 50</option>
                                <option value="Atorvastatine 10">Atorvastatine 10</option>
                                <option value="Azithromycine 250">Azithromycine 250</option>
                                <option value="Azythromycin 500">Azythromycin 500</option>
                                <option value="BETAMETHASONE VALERATE OINTMENT">BETAMETHASONE VALERATE OINTMENT</option>
                                <option value="Bisacodyl">Bisacodyl</option>
                                <option value="Cefixime 200">Cefixime 200</option>
                                <option value="CETRIZINE 10">CETRIZINE 10</option>
                                <option value="CHLOROQUIN 250">CHLOROQUIN 250</option>
                                <option value="CINNARIZINE 25">CINNARIZINE 25</option>
                                <option value="CIPROFLOXACIN 250">CIPROFLOXACIN 250</option>
                                <option value="CIPROFLOXACIN 500">CIPROFLOXACIN 500</option>
                                <option value="CIPROFLOXACIN EYE DROP">CIPROFLOXACIN EYE DROP</option>
                                <option value="CLONAZEPAM 0.5">CLONAZEPAM 0.5</option>
                                <option value="CO-TRIMOXAZOLE DS">CO-TRIMOXAZOLE DS</option>
                                <option value="CO-TRIMOXAZOLE SS">CO-TRIMOXAZOLE SS</option>
                                <option value="DERIPHYLLIN RETARD 300">DERIPHYLLIN RETARD 300</option>
                                <option value="Diclofenac sodium 50">Diclofenac sodium 50</option>
                                <option value="Diethylcarbamazine citrate 100">Diethylcarbamazine citrate 100</option>
                                <option value="Domperidone 10">Domperidone 10</option>
                                <option value="Doxycycline 100">Doxycycline 100</option>
                                <option value="Enalapril 10">Enalapril 10</option>
                                <option value="Enalapril 2.5">Enalapril 2.5</option>
                                <option value="Enalapril 5">Enalapril 5</option>
                                <option value="Famotidine 40">Famotidine 40</option>
                                <option value="Fenofibrate 160">Fenofibrate 160</option>
                                <option value="Ferrous Sulphate">Ferrous Sulphate</option>
                                <option value="Folic acid">Folic acid</option>
                                <option value="Frusemide 40">Frusemide 40</option>
                                <option value="Gabapentine 100">Gabapentine 100</option>
                                <option value="Gentamicin cream">Gentamicin cream</option>
                                <option value="Hydrochlorothyazide 12.5">Hydrochlorothyazide 12.5</option>
                                <option value="Hydrochlorothyazide 25">Hydrochlorothyazide 25</option>
                                <option value="Ibuprofen 200">Ibuprofen 200</option>
                                <option value="Indomethacin-25">Indomethacin-25</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                </select>
                                </div><br><br><br>
                                <div class="col-sm-6">
                                <select  style="padding: 0px 60px;"name="d1" id="location_code" <?php $d1 = $_SESSION['d1'];  ?> class="browser-default custom-select" required>
                                <option selected>Duration</option>
                                <option value="One time">One time</option>
                                <option value="2 days">2 days</option>
                                <option value="3 Days">3 Days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                                <option value="7 days">7 days</option>
                                <option value="1 Week">1 Week</option>
                                <option value="2 Weeks">2 Weeks</option>
                                <option value="3 Weeks">3 Weeks</option>
                                <option value="1 Month">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                                <option value="Others">Others</option>

                                </select>
                                </div><br>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                              <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                              </select>
                            </div><br><br><br>
                            <div class="col-sm-6">
                                <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?>  required>
                                <option selected>Medicine 1</option>
                                <option value="N/A">N/A</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Amytriptyline 10">Amytriptyline 10</option>
                                <option value="Amytriptyline 25">Amytriptyline 25</option>
                                <option value="Aspirin 150">Aspirin 150</option>
                                <option value="Aspirin 75">Aspirin 75</option>
                                <option value="ATENOLOL 25">ATENOLOL 25</option>
                                <option value="ATENOLOL 50">ATENOLOL 50</option>
                                <option value="Atorvastatine 10">Atorvastatine 10</option>
                                <option value="Azithromycine 250">Azithromycine 250</option>
                                <option value="Azythromycin 500">Azythromycin 500</option>
                                <option value="BETAMETHASONE VALERATE OINTMENT">BETAMETHASONE VALERATE OINTMENT</option>
                                <option value="Bisacodyl">Bisacodyl</option>
                                <option value="Cefixime 200">Cefixime 200</option>
                                <option value="CETRIZINE 10">CETRIZINE 10</option>
                                <option value="CHLOROQUIN 250">CHLOROQUIN 250</option>
                                <option value="CINNARIZINE 25">CINNARIZINE 25</option>
                                <option value="CIPROFLOXACIN 250">CIPROFLOXACIN 250</option>
                                <option value="CIPROFLOXACIN 500">CIPROFLOXACIN 500</option>
                                <option value="CIPROFLOXACIN EYE DROP">CIPROFLOXACIN EYE DROP</option>
                                <option value="CLONAZEPAM 0.5">CLONAZEPAM 0.5</option>
                                <option value="CO-TRIMOXAZOLE DS">CO-TRIMOXAZOLE DS</option>
                                <option value="CO-TRIMOXAZOLE SS">CO-TRIMOXAZOLE SS</option>
                                <option value="DERIPHYLLIN RETARD 300">DERIPHYLLIN RETARD 300</option>
                                <option value="Diclofenac sodium 50">Diclofenac sodium 50</option>
                                <option value="Diethylcarbamazine citrate 100">Diethylcarbamazine citrate 100</option>
                                <option value="Domperidone 10">Domperidone 10</option>
                                <option value="Doxycycline 100">Doxycycline 100</option>
                                <option value="Enalapril 10">Enalapril 10</option>
                                <option value="Enalapril 2.5">Enalapril 2.5</option>
                                <option value="Enalapril 5">Enalapril 5</option>
                                <option value="Famotidine 40">Famotidine 40</option>
                                <option value="Fenofibrate 160">Fenofibrate 160</option>
                                <option value="Ferrous Sulphate">Ferrous Sulphate</option>
                                <option value="Folic acid">Folic acid</option>
                                <option value="Frusemide 40">Frusemide 40</option>
                                <option value="Gabapentine 100">Gabapentine 100</option>
                                <option value="Gentamicin cream">Gentamicin cream</option>
                                <option value="Hydrochlorothyazide 12.5">Hydrochlorothyazide 12.5</option>
                                <option value="Hydrochlorothyazide 25">Hydrochlorothyazide 25</option>
                                <option value="Ibuprofen 200">Ibuprofen 200</option>
                                <option value="Indomethacin-25">Indomethacin-25</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                </select>
                                </div><br><br><br>
                                <div class="col-sm-6">
                                <select  style="padding: 0px 60px;"name="d1" id="location_code" <?php $d1 = $_SESSION['d1'];  ?> class="browser-default custom-select" required>
                                <option selected>Duration</option>
                                <option value="One time">One time</option>
                                <option value="2 days">2 days</option>
                                <option value="3 Days">3 Days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                                <option value="7 days">7 days</option>
                                <option value="1 Week">1 Week</option>
                                <option value="2 Weeks">2 Weeks</option>
                                <option value="3 Weeks">3 Weeks</option>
                                <option value="1 Month">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                                <option value="Others">Others</option>

                                </select>
                                </div><br>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                              <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                              </select>
                            </div><br><br><br>
                            <div class="col-sm-6">
                                <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?>  required>
                                <option selected>Medicine 1</option>
                                <option value="N/A">N/A</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Amytriptyline 10">Amytriptyline 10</option>
                                <option value="Amytriptyline 25">Amytriptyline 25</option>
                                <option value="Aspirin 150">Aspirin 150</option>
                                <option value="Aspirin 75">Aspirin 75</option>
                                <option value="ATENOLOL 25">ATENOLOL 25</option>
                                <option value="ATENOLOL 50">ATENOLOL 50</option>
                                <option value="Atorvastatine 10">Atorvastatine 10</option>
                                <option value="Azithromycine 250">Azithromycine 250</option>
                                <option value="Azythromycin 500">Azythromycin 500</option>
                                <option value="BETAMETHASONE VALERATE OINTMENT">BETAMETHASONE VALERATE OINTMENT</option>
                                <option value="Bisacodyl">Bisacodyl</option>
                                <option value="Cefixime 200">Cefixime 200</option>
                                <option value="CETRIZINE 10">CETRIZINE 10</option>
                                <option value="CHLOROQUIN 250">CHLOROQUIN 250</option>
                                <option value="CINNARIZINE 25">CINNARIZINE 25</option>
                                <option value="CIPROFLOXACIN 250">CIPROFLOXACIN 250</option>
                                <option value="CIPROFLOXACIN 500">CIPROFLOXACIN 500</option>
                                <option value="CIPROFLOXACIN EYE DROP">CIPROFLOXACIN EYE DROP</option>
                                <option value="CLONAZEPAM 0.5">CLONAZEPAM 0.5</option>
                                <option value="CO-TRIMOXAZOLE DS">CO-TRIMOXAZOLE DS</option>
                                <option value="CO-TRIMOXAZOLE SS">CO-TRIMOXAZOLE SS</option>
                                <option value="DERIPHYLLIN RETARD 300">DERIPHYLLIN RETARD 300</option>
                                <option value="Diclofenac sodium 50">Diclofenac sodium 50</option>
                                <option value="Diethylcarbamazine citrate 100">Diethylcarbamazine citrate 100</option>
                                <option value="Domperidone 10">Domperidone 10</option>
                                <option value="Doxycycline 100">Doxycycline 100</option>
                                <option value="Enalapril 10">Enalapril 10</option>
                                <option value="Enalapril 2.5">Enalapril 2.5</option>
                                <option value="Enalapril 5">Enalapril 5</option>
                                <option value="Famotidine 40">Famotidine 40</option>
                                <option value="Fenofibrate 160">Fenofibrate 160</option>
                                <option value="Ferrous Sulphate">Ferrous Sulphate</option>
                                <option value="Folic acid">Folic acid</option>
                                <option value="Frusemide 40">Frusemide 40</option>
                                <option value="Gabapentine 100">Gabapentine 100</option>
                                <option value="Gentamicin cream">Gentamicin cream</option>
                                <option value="Hydrochlorothyazide 12.5">Hydrochlorothyazide 12.5</option>
                                <option value="Hydrochlorothyazide 25">Hydrochlorothyazide 25</option>
                                <option value="Ibuprofen 200">Ibuprofen 200</option>
                                <option value="Indomethacin-25">Indomethacin-25</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                </select>
                                </div><br><br><br>
                                <div class="col-sm-6">
                                <select  style="padding: 0px 60px;"name="d1" id="location_code" <?php $d1 = $_SESSION['d1'];  ?> class="browser-default custom-select" required>
                                <option selected>Duration</option>
                                <option value="One time">One time</option>
                                <option value="2 days">2 days</option>
                                <option value="3 Days">3 Days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                                <option value="7 days">7 days</option>
                                <option value="1 Week">1 Week</option>
                                <option value="2 Weeks">2 Weeks</option>
                                <option value="3 Weeks">3 Weeks</option>
                                <option value="1 Month">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                                <option value="Others">Others</option>

                                </select>
                                </div><br>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                              <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                              </select>
                            </div><br><br><br>
                            <div class="col-sm-6">
                                <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?>  required>
                                <option selected>Medicine 1</option>
                                <option value="N/A">N/A</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Amytriptyline 10">Amytriptyline 10</option>
                                <option value="Amytriptyline 25">Amytriptyline 25</option>
                                <option value="Aspirin 150">Aspirin 150</option>
                                <option value="Aspirin 75">Aspirin 75</option>
                                <option value="ATENOLOL 25">ATENOLOL 25</option>
                                <option value="ATENOLOL 50">ATENOLOL 50</option>
                                <option value="Atorvastatine 10">Atorvastatine 10</option>
                                <option value="Azithromycine 250">Azithromycine 250</option>
                                <option value="Azythromycin 500">Azythromycin 500</option>
                                <option value="BETAMETHASONE VALERATE OINTMENT">BETAMETHASONE VALERATE OINTMENT</option>
                                <option value="Bisacodyl">Bisacodyl</option>
                                <option value="Cefixime 200">Cefixime 200</option>
                                <option value="CETRIZINE 10">CETRIZINE 10</option>
                                <option value="CHLOROQUIN 250">CHLOROQUIN 250</option>
                                <option value="CINNARIZINE 25">CINNARIZINE 25</option>
                                <option value="CIPROFLOXACIN 250">CIPROFLOXACIN 250</option>
                                <option value="CIPROFLOXACIN 500">CIPROFLOXACIN 500</option>
                                <option value="CIPROFLOXACIN EYE DROP">CIPROFLOXACIN EYE DROP</option>
                                <option value="CLONAZEPAM 0.5">CLONAZEPAM 0.5</option>
                                <option value="CO-TRIMOXAZOLE DS">CO-TRIMOXAZOLE DS</option>
                                <option value="CO-TRIMOXAZOLE SS">CO-TRIMOXAZOLE SS</option>
                                <option value="DERIPHYLLIN RETARD 300">DERIPHYLLIN RETARD 300</option>
                                <option value="Diclofenac sodium 50">Diclofenac sodium 50</option>
                                <option value="Diethylcarbamazine citrate 100">Diethylcarbamazine citrate 100</option>
                                <option value="Domperidone 10">Domperidone 10</option>
                                <option value="Doxycycline 100">Doxycycline 100</option>
                                <option value="Enalapril 10">Enalapril 10</option>
                                <option value="Enalapril 2.5">Enalapril 2.5</option>
                                <option value="Enalapril 5">Enalapril 5</option>
                                <option value="Famotidine 40">Famotidine 40</option>
                                <option value="Fenofibrate 160">Fenofibrate 160</option>
                                <option value="Ferrous Sulphate">Ferrous Sulphate</option>
                                <option value="Folic acid">Folic acid</option>
                                <option value="Frusemide 40">Frusemide 40</option>
                                <option value="Gabapentine 100">Gabapentine 100</option>
                                <option value="Gentamicin cream">Gentamicin cream</option>
                                <option value="Hydrochlorothyazide 12.5">Hydrochlorothyazide 12.5</option>
                                <option value="Hydrochlorothyazide 25">Hydrochlorothyazide 25</option>
                                <option value="Ibuprofen 200">Ibuprofen 200</option>
                                <option value="Indomethacin-25">Indomethacin-25</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                <option value="Xeroworn 401">Xeroworn 401</option>
                                <option value="Amlodipine 10">Amlodipine 10</option>
                                <option value="Amlodipine 2.5">Amlodipine 2.5</option>
                                <option value="Amlodipine 5">Amlodipine 5</option>
                                <option value="Amoxyxillin 125">Amoxyxillin 125</option>
                                <option value="Amoxyxillin 250">Amoxyxillin 250</option>
                                <option value="Amoxyxillin 500">Amoxyxillin 500</option>
                                </select>
                                </div><br><br><br>
                                <div class="col-sm-6">
                                <select  style="padding: 0px 60px;"name="d1" id="location_code" <?php $d1 = $_SESSION['d1'];  ?> class="browser-default custom-select" required>
                                <option selected>Duration</option>
                                <option value="One time">One time</option>
                                <option value="2 days">2 days</option>
                                <option value="3 Days">3 Days</option>
                                <option value="4 days">4 days</option>
                                <option value="5 days">5 days</option>
                                <option value="6 days">6 days</option>
                                <option value="7 days">7 days</option>
                                <option value="1 Week">1 Week</option>
                                <option value="2 Weeks">2 Weeks</option>
                                <option value="3 Weeks">3 Weeks</option>
                                <option value="1 Month">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                                <option value="Others">Others</option>

                                </select>
                                </div><br>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                                <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                                </select>

                                </div>
                                <div class="col-sm-4">

                              <select name="f1" id="location_code" <?php $f1 = $_SESSION['f1'];  ?> class="browser-default multi_select" required>
                                <option selected>Frequencies</option>
                                <option value="Empty Stomach">Empty Stomach</option>
                                <option value="Before Breakfast">Before Breakfast</option>
                                <option value="After Breakfast">After Breakfast</option>
                                <option value="Before Lunch">Before Lunch</option>
                                <option value="After Lunch">After Lunch</option>
                                <option value="Before Dinner">Before Dinner</option>
                                <option value="After Dinner">After Dinner</option>
                                <option value="Before Bed">Before Bed</option>
                                <option value="Other">Other</option>
                              </select>
                            </div>
                          </div>
                        </div>

                                        
                                        <br><br>
                                        <select name="Specialty" class="browser-default custom-select">
                                            <option selected>Specialty</option>
                                            <option value="GP">GP</option>
                                            <option value="Gynecologist">Gynecologist</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <br><br>
                                        <input type="text" name="Address" placeholder="Address" />
                                        <input type="text" name="Mobile" placeholder="Mobile No" />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Availability
                                            <div class="container">
                                                <table>
                                                    <tr>
                                                        <td>
                                                        <td> Mon</td>
                                                        <td> Tue</td>
                                                        <td> Wed</td>
                                                        <td> Thu</td>
                                                        <td> Fri</td>
                                                        <td> Sat</td>
                                                        <td> Sun</td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="8-9" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="9-10" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="10-11" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="11-12" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="12-13" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="13-14" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="14-15" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="15-16" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="16-17" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="17-18" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="18-19" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="check[]" type="text" value="19-20" readonly="readonly"></td>
                                                        <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                        <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                        <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                        <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                        <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                        <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </label>
                                    </div>
                                    <input type="submit" name="submit" class="next action-button" value="submit" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>