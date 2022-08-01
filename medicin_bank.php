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
    <title>Medicine Bank</title>
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
            <a class="navbar-brand" href="#"><img src="SSFLogo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-right">
                    <li class="nav-item">
                        <a class="nav-link" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Medicine Bank</strong></h2>
                    <small>List and current stock of medicines</small>
                    <p></p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" action ="medicine_bank_conn.php" method = "post">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Medicine Bank</strong></li>
                                    <!-- <li id="confirm"><strong>Finish</strong></li> -->
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Medicine Bank</h2>
                                        <input type="text" name="medicine_name" placeholder="Medicine Name" />
                                        <input type="text" name="batch_no" placeholder="Batch No" />
                                        <label class="form-check-label" for="flexCheckDefault">Expiry Date</label>
                                        <input type="date" name="expiry_date" placeholder="Expiry Date" />
                                        <select name = "pack_type" class="browser-default custom-select">
                                            <option selected>Pack Type</option>
                                            <option value="Strips">Strips</option>
                                            <option value="Ampule">Ampule</option>
                                            <option value="Bottle">Bottle</option>
                                            <option value="Loose">Loose</option>
                                        </select>
                                        <br><br>
                                        <select name = "sell_unit" class="browser-default custom-select">
                                            <option selected>Sell Unit</option>
                                            <option value="Strip">Strip</option>
                                            <option value="Bottle">Bottle</option>
                                            <option value="Ampule">Ampule</option>
                                            <option value="Loose">Loose</option>
                                        </select>
                                        <br><br>
                                        <input type="text" name="current_stock" placeholder="Current Stock" />
                                        <input type="text" name="reorder_level" placeholder="Reorder Level" />
                                    </div>
                                    <input type="submit" name="submit" class="next action-button" value="Submit" />
                                </fieldset>
                                <!-- <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You Have Successfully Signed Up</h5>
                                                <a href="FamilyRegis.html">
                                                    <h5>Back to Fill Another Form</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset> -->


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- <script>
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
</script> -->

</html>