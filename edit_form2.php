<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $databasename = "doc_patient";
$conn=mysqli_connect("localhost","arp7029", "790Aa@790","doc_patient");

// CREATE CONNECTION

extract($_REQUEST);
//
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query="select * from patient_registration where `per_reg`=$x"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);

// $singleRow = mysqli_fetch_row($result);

$fetch=mysqli_fetch_row($result);
error_reporting(0);

$date = date('d-m-y');

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard </title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- Font Awesome CDN Link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a href="doc_form.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="p_reg.php">
        <i class='bx bxs-user-plus'></i>
         <span class="links_name">Patient Registration</span>
       </a>
       <span class="tooltip">Patient Registration</span>
     </li>
	 
	 <li>
       <a href="fam_reg.php">
        <i class="fa fa-group"></i>
         <span class="links_name">Family Registration</span>
       </a>
       <span class="tooltip">Family Registration</span>
     </li>
     
     <li>
       <a href="d_reg.php">
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
       <a href="m_bank.php">
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
  <h2 style="margin: 0px 20px";>Basic Information for patient</h2>

  
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            
            <form>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label class="form-label" for="firstName"> Patient Name</label>
                    
                    <input  type="submit" id="firstName" class="form-control form-control-lg" value="<?php echo "$fetch[3]" ?>" />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label type="text" class="form-label" value= "<?php echo $date ?>" for="lastName">Date</label>
                    <input type="submit" id="lastName" class="form-control form-control-lg" value= "<?php echo $date ?>" />
                    
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <label for="text" class="form-label">Date of Birth</label>
                    <input type="submit" class="form-control form-control-lg" id="birthdayDate" value="<?php echo "$fetch[7]" ?>" />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <input type="submit"  name = "text" id="Gndr" class="form-control form-control-lg" value="<?php echo "$fetch[6]" ?>" />                
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline" >
                  <label class="form-label" for="emailAddress">B/P</label>
                      <input type="submit" id="emailAddress" class="form-control form-control-lg" value="<?php echo "$fetch[15]" ?> / <?php echo "$fetch[16]" ?>"   />
                      
                  </div>
                  
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    
                    <input type="submit" id="phoneNumber" class="form-control form-control-lg" value="<?php echo "$fetch[4]" ?>"/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="text-center" style="padding: 20px;">
                <input class="btn btn-success btn-lg" type="submit" value="Create Prescription" />
                <input class="btn btn-danger btn-lg" type="submit" value="CANCEL" /> 
                
              </div>
      </div>
    </div>
  </div>
  </section>
  <script src="script.js">
  </script>
</body>
</html>
