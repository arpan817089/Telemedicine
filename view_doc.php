<?php
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
if (isset($_POST['submit'])) {
    $doc_reg = $_POST['doc_reg'];
    setcookie('doc_reg', $doc_reg);
}

$doc_reg1 = $_COOKIE['doc_reg'];
setcookie('doc_reg1', $doc_reg1);
$query = "SELECT * FROM `doctor` WHERE `Doctors_Registration_No`LIKE '$doc_reg1'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style1.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Doctor</title>
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
            <style>
                body {
                    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
                    background-size: 400% 400%;
                    animation: gradient 8s ease infinite;
                    height: 100rem;
                }

                @keyframes gradient {
                    0% {
                        background-position: 0% 50%;
                    }

                    50% {
                        background-position: 100% 50%;
                    }

                    100% {
                        background-position: 0% 50%;
                    }
                }
            </style>
            <div class="container-fluid" id="grad1">
                <div class="row justify-content-center mt-0">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h1><strong>DOCTOR REGISTRATION</strong></h1>
                            <img src="Logo.png" style="margin-left:22rem;" height="100px" width="100px">
                            <p></p>
                            <div class="row">
                                <div class="col-md-12 mx-0">
                                    <form id="msform" action="pre_doc_view.php" method="post">
                                        <!-- progressbar -->

                                        <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title">Basic Info</h2>
                                                <label for="doc_name">Doctor Name</label>
                                                <input type="text" value="<?php echo $fetch[0]; ?>" readonly="readonly" name="doc_name" placeholder="Doctor Name" readonly = "readonly" />
                                                <label for="SSF_ID">SSF ID</label>
                                                <input type="text" value="<?php echo $fetch[1]; ?>" name="SSF_ID" placeholder="SSF ID" readonly = "readonly" />
                                                <label for="Doctors_Registration_No">Doctors Registration No</label>
                                                <input type="text" value="<?php echo $fetch[2]; ?>" name="Doctors_Registration_No" placeholder="Doctors Registration No" readonly = "readonly" />
                                                <label for="Gender">Gender</label>
                                                <input type="text" value="<?php echo $fetch[3]; ?>" name="Gender" placeholder="Gender" readonly = "readonly" />
                                                <br><br>
                                                <label for="Speciality">Speciality</label>
                                                <input type="text" value="<?php echo $fetch[4]; ?>" name="Speciality" placeholder="Speciality" readonly = "readonly" />
                                                <br><br>
                                                <label for="Address">Address</label>
                                                <input type="text" name="Address" value="<?php echo $fetch[5]; ?>" placeholder="Address" readonly = "readonly" />
                                                <label for="Mobile No">Mobile No</label>
                                                <input type="text" name="Mobile" value="<?php echo $fetch[6]; ?>" placeholder="Mobile No" readonly = "readonly" />
                                                <label for="Speciality">Availability</label>
                                                <input type="text" name="Availability" value="<?php echo $fetch[7]; ?>" placeholder="Availability" />



                                            </div>
                                            <input type="submit" name="Go Back" class="next action-button" value= "Go Back" />
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