<?php
session_start();
$p = $_SESSION['pat_reg'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css">
  <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prescription</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <!-- <a class="navbar-brand" href="#"><img src="1234.webp"></a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- <form action="family_reg_conn.php" method="post"> -->
      <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
          <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
              <h1><b>PRESCRIPTION</b></h1>
              <p></p>
              <div class="row">
                <div class="col-md-12 mx-0">
                  <form id="msform" action="PRESCRIPTION.php" method="post">
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
                            <div class="col-sm-4">
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
                              <select name="d1" id="location_code" <?php $d1 = $_SESSION['d1'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m2" id="location_code" class="browser-default custom-select" <?php $m2 = $_SESSION['m2'];  ?> required>
                                <option selected>Medicine 2</option>
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
                            </div>
                            <div class="col-sm-4">
                              <select name="f2" id="location_code" <?php $f2 = $_SESSION['f2'];  ?> class="browser-default custom-select" required>
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
                              <select name="d2" id="location_code" <?php $d2 = $_SESSION['d2'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m3" id="location_code" class="browser-default custom-select" <?php $m3 = $_SESSION['m3'];  ?> required>
                                <option selected>Medicine 3</option>
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
                            </div>
                            <div class="col-sm-4">
                              <select name="f3" id="location_code" <?php $f3 = $_SESSION['f3'];  ?> class="browser-default custom-select" required>
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
                              <select name="d3" id="location_code" <?php $d3 = $_SESSION['d3'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m4" id="location_code" class="browser-default custom-select" <?php $m4 = $_SESSION['m4'];  ?> required>
                                <option selected>Medicine 4</option>
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
                            </div>
                            <div class="col-sm-4">
                              <select name="f4" id="location_code" <?php $f4 = $_SESSION['f4'];  ?> class="browser-default custom-select" required>
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
                              <select name="d4" id="location_code" <?php $d4 = $_SESSION['d4'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br>

                        <br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m5" id="location_code" class="browser-default custom-select" <?php $m5 = $_SESSION['m5'];  ?> required>
                                <option selected>Medicine 5</option>
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
                            </div>
                            <div class="col-sm-4">
                              <select name="f5" id="location_code" <?php $f5 = $_SESSION['f5'];  ?> class="browser-default custom-select" required>
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
                              <select name="d5" id="location_code" <?php $d5 = $_SESSION['d5'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br> <br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m6" id="location_code" class="browser-default custom-select" <?php $m6 = $_SESSION['m6'];  ?> required>
                                <option selected>Medicine 6</option>
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
                            </div>
                            <div class="col-sm-4">
                              <select name="f6" id="location_code" <?php $f6 = $_SESSION['f6'];  ?> class="browser-default custom-select" required>
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
                              <select name="d6" id="location_code" <?php $d6 = $_SESSION['d6'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m7" id="location_code" class="browser-default custom-select" <?php $m7 = $_SESSION['m7'];  ?> required>
                                <option selected>Medicine 7</option>
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
                            </div>
                            <div class="col-sm-4">
                              <select name="f7" id="location_code" <?php $f7 = $_SESSION['f7'];  ?> class="browser-default custom-select" required>
                                <option selected>Frequencies</option>
                                <label for="one">
                                <input type="checkbox" id="ch_one" name="Empty Stomach"/>
                                Empty Stomach </label>
                                <label for="two">
                                  <input type="checkbox" id="ch_two" name="Before Brakfast"/>Before Brakfast</label>
                                 
                                <label for="three">
                                  <input type="checkbox" id="ch_three" name="After Breakfast"/>After Breakfast</label>
                                <label for="four">
                                  <input type="checkbox" id="ch_four" name="Before Dinner"/>Before Dinner</label>
                                <label for="five">
                                  <input type="checkbox" id="ch_five" name="After Dinner"/>After Dinner</label>
                                <label for="six">
                                  <input type="checkbox" id="ch_six" name="Before Dinner"/>Before Dinner</label>
                                <label for="seven">
                                  <input type="checkbox" id="ch_seven" name="After Dinner"/>After Dinner</label>
                                <label for="eight">
                                  <input type="checkbox" id="ch_eight" name="Before Bed"/>Before Bed</label>
                                <label for="nine">
                                  <input type="checkbox" id="ch_nine" name="Others"/>Others</label>
                              </select>
                            </div>
                            <div class="col-sm-4">
                              <select name="d7" id="location_code" <?php $d7 = $_SESSION['d7'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-4">
                              <select name="m8" id="location_code" class="browser-default custom-select" <?php $m8 = $_SESSION['m8'];  ?> required>
                                <option selected>Medicine 8</option>
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
                            </div>
                            <div class="col-sm-4">
                              <form>
                            <div class="multiselect">
                              <div class="selectBox" onclick="showCheckboxes()">
                                <select>
                                  <option>FREQUENCIES</option>
                                </select>
                                <div class="overSelect"></div>
                              </div>
                              <div  id="checkboxes">
                                <label for="one">
                                <input type="checkbox" id="ch_one" name="Empty Stomach"/>
                                Empty Stomach </label>
                                <label for="two">
                                  <input type="checkbox" id="ch_two" name="Before Brakfast"/>Before Brakfast</label>
                                 
                                <label for="three">
                                  <input type="checkbox" id="ch_three" name="After Breakfast"/>After Breakfast</label>
                                <label for="four">
                                  <input type="checkbox" id="ch_four" name="Before Dinner"/>Before Dinner</label>
                                <label for="five">
                                  <input type="checkbox" id="ch_five" name="After Dinner"/>After Dinner</label>
                                <label for="six">
                                  <input type="checkbox" id="ch_six" name="Before Dinner"/>Before Dinner</label>
                                <label for="seven">
                                  <input type="checkbox" id="ch_seven" name="After Dinner"/>After Dinner</label>
                                <label for="eight">
                                  <input type="checkbox" id="ch_eight" name="Before Bed"/>Before Bed</label>
                                <label for="nine">
                                  <input type="checkbox" id="ch_nine" name="Others"/>Others</label>
                              </div>
                            </div>
                          
                              </select>
                            </div>
                            <div class="col-sm-4">
                              <select name="d8" id="location_code" <?php $d8 = $_SESSION['d8'];  ?> class="browser-default custom-select" required>
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
                            </div>
                          </div>
                        </div>
                        <br>
                        <br>
                        <style media="screen">
                          .multiselect {
                          width: 200px;
                        }

                        .selectBox {
                          position: relative;
                        }

                        .selectBox select {
                          width: 100%;
                          font-weight: bold;
                        }

                        .overSelect {
                          position: absolute;
                          left: 0;
                          right: 0;
                          top: 0;
                          bottom: 0;
                        }

                        #checkboxes {
                          display: none;
                          border: 1px #dadada solid;
                        }
                        #checkboxes label {
                          display: block;
                        }

                        #checkboxes label:hover {
                          background-color: #1e90ff;
                        }


                        </style>
                        <script type="text/javascript">
                          var expanded = false;

                        function showCheckboxes() {
                          var checkboxes = document.getElementById("checkboxes");
                          if (!expanded) {
                            checkboxes.style.display = "block";
                            expanded = true;
                          } else {
                            checkboxes.style.display = "none";
                            expanded = false;
                          }
                        }

                        </script>
                        <label style="text-align: center;" for="">
                          <h3> TESTS</h3>
                        </label>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                              <select name="Tests" id="location_code" <?php $Tests = $_SESSION['Tests'];  ?> class="browser-default custom-select" required>
                                <option selected>Tests</option>
                                <option value="N/A">N/A</option>
                                <option value="ECG">ECG</option>
                                <option value="Blood Sugar">Blood Sugar</option>
                                <option value="Daily BP Monitor">Daily SPO2 monitor</option>
                                <option value="Daily Temperature monitor">Daily Temperature monitor</option>
                                <option value="Daily Pulse Monitor">Daily Pulse Monitor</option>
                              </select>
                              <br><br>
                              <div class="row">
                                <label for="return2"><b>Any Special Instructions:</b></label>
                                <input id="return2" name='Special_instruction' class="form-control input input-sm" style="width:600px">
                                <label for="return2"><b>Next Recommended Visit:</b></label>
                                <input type="date" id="start" name="Next_recommended_Visit" value="" placeholder="Next Recommended Visit">
                              </div>



                              <input class="text-center" type="submit" name="submit" onclick="value()" class="next action-button" value="submit" />
                    </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
</body>


</html>
