


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="Logo.png" alt="">
                                        </a>

                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        PUT THE NAME OF HW/DOCTOR
                                    </div>
                                    <div class="widget-subheading">
                                        Admin/Doctor
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
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i> Profile
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i> Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon">
                                                </i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-icons.html">
                                            <i class="metismenu-icon">
                                                </i>Add Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-badges-labels.html">
                                            <i class="metismenu-icon">
                                                </i>View Admin
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="app-sidebar__heading">APPOINTMENT</li>
                            <li>
                                <a href="forms-controls.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                        </i>New Appointment
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>View Pending Appointments
                                </a>
                            </li>
                            <li class="app-sidebar__heading">DOCTOR</li>
                            <li>
                                <a href="forms-controls.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                        </i>Add Doctor
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>View Doctor
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Patient</li>
                            <li>
                                <a href="forms-controls.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                        </i>Add Patient
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>View Patiet Record
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <h3 style="font-family: Arial;">Doctor Registration Form</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="">
                                <div class="col">
                                    <div class="minput">
                                        <span class="bar"></span>
                                        <label><b>Full Name</b></label>
                                        <input style="width: 100%; background-color: beige;" type="text" id="fname" dir="auto" required>
                                    </div>
                                    <div class="minput">
                                        <span class="bar"></span>
                                        <label><b> Address</b></label>
                                        <input style="width: 100%; background-color: beige;" type="text" id="fname" dir="auto" required>
                                    </div>
                                    <div class="minput">
                                        <span class="bar"></span>
                                        <label><b>Mobile No.</b></label>
                                        <input style="width: 100%; background-color: beige;" type="text" id="fname" dir="auto" required>
                                    </div>
                                    <div class="minput">
                                        <span class="bar"></span>
                                        <label><b> SSF ID</b></label>
                                        <input style="width: 100%; background-color: beige;" type="text" id="fname" dir="auto" required>
                                    </div>
                                    <div class="minput">
                                        <span class="bar"></span>
                                        <label><b>Doctor Registration Number</b></label>
                                        <input style="width: 100%; background-color: beige;" type="text" id="fname" dir="auto" required>
                                    </div>
                                    <div class="minput">
                                        <span class="bar"></span>
                                        <label><b>Age</b></label>
                                        <input style="width: 100%; background-color: beige;" type="number" id="fname" dir="auto" required>
                                    </div><br>
                                    <div style="width: 100%; background-color: beige;" class="control-group">
                                        <span class="sex">Sex :</span>
                                        <label class="control control--radio">Male
                                            <input type="radio" name="radio" id="male" />
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--radio">Female
                                            <input type="radio" name="radio" id="femelle" />
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div><br>

                                    <label class="form-check-label" for="flexCheckDefault">
                                        <div class="row">
                                            <h3 style="font-family: Arial;">Availibility of Doctor:</h3>
                                        </div>
                                        <div style= "font-size: 23px;
                                        padding: 3px 4px;
                                        display: block;
                                        width: 100%;
                                        border: none;
                                        font-family: 'Tahoma', sans-serif;
                                        letter-spacing: 1.5px;
                                        color: #000000;
                                        -webkit-border-radius: 4px 0 0 4px;
                                        -moz-border-radius: 2px 0 0 4px;
                                        border-radius: 2px 0 0 2px;
                                        border-bottom: 1px solid #dadada;"class="container-fluid">
                                            <table  style="text-align: center; background-color: azure;">
                                                <tr>
                                                    <td>
                                                    <td> Monday</td>
                                                    <td> Tuesday</td>
                                                    <td> Wednesday</td>
                                                    <td> Thursday</td>
                                                    <td> Friday</td>
                                                    <td> Saturday</td>
                                                    <td> Sunday</td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <input name="check[]" type="text" value="8am - 9am" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="9am-10am" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="10am-11am" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="11am-12pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="12pm-1pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="1pm-2pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="2pm-3pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="3pm-4pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="4pm-5pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="5pm-6pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="6pm-7pm" readonly="readonly"></td>
                                                    <td> <input name="check[]" value="mon" type="checkbox"></td>
                                                    <td> <input name="check[]" value="tue" type="checkbox"></td>
                                                    <td> <input name="check[]" value="wed" type="checkbox"></td>
                                                    <td> <input name="check[]" value="thu" type="checkbox"></td>
                                                    <td> <input name="check[]" value="fri" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sat" type="checkbox"></td>
                                                    <td> <input name="check[]" value="sun" type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td><input name="check[]" type="text" value="7pm-8pm" readonly="readonly"></td>
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
                                    <div class="d-block text-center card-footer">
                                        <button class="btn-wide btn btn-success">Confirm</button>
                                    </div>
                                </div>
                            </form>
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