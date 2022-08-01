<?php
session_start();
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");

if (isset($_SESSION['dcr'])) {
    $p = $_SESSION['dcr'];
    $q1 = "SELECT * FROM `doctor` WHERE `Doctors_Registration_No`='$p'";
    $e1 = mysqli_query($conn, $q1);
    if (mysqli_num_rows($e1) > 0) {

        $res = mysqli_fetch_row($e1);
        $nm = $res[0];
    }
}

$q3 = "SELECT * FROM `medical_consultant` where `Assigned_doctor` = '$nm'";
$pat_name = mysqli_query($conn, $q3);
$_SESSION['doc_name'] = $res[0];
$_SESSION['doc_id'] = $res[1];
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
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <a href="Volunteer/index.php"><i class='bx bx-laptop'></i></a>
            <div class="logo_name">Telemedicine-Project</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <!-- <ul class="nav-list">
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
        </ul> -->
                     <li class="profile">
                <a href="TELMEDLogin.php"><i class="bx bx-log-out" id="log_out"></i> </a>
            </li> 
    </div>
    <section class="home-section">
        <div class="text">Doctor Dashboard </div>
        <div style="padding: 1px 10px; background-color: lightgreen">
            <h2>Welcome <?php echo "$nm  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp SSF-Id:$res[1]"; ?></h2>
        </div>
        <div style="float:right; margin-right: 20px;" class="calendar"></div>
        <div><br>
            <div class="row">
                <div class="column">
                    <?php $num = 0; ?>
                    <?php while ($r = mysqli_fetch_array($pat_name)) {
                        $num++;
                    ?>

                    <?php } ?>
                    <table style="margin-left:3rem;">
                        <h1 style="text-align: center;margin-left:20rem;margin-bottom:2rem;"><b>Today's Event</b></h1><br>
                        <tr>
                            <th style="font-size: 2rem;padding-left:6rem">Today's Date</th>
                            <th style="font-size: 2rem;padding-left:6rem">Clock</th>
                            <th style="font-size: 2rem;">No. of Patients</th>
                            <!--<th style="padding-left:8rem;font-size: 2rem;">Location</th>-->
                            <th style="padding-left:8rem;font-size: 2rem;">Action</th>
                        </tr>
                        <tr>
                            <td><input style="border:none;outline:none; font-size: 2rem;padding-left:6rem;" type="text" id="date" value="" readonly="readonly"></td>
                            <td><input style="border:none;outline:none; font-size: 2rem; padding-left:6rem;" type="text" id="time" value="" readonly="readonly"></td>
                            <td style="padding-left:2rem; font-size: 2rem;"><?php echo $num; ?></td>
                            <!--<td style="padding-left:8rem; font-size: 2rem;"> Chandpur</td>-->
                            <td style="padding-left:8rem;"><a href="view_dash2.php"><button type="submit" style="width: 7rem; text-align:center; font-size:1.2rem; height:3rem" class="btn btn-success btn-sm">View</td></a>
                        </tr>
                    </table>
                                      <a style="color: white;" href="date_pat.php"><button type="button" id="but1" style="height:20px;padding-bottom:2rem;width:100px;margin-top:2rem;margin-left: 50rem;" class="btn-wide btn btn-success">Back</button></a>   
                </div>
                <script>
                    var date = new Date();
                    var year = date.getFullYear();
                    var month = String(date.getMonth() + 1).padStart(2, '0');
                    var todayDate = String(date.getDate()).padStart(2, '0');
                    var datePattern = year + '-' + month + '-' + todayDate;
                    document.getElementById("date").value = datePattern;
                </script>
    </section>

    <script>
    function autoTime()
    {
        var today = new Date();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        document.getElementById('time').value = time;
    }
    setInterval(autoTime, 1000);
    </script>


</body>

</html>