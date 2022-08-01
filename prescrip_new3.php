<?php
session_start();

$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
// echo $_SESSION['arr_name_new'];

// $_POST['buttonname'] = 'text of the button';
if (isset($_SESSION['dcr'])) {
    $p = $_SESSION['dcr'];

    $q1 = "SELECT * FROM `doctor`  WHERE `Doctors_Registration_No`='$p'";
    $e1 = mysqli_query($conn, $q1);
    if (mysqli_num_rows($e1) > 0) {

        $res = mysqli_fetch_row($e1);
        $nm = $res[0];
    }
    $q2 = "SELECT * FROM `medical_consultant` where `Assigned_doctor` = '$nm'";
    $pat_name = mysqli_query($conn, $q2);
}


extract($_REQUEST);
$query = "SELECT * FROM `medical_consultant` where `Name` = '$x'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);
// $conn = mysqli_connect("localhost","root","","doc_patient");


?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
  <title>Prescription</title>

</head>
<style>
    
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
  
        .dropdown {
            position: relative;
            display: inline-block;
        }
  
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 
                0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
  
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
  
        .dropdown-content a:hover {
            background-color: #f1f1f1
        }
  
        .dropdown:hover .dropdown-content {
            display: block;
        }
  
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
<style>
    

    
    body { padding: 40px; }
.dropdown-toggle, .dropdown-menu { width: 300px }
.btn-group img { margin-right: 10px }
.dropdown-toggle { padding-right: 50px }
.dropdown-toggle .glyphicon { margin-left: 20px; margin-right: -40px }
.dropdown-menu>li>a:hover { background: #f1f9fd } /* $search-blue */
.dropdown-header { background: #ccc; font-size: 14px; font-weight: 700; padding-top: 5px; padding-bottom: 5px; margin-top: 10px; margin-bottom: 5px }
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap');

    :root {
        --calendar-bg-color: #262829;
        --calendar-font-color: #FFF;
        --weekdays-border-bottom-color: #404040;
        --calendar-date-hover-color: #505050;
        --calendar-current-date-color: #1b1f21;
        --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
        --calendar-today-innerborder-color: transparent;
        --calendar-nextprev-bg-color: transparent;
        --next-prev-arrow-color: #FFF;
        --calendar-border-radius: 16px;
        --calendar-prevnext-date-color: #484848
    }

    * {
        padding: 0;
        margin: 0;
    }

    .calendar {
        font-family: 'IBM Plex Sans', sans-serif;
        position: relative;
        max-width: 330px;
        /*change as per your design need */
        min-width: 250px;
        background: var(--calendar-bg-color);
        color: var(--calendar-font-color);
        margin: 20px auto;
        box-sizing: border-box;
        overflow: hidden;
        font-weight: normal;
        border-radius: var(--calendar-border-radius);
    }

    .calendar-inner {
        padding: 10px 10px;
    }

    .calendar .calendar-inner .calendar-body {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        text-align: center;
    }

    .calendar .calendar-inner .calendar-body div {
        padding: 4px;
        min-height: 30px;
        line-height: 30px;
        border: 1px solid transparent;
        margin: 10px 2px 0px;
    }

    .calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
        border: 1px solid transparent;
        border-bottom: 1px solid var(--weekdays-border-bottom-color);
    }

    .calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
        border: 1px solid transparent;
        border-bottom: 1px solid var(--weekdays-border-bottom-color);
    }

    .calendar .calendar-inner .calendar-body div>a {
        color: var(--calendar-font-color);
        text-decoration: none;
        display: flex;
        justify-content: center;
    }

    .calendar .calendar-inner .calendar-body div:hover {
        border: 1px solid var(--calendar-date-hover-color);
        border-radius: 4px;
    }

    .calendar .calendar-inner .calendar-body div.empty-dates:hover {
        border: 1px solid transparent;
    }

    .calendar .calendar-inner .calendar-controls {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .calendar .calendar-inner .calendar-today-date {
        display: grid;
        text-align: center;
        cursor: pointer;
        margin: 3px 0px;
        background: var(--calendar-current-date-color);
        padding: 8px 0px;
        border-radius: 10px;
        width: 80%;
        margin: auto;
    }

    .calendar .calendar-inner .calendar-controls .calendar-year-month {
        display: flex;
        min-width: 100px;
        justify-content: space-evenly;
        align-items: center;
    }

    .calendar .calendar-inner .calendar-controls .calendar-next {
        text-align: right;
    }

    .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
    .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
        font-weight: 500;
        font-size: 20px;
    }

    .calendar .calendar-inner .calendar-body .calendar-today {
        background: var(--calendar-today-color);
        border-radius: 4px;
    }

    .calendar .calendar-inner .calendar-body .calendar-today:hover {
        border: 1px solid transparent;
    }

    .calendar .calendar-inner .calendar-body .calendar-today a {
        outline: 2px solid var(--calendar-today-innerborder-color);
    }

    .calendar .calendar-inner .calendar-controls .calendar-next a,
    .calendar .calendar-inner .calendar-controls .calendar-prev a {
        color: var(--calendar-font-color);
        font-family: arial, consolas, sans-serif;
        font-size: 26px;
        text-decoration: none;
        padding: 4px 12px;
        display: inline-block;
        background: var(--calendar-nextprev-bg-color);
        margin: 10px 0 10px 0;
    }

    .calendar .calendar-inner .calendar-controls .calendar-next a svg,
    .calendar .calendar-inner .calendar-controls .calendar-prev a svg {
        height: 20px;
        width: 20px;
    }

    .calendar .calendar-inner .calendar-controls .calendar-next a svg path,
    .calendar .calendar-inner .calendar-controls .calendar-prev a svg path {
        fill: var(--next-prev-arrow-color);
    }

    .calendar .calendar-inner .calendar-body .prev-dates,
    .calendar .calendar-inner .calendar-body .next-dates {
        color: var(--calendar-prevnext-date-color);
    }

    .calendar .calendar-inner .calendar-body .prev-dates:hover,
    .calendar .calendar-inner .calendar-body .next-dates:hover {
        border: 1px solid transparent;
        pointer-events: none;
    }

    * {
        box-sizing: border-box;
    }

    .row {
        margin-left: 50px;
        margin-right: -5px;
    }

    .column {
        float: left;
        width: 95%;
        padding: 5px;
    }

    /* Clearfix (clear floats) */

    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid black;
    }

    th,
    td {
        text-align: left;
        padding: 26px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */

    @media screen and (max-width: 600px) {
        .column {
            width: 80%;
        }
    }
</style>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="Volunteer/index.php"><i class='bx bx-laptop'></i></a>
            <div class="logo_name">Telemedicine-Project</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="doctor_dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="prescription.php">
                    <i class='bx bxs-message-alt-add'></i>
                    <span class="links_name">Create Prescription</span>
                </a>
                <span class="tooltip">Create Prescription</span>
            </li>



            <li>
                <a href="m_bank.php">
                    <i class='bx bx-history'></i>
                    <span class="links_name">Patient Record</span>
                </a>
                <span class="tooltip">Patient Record</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Telemedicine Project</div>
                        <div class="job">Team NITDGP</div>
                    </div>
                </div>
                <a href="../login.php"><i class="bx bx-log-out" id="log_out"></i> </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Doctor Dashboard </div>
        <div class="row jumbotron">
        <div class="col-sm-12 form-group">
                <label for="name-f"><b> Patient Name:</b></label>
                <input type="text "class="form-control" name="Patient_Name" id="Patient_Name" readonly="readonly" value="<?php echo $_SESSION['pat_name']; ?>" placeholder="Patient Name" required />
            </div>
            <div class="col-sm-6 form-group">
                <label><b>Date</b></label>
                <input class="form-control" type="date" name="Date_of_Registration" placeholder="date" id="date" readonly="readonly" />
                <script>
                      var date = new Date();
                      var year = date.getFullYear();
                      var month = String(date.getMonth() + 1).padStart(2, '0');
                      var todayDate = String(date.getDate()).padStart(2, '0');
                      var datePattern = year + '-' + month + '-' + todayDate;
                      document.getElementById("date").value = datePattern;
                    </script>
            </div>
            
            <div class="col-sm-6 form-group">
                <label for="email"><b>Patient ID:</b></label>
                <input type="text" class="form-control" name="Patient_ID" placeholder="Patient_ID" value="<?php echo $p; ?>" readonly="readonly" />
            </div>
            <div class="col-sm-6 form-group">
                <label for="email"><b>Doctor ID:</b></label>
                <input type="text" class="form-control" name="Doctor_ID" placeholder="Doctor ID" value="<?php echo $_SESSION['doc_id'] ?>" readonly="readonly" required />
            </div>
            <div class="col-sm-6 form-group">
                <label for="email"><b>Doctor Name:</b></label>
                <input type="text"  class="form-control" name="Doctor_Name" placeholder="Doctor Name" value="<?php echo $_SESSION['doc_name']; ?>" readonly="readonly" required />
            </div><br>
            <div class="col-sm-12 form-group"><br><br>
                <label for="email"><h4><b>Symtoms Summary:</b></h4></label>
                <input type="text" class="form-control" name="Symptom_summary" placeholder="Symptom summary" value="<?php echo $_SESSION['phy_rem'] ?>" required />
            </div>
            <div class="form-group col-sm-12">
                <label for="email"><h4><b>Instructions:</b></h4></label>
                <textarea class="form-control" name="Diagnosis_Description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>  
            <div class="form-group col-sm-12">
                <label for="email"><h4><b>MEDICINES | DOSES | DURATION</b></h4></label>
            </div>
            <div class="form-group col-sm-6">
                              <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?> required>
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
            <div class="col-sm-6 form-group">
            <select name="d1" id="location_code" class="browser-default custom-select" <?php $d1 = $_SESSION['d1'];  ?> required>
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
                   
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">Before Breakfast - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Breakfast</option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Lunch - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Lunch<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Dinner - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Dinner<b></option>
    
    
            
        </select> </div>

        <div class="form-group col-sm-12">
            </div>
            <div class="form-group col-sm-6">
                              <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?> required>
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
            <div class="col-sm-6 form-group">
            <select name="d1" id="location_code" class="browser-default custom-select" <?php $d1 = $_SESSION['d1'];  ?> required>
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
                   
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">Before Breakfast - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Breakfast</option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Lunch - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Lunch<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Dinner - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Dinner<b></option>
    
    
            
        </select> </div>
        <div class="form-group col-sm-12">
            </div>
            <div class="form-group col-sm-6">
                              <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?> required>
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
            <div class="col-sm-6 form-group">
            <select name="d1" id="location_code" class="browser-default custom-select" <?php $d1 = $_SESSION['d1'];  ?> required>
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
                   
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">Before Breakfast - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Breakfast</option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Lunch - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Lunch<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Dinner - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Dinner<b></option>
    
    
            
        </select> </div>
        <div class="form-group col-sm-12">
            </div>
            <div class="form-group col-sm-6">
                              <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?> required>
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
            <div class="col-sm-6 form-group">
            <select name="d1" id="location_code" class="browser-default custom-select" <?php $d1 = $_SESSION['d1'];  ?> required>
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
                   
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">Before Breakfast - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Breakfast</option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Lunch - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Lunch<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Dinner - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Dinner<b></option>
    
    
            
        </select> </div>
        <div class="form-group col-sm-12">
            </div>
            <div class="form-group col-sm-6">
                              <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?> required>
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
            <div class="col-sm-6 form-group">
            <select name="d1" id="location_code" class="browser-default custom-select" <?php $d1 = $_SESSION['d1'];  ?> required>
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
                   
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">Before Breakfast - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Breakfast</option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Lunch - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Lunch<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Dinner - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Dinner<b></option>
    
    
            
        </select> </div>
        <div class="form-group col-sm-12">
            </div>
            <div class="form-group col-sm-6">
                              <select name="m1" id="location_code" class="browser-default custom-select" <?php $m1 = $_SESSION['m1'];  ?> required>
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
            <div class="col-sm-6 form-group">
            <select name="d1" id="location_code" class="browser-default custom-select" <?php $d1 = $_SESSION['d1'];  ?> required>
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
                   
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">Before Breakfast - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Breakfast</option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Lunch - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Lunch<b></option>
    <option style="background-image:url(Logo.png);" value="HTML">Empty Stomach - x&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>
    <option style="background-image:url(Logo.png);" value="HTML">Before Dinner - o&nbsp;&nbsp;| O |&nbsp;&nbsp;x</option>        
    <option style="background-image:url(Logo.png);" value="HTML">x&nbsp;&nbsp;| O |&nbsp;&nbsp;o - After Dinner<b></option>
    </select>
    </div>
    <div class="col-sm-12 form-group">
    <label for="email"><h4><b>Tests</b></h4></label>
    </div>
    <div class="col-sm-12 form-group"> <select id="choices-multiple-remove-button" placeholder="Doses" multiple>
    
    <option style="background-image:url(Logo.png);" value="N/A">N/A</option>        
    <option style="background-image:url(Logo.png);" value="ECG">ECG<b></option>
    <option style="background-image:url(Logo.png);" value="Blood Sugar">Blood Sugar</option>
    <option style="background-image:url(Logo.png);" value="Daily SPO2 monitor">Daily SPO2 monitor</option>
    <option style="background-image:url(Logo.png);" value="Daily Temperature monitor">Daily Temperature monitor</option>        
    <option style="background-image:url(Logo.png);" value="Daily Pulse Monitor">Daily Pulse Monitor<b></option>
    </select>
    </div>
    <div class="form-group col-sm-12">
                <label for="email"><h4><b>Any Other Instructions:</b></h4></label>
                <textarea class="form-control" id="return2" name='Special_instruction'  rows="3"></textarea>
            </div>

            <div class="form-group col-sm-4">
                <label for="email"><h4><b>Next Recommended Visit:</b></h4></label>
                <input class="form-control" type="date" id="start" name="Next_recommended_Visit" value="" placeholder="Next Recommended Visit">
            </div>

    </div>

<script>
    $(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
       maxItemCount:5,
       searchResultLimit:9,
       renderChoiceLimit:9
     }); 
    
    
});
</script>

            <script>
                      var $value
                      document.getElementById("flexCheckDefault1").value = $value;
                    </script>
            
            <div>
            <input class="btn-wide btn btn-success next action-button col text-center" onclick="value()" type="submit" name="submit"  value="submit" />
            </div>
            <script>
                    var form = document.getElementById("msform");
                    form.addEventListener('submit', function(event) {
                      var Year = new Date().getFullYear().toString().slice(-2);
                      var Month = String(date.getMonth() + 1).padStart(2, '0');

                      function getValue() {
                        let store = document.getElementById("location_code").value;
                        return store;
                      }

                      function myFunction() {
                        let count = Number(localStorage.getItem('count')) || 0;
                        localStorage.setItem('count', count + 1);
                        return count;
                      }
                      let random = getValue() + Month + Year + "000" + myFunction();
                      document.getElementById("reg_no").value = random;
                      alert("Your Family Registration number is = " + random);

                    })
                  </script>
        </div>
        
        
    </section>    

</body>

</html>