<?php
session_start();

$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
$num_of_pat = "SELECT * FROM `patient_registration`";
$num_of_doc = "SELECT * FROM `doctor`";
$num_of_hw = "SELECT * FROM `medical_consultant`";
$pat = mysqli_query($conn, $num_of_pat);
$doc = mysqli_query($conn, $num_of_doc);
$hw = mysqli_query($conn, $num_of_hw);
$from = $_GET['from'];
$to = $_GET['to'];
$q2 = "SELECT * FROM `medical_consultant` where `Consultation_Date`BETWEEN '$from' and '$to'";
$pat_name = mysqli_query($conn, $q2);
?>

<?php $num = 0; ?>
<?php while ($r = mysqli_fetch_array($pat)) {
    $num++;
?>

<?php } ?>


<?php $num_doc = 0; ?>
<?php while ($r = mysqli_fetch_array($doc)) {
    $num_doc++;
?>

<?php } ?>


<?php $num_hw = 0; ?>
<?php while ($r = mysqli_fetch_array($hw)) {
    $num_hw++;
?>

<?php } ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Health Worker Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        .button2 {background-color: #46C646;
        border-radius: 50px;}
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo"><img style="height:50px;width:50px;" src="Logo.png" alt=""></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <!-- <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div> -->
                        <button class="close"></button>
                    </div>

                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <!--<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">-->
                                        <!--    <img width="42" class="rounded-circle" src="Logo.png" alt="">-->
                                        <!--</a>-->
                                    <!--<div class="widget-content-right header-user-info ml-3">-->
                                    <button style="font-size:20px;color:red; border-radius:10px;" type="button" class="btn-shadow p-1 btn  btn-sm show-toastr-example">
                                    <a class="fa fa-sign-out" style="font-size:45px;color:red;" href="TELMEDLogin.php"></a>
                                    </button>
                                <!--</div>-->

                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-subheading">
                                        <b>Health Worker</b>
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button style="font-size:20px;color:red; border-radius:10px;" type="button" class="btn-shadow p-1 btn  btn-sm show-toastr-example">
                                        <a class="fa fa-sign-out" style="font-size:45px;color:red;" href="TELMEDlogin.php"></a>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui-theme-settings">
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboard</li>

                            <li class="app-sidebar__heading">APPOINTMENT</li>

                            <li>
                                <a href="FamilyRegis.php">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Family Registration
                                </a>
                            </li>
                            <li>
                                <a href="pre_pat_regis.php">
                                <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Patients Registration
                                </a>
                            </li>
                            <!-- <li class="app-sidebar__heading">Patient</li> -->
                            <li>
                                <a href="pre_vol_regis.php">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Medical Consultation
                                </a>
                            </li>
                            <li>
                                <a href="DocRegis.php">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Doctor Registration
                                </a>
                            </li>
                            <li>
                                <a href="search_family.php">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Search Family Card
                                </a>
                            </li>
                            <li>
                                <a href="pres_search.php">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Search Prescription
                                </a>
                            </li>
                            
                            <!-- <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>
                                </a>
                            </li> -->

                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Issue Medicine
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-md-6 col-xl-5">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Patient</div>
                                        <div class="widget-subheading">SSF Total Patient</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><a href="total_pat.php" style="color:white;cursor:pointer;"><?php echo $num; ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-xl-6">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Doctor</div>
                                        <div class="widget-subheading">SSF Doctor</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><a href="total_doc.php" style="color:white;cursor:pointer;"><?php echo $num_doc; ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Health Worker</div>
                                        <div class="widget-subheading">SSF Health Worker</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><a href="" style="color:white;cursor:pointer;"><?php echo $num_hw ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <form method="get">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Todays Appointment
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <label style="margin-top: 10px;margin-left:250px;">From</label>
                                                <pre>  </pre><input type="date" name="from" id="from">
                                                <pre>  </pre><label style="margin-top: 10px;"> To</label>
                                                <pre>  </pre> <input type="date" name="to" id="to">
                                                <pre>  </pre><input type="submit" style="cursor: pointer;color:white;background-color: green;border:none;border-radius:5px;width:5rem" value="Submit">

                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                    <?php $num = 0; ?>
                    <?php while ($r = mysqli_fetch_array($pat_name)) {
                        $num++;
                    ?>
                        <tr>
                            <th class="text-center">Sl. No.</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Appointed Doctor</th>
                            <th class="text-center">Appointed Date</th>
                            <th class="text-center">Appointed Time</th>
                            <th class="text-center">Prescription</th>
                            <th class="text-center">Video Call</th>
                            <!-- <th class="text-center">Status</th>
                            <th class="text-center">Actions</th> -->
                        </tr>

                </thead>
                <tbody>
                    <tr>
                        <td class="text-center text-muted">#<?php echo $num; ?></td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading text-center"><?php echo $r['Name']; ?></div>
                                        <div class="widget-subheading opacity-7 text-center"><?php echo $r['Patient_Registration_Number'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"><?php echo $r['Assigned_Doctor']; ?></td>
                        <td class="text-center"><?php echo $r['Consultation_Date']; ?></td>
                        <td class="text-center"><?php echo $r['Consultation_Time']; ?></td>
                        <td class="text-center"><a href = "PRESCRIPTION2.php?x=<?php echo $r['Name']; ?>"><img src="pdf.png" width = 50px height = 50px></a></td>
                        <td><button type="button" class="button button2" id="but1" style="margin-left:40px;height:40px;width:150px;background-color:#03a9f4;" class="btn-wide btn btn-success"><a style="color: white;text-center;text-decoration:none;" href="video_calling1.php?x=<?php echo $r['Name']; ?>" target="_blank">Start Video Calling</a></button></td>
                        <!--<td><button type="button" class="button button2" id="but1" style="margin-left:40px;height:40px;width:150px;background-color:#03a9f4;" class="btn-wide btn btn-success"><a style="color: white;text-center;text-decoration:none;" href="https://us05web.zoom.us/j/6578553966?pwd=Wm9pV1VGa3dPRWRZZWVvUGpHYmF3UT09" target="_blank">Start Video Calling</a></button></td>-->
                    </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>
    </div>
    </div>
    </div>

    </div>

    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
    </div>
    <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
</body>

</html>