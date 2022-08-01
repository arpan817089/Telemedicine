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
	<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <a href="Volunteer/index.php"><i class='bx bx-laptop' ></i></a>
        <div class="logo_name">Telemedicine-Project</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
   
      <li >
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="PatRegis.php">
        <i class='bx bxs-user-plus'></i>
         <span class="links_name">Patient Registration</span>
       </a>
       <span class="tooltip">Patient Registration</span>
     </li>
	 
	 <li>
       <a href="FamilyRegis.php">
        <i class="fa fa-group"></i>
         <span class="links_name">Family Registration</span>
       </a>
       <span class="tooltip">Family Registration</span>
     </li>
     
     <li>
       <a href="DocRegis.php">
        <i class='fa fa-user-md'></i>
         <span class="links_name">Doctor Registration</span>
       </a>
       <span class="tooltip">Doctor Registration</span>
     </li>
     <li>
       <a href="pres.php">
        <i class='bx bxs-message-alt-add'></i>
         <span class="links_name">Create Prescription</span>
       </a>
       <span class="tooltip">Create Prescription</span>
     </li>
	 
	 <li>
       <a href="m_bank.php">
        <i class='fa fa-medkit' ></i>
         <span class="links_name">Medicine Bank</span>
       </a>
       <span class="tooltip">Medicine Bank</span>
     </li>
	 
	 <li>
       <a href="medicin_bank.php">
        <i class='bx bx-history' ></i>
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
      <div class="text">Dashboard</div>
	  
	  <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>Medicine Bank</strong></h2>
                    <small>List and current stock of medicines</small>
                    <p></p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" method="post">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Medicine Bank</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Medicine Bank</h2>
                                        <input type="text" name="med_name" placeholder="Medicine Name" />
                                        <input type="text" name="b_no" placeholder="Batch No" />
                                        <label class="form-check-label" for="flexCheckDefault">Expiry Date</label>
                                        <input type="date" name="date1" placeholder="Expiry Date" />
                                        <select class="browser-default custom-select" name="p_type">
                                            <option selected>Pack Type</option>
                                            <option value="1">Strips</option>
                                            <option value="2">Ampule</option>
                                            <option value="3">Bottle</option>
                                            <option value="4">Loose</option>
                                            </select>
                                        <br><br>
                                        <select class="browser-default custom-select" name="s_unit">
                                            <option selected>Sell Unit</option>
                                            <option value="1">Strip</option>
                                            <option value="2">Bottle</option>
                                            <option value="3">Ampule</option>
                                            <option value="4">Loose</option>
                                        </select>
                                        <br><br>
                                        <input type="text" name="c_stock" placeholder="Current Stock" />
                                        <input type="text" name="r_level" placeholder="Reorder Level" />





                                    </div>
                                    <input type="submit" name="submit" class="next action-button" value="submit" />
                                </fieldset>
                                <fieldset>
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
                                </fieldset>


                            </form>
							
							<?php
$conn=mysqli_connect("localhost","root","","tele_medicine");
$med_name;$b_no;$date1;$p_type;$s_unit;$c_stock;$r_level;
if(!isset($_POST["submit"]))
{
	
}
else if($_POST["submit"]=="submit")
{
	
	$med_name=$_POST["med_name"];
	$b_no=$_POST["b_no"];
	$date1=$_POST["date1"];
   	$p_type=$_POST["p_type"];
    $s_unit=$_POST["s_unit"];
	$c_stock=$_POST["c_stock"];
	$r_level=$_POST["r_level"];
	

	$sql="insert into med_bank(med_name, b_no, date1, p_type, s_unit, c_stock, r_level) values ('$med_name', '$b_no', '$date1', '$p_type', '$s_unit', '$c_stock', '$r_level')";
	
	
	mysqli_query($conn,$sql);
	mysqli_close($conn);
echo "<h3> You Have Registered Successfully!</h3>";

}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	  
  </section>

  <script src="script.js"></script>
 

</body>
</html>
