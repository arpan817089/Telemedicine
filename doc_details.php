<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Registration</title>
</head>

<body>
    <script>
        function myfun() {
            var a = document.getElementById("mobilenumber").value;
            if (a == "") {
                document.getElementById("messages").innerHTML = "Fill Mobile Number";
                return false;

            }
            if (a.length < 10) {
                document.getElementById("messages").innerHTML = "mobile number not less than 10";
                return false;
            }
            if (a.length > 10) {
                document.getElementById("messages").innerHTML = "mobile number not more than 10";
                return false;
            }
            if ((a.charAt(0) != 9) && (a.charAt(0) != 8) && (a.charAt(0) != 7) && (a.charAt(0) != 6)) {
                document.getElementById("messages").innerHTML = "mobile number not valid";
                return false;
            }


        }
    </script>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!-- <a class="navbar-brand" href="#"><img src="SSFLogo.png"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h1><strong>DOCTOR REGISTRATION</strong></h1>
                    <p></p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action="doc_reg_conn.php" method="post">
                                <!-- progressbar -->

                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Basic Info</h2>
                                        <input type="text" name="doc_name" placeholder="Doctor Name" />
                                        <input type="text" name="SSF_ID" placeholder="SSF ID" />
                                        <input type="text" name="Doctors_Registration_No" placeholder="Doctors Registration No " />
                                        <select name="Gender" class="browser-default custom-select">
                                            <option selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
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

</body>
<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
</script>

</html>