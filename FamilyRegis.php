<!-- <?php session_start();
      ?> -->
<?php
  $conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
  $q1 = "SELECT * FROM `family_registration`";
  $result = mysqli_query($conn, $q1) or die('Invalid query: ' . mysql_error());
  $row_first = mysqli_fetch_array($result);
  mysqli_data_seek($result , (mysqli_num_rows($result)-1));
  $row_last =  mysqli_fetch_array($result);
?>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="shortcut icon" href="Logo.png" type="image/x-icon"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Family Registration</title>
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
      <style>
      body {
        background: black;
        background-size: 400% 400%;
        height: 175rem;
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
        <!-- <form action="family_reg_conn.php" method="post"> -->
        <div class="container-fluid" id="grad1">
          <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
              <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h1><img src="Logo.png" height="100px" width="100px"><b>Family Registration Info</b><img src="Logo.png" height="100px" width="100px"></h1>

                <p></p>
                <div class="row">
                  <div class="col-md-12 mx-0">
                    <form id="msform" action="card.php" method="post">
                      <!-- progressbar -->
      
                      <!-- fieldsets -->
                      <fieldset>
                        <div class="form-card">
                          <h2 class="fs-title">Basic Info</h2>    
                          <label>मुख्य वेतन अर्जक/ Chief Wage Earner (Name)</label>  <span class="fa fa-star checked"  style="color:red;"></span>
                          <input type="text" name="Chief_Earner_Name"  required />
                          <label>Date</label>  <span class="fa fa-star checked"  style="color:red;"></span>
                          <input type="date" name="Date_of_Registration" placeholder="date" id="date" readonly="readonly" />
                          <script>
                            var date = new Date();
                            var year = date.getFullYear();
                            var month = String(date.getMonth() + 1).padStart(2, '0');
                            var todayDate = String(date.getDate()).padStart(2, '0');
                            var datePattern = year + '-' + month + '-' + todayDate;
                            document.getElementById("date").value = datePattern;
                          </script>
                          <label>Mobile No</label>  <span class="fa fa-star checked"  style="color:red;"></span>
                          <input type="text " name="Mobile_No" id="mobilenumber"  required />
                          <span id="messages" style="color: red;"></span><br><br>
                          <label>पता (Address)</label>  <span class="fa fa-star checked"  style="color:red;"></span>
                          <input type="text" name="Address"  required />
                          <br><br>
                          <label>Location Code</label>  <span class="fa fa-star checked"  style="color:red;"></span> <br><br>
                          <select name="Location_Code" onchange="getValue();" id="location_code" class="browser-default custom-select" required>
                            <option selected>Location Code</option>
                            <option value="K">K: Kulburu,</option>
                            <option value="D">D: Dumartoli,</option>
                            <option value="S">S: Kasatoli,</option>
                            <option value="H">H: Khijri,</option>
                            <option value="B">B: Balankel</option>
                            <option value="U">U: Kusumtoli</option>
                            <option value="O">O: Others</option>
      
                          </select>
                          <br><br>
                          <input type="text" name="Family_Registration_No" id="reg_no"  readonly="readonly" />
                          <br><br>
      
      
                          <label>Family members</label>
                          <br>
                          <div class="family">
                          <form>
                          
                            <div class="row">
                              <div class="col">
                                <input type="text" name="fam1" class="form-control" placeholder="Name1">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel1" name="rel1">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="self(खुद)">self(खुद)</option>
                          </select>
                              </div>
                            </div>
                          
                            <div class="row">
                              <div class="col">
                                <input type="text" name="fam2" class="form-control" placeholder="Name2">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel2" name="rel2">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <input type="text" name="fam3" class="form-control" placeholder="Name3">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel3" name="rel3">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <input type="text" name="fam4" class="form-control" placeholder="Name4">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel4" name="rel4">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="col">
                              
                                <input type="text" name="fam5" class="form-control" placeholder="Name5">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel5" name="rel5">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            
                              <div class="row">
                              <div class="col">
                              
                                <input type="text" name="fam6" class="form-control" placeholder="Name6">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel6" name="rel6">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            
                              <div class="row">
                              <div class="col">
                              
                                <input type="text" name="fam7" class="form-control" placeholder="Name7">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel7" name="rel7">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            
                              <div class="row">
                              <div class="col">
                              
                                <input type="text" name="fam8" class="form-control" placeholder="Name8">
                              </div>
                              <div class="col">
                              <select class="browser-default custom-select" id="rel8" name="rel8">
                            <option selected>Realtionship (रिश्ता)</option>
                            <option value="पति या पत्नी">पति या पत्नी</option>
                            <option value="बेटा">बेटा</option>
                            <option value="बेटी">बेटी</option>
                            <option value="पिता"> पिता </option>
                            <option value="माता">माता</option>
                            <option value="बहू">बहू</option>
                            <option value="भइया">भइया</option>
                            <option value="बहन">बहन</option>
                            <option value="दादा">दादा</option>
                            <option value="दादी मा">दादी मा</option>
                            <option value="पोता">पोता</option>
                            <option value="पोती">पोती</option>
                            <option value="अन्य">अन्य</option>
                          </select>
                              </div>
                            </div>
                            <!-- <div class="row">
                              <div class="col">
                                <input type="text" name="fam5" class="form-control" placeholder="Name">
                              </div>
                              <div class="col">
                                <input type="text" name="rel5" class="form-control" placeholder="Relationship">
                              </div>
                            </div> -->
      
                        
                          </div>
      
                          <br><br>
                          <label>अतिरिक्त सदस्य/ Additional members</label>
                          <form>
                          
                            <div class="row">
                              <div class="col">
                                <input type="text" id="add1" name="add1" class="form-control" placeholder="Name1">
                              </div>
                              <div class="col">
                              <!--<input type="text" name="add_rel1" class="form-control" placeholder="Relationship1">-->
      
                          </select>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <input type="text" id="add2" name="add2" class="form-control" placeholder="Name2">
                              </div>
                              <div class="col">
                              <!--<input type="text" name="add_rel2" class="form-control" placeholder="Relationship2">-->
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <input type="text" id="add3" name="add3" class="form-control" placeholder="Name3">
                              </div>
                              <div class="col">
                              <!--<input type="text" name="add_rel3" class="form-control" placeholder="Relationship3">-->
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                              
                                <input type="text" id="add4" name="add4" class="form-control" placeholder="Name4">
                              </div>
                              <div class="col">
                              <!--  <input type="text" name="add_rel4" class="form-control" placeholder="Relationship4">-->
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                              
                                <input type="text" id="add5" name="add5" class="form-control" placeholder="Name5">
                              </div>
                              <div class="col">
                              <!--  <input type="text" name="add_rel5" class="form-control" placeholder="Relationship5">-->
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                              
                                <input type="text" id="add6" name="add6" class="form-control" placeholder="Name6">
                              </div> 
                              <div class="col">
                              <!--  <input type="text" name="add_rel6" class="form-control" placeholder="Relationship6">-->
                              </div>
                            </div>
                            <!-- <div class="row">
                              <div class="col">
                                <input type="text" name="fam5" class="form-control" placeholder="Name">
                              </div>
                              <div class="col">
                                <input type="text" name="rel5" class="form-control" placeholder="Relationship">
                              </div>
                            </div> -->
      
                          </form>
                          <script>
                            var $value
                            document.getElementById("flexCheckDefault1").value = $value;
                          </script>
                          <br> <br>
       
                          <input type="number" id="amount" name="amount" value="" readonly="readonly" />
      
                          <label>Education</label>  <span class="fa fa-star checked"  style="color:red;"></span>  <br>
                          <select class="browser-default custom-select" id="education" name="Education">
                            <option selected>Education</option>
                            <option value="कोई औपचारिक शिक्षा नहीं">कोई औपचारिक शिक्षा नहीं</option>
                            <option value="कक्षा 5 तक">कक्षा 5 तक</option>
                            <option value="कक्षा 6-10, उत्तीर्ण नहीं">कक्षा 6-10, उत्तीर्ण नहीं</option>
                            <option value="10 . उत्तीर्ण">10 . उत्तीर्ण</option>
                            <option value="कक्षा 11-12, उत्तीर्ण नहीं">कक्षा 11-12, उत्तीर्ण नहीं</option>
                            <option value="12 उत्तीर्ण">12 उत्तीर्ण</option>
                            <option value="नामांकित स्नातक">नामांकित स्नातक</option>
                            <option value="ग्रेजुएट">ग्रेजुएट</option>
                            <option value="नामांकित स्नातकोत्तर">नामांकित स्नातकोत्तर</option>
                            <option value="पोस्ट ग्रेजुएट">पोस्ट ग्रेजुएट</option>
                            <option value="अन्य">अन्य</option>
      
                          </select>
                          <br><br>
                          <label>Monthly Family Income</label>  <span class="fa fa-star checked"  style="color:red;"></span> <br> 
                          <select class="browser-default custom-select" id="income" name="Monthly_Family_Income">
                            <option selected>Monthly Family Income</option>
                            <option value="Below 2000">Below 2000</option>
                            <option value="Rs.2,000-5000">Rs.2,000-5000</option>
                            <option value="Rs.5000-10,000">Rs.5000-10,000</option>
                            <option value="Above Rs.10,000">Above Rs.10,000</option>
      
                          </select>
                          <br><br>
                          <label>Marital status</label>  <span class="fa fa-star checked"  style="color:red;"></span>
                          <select class="browser-default custom-select" id="marital-status" name="Marital_status">
                            <option selected>Marital status</option>
                            <option value="Not Married/ अविवाहित">Not Married/ अविवाहित</option>
                            <option value="विवाहित/ Married">विवाहित/ Married</option>
                            <option value="विधवा / अलग (Widow/ Separated)">विधवा / अलग (Widow/ Separated)</option>
                          </select>
                        </div>
                        <input type="submit" name="submit" class="next action-button" value="submit" />
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
                            //   let count = Number(localStorage.getItem('count')) || 0;
                            //   localStorage.setItem('count', count + 1);
                            //   return count;
                            
                            let count = <?php echo $row_last[0] ?>;
                            count++;
                            return count;
                            }
                            if (myFunction() <= 9)
                            {
                               let random = getValue() + Month + Year + "000" + myFunction();
                               document.getElementById("reg_no").value = random;
                               alert("Your Family Registration number is = " + random);
                            }
                            else if ((myFunction() > 9) && (myFunction() <= 99))
                            {
                               let random = getValue() + Month + Year + "00" + myFunction();
                               document.getElementById("reg_no").value = random;
                               alert("Your Family Registration number is = " + random);
                            }
                            else if ((myFunction() > 99) && (myFunction() <= 999))
                            {
                               let random = getValue() + Month + Year + "0" + myFunction();
                               document.getElementById("reg_no").value = random;
                               alert("Your Family Registration number is = " + random);
                            }
                            else
                            {
                               let random = getValue() + Month + Year + myFunction();
                               document.getElementById("reg_no").value = random;
                               alert("Your Family Registration number is = " + random);
                            }
                          })
                        </script>
                      </fieldset>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
      </body>
      <script>
        var form = document.getElementById("msform");
        form.addEventListener('submit', function(event) {
          var amount = 50;
          if (document.getElementById("add1").value != '') {
            amount = amount + 10;
          }
          if (document.getElementById("add2").value != "") {
            amount = amount + 10;
          }
          if (document.getElementById("add3").value != "") {
            amount = amount + 10;
          }
          if (document.getElementById("add4").value != "") {
            amount = amount + 10;
          }
          if (document.getElementById("add5").value != "") {
            amount = amount + 10;
          }
          if (document.getElementById("add6").value != "") {
            amount = amount + 10;
          }
          document.getElementById("amount").value = amount;
          alert("Your Monthly Subscription Fee is = " + amount);
        })
      </script>
      
      </html>