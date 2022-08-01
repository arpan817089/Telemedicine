<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "doc_patient";
$conn=mysqli_connect("localhost","arp7029", "790Aa@790","doc_patient");

// CREATE CONNECTION
$query="select * from personal_registration_info"; // Fetch all the data from the table customers
$result=mysqli_query($conn,$query);
// $singleRow = mysqli_fetch_row($result);

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title> Dashboard </title>
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
  <h2 style=>Patient Details</h2>
  <div class="container-fluid" style="height: 700px; width: 700px;">
        <div class="row">
            <div class="col-lg-12">
            
                <form>
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <div>
                        <h2>Edit Information</h2>
                    </div>
                    <!-- Text input -->

                    
                    
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example3">Patient Name</label>
                    </div>
                    

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" />
                        <label class="form-label" for="form6Example4">Patient Disease</label>
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="form6Example6" class="form-control" />
                        <label class="form-label" for="form6Example6">Age</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                        <label class="form-label" for="form6Example7">Prescription</label>
                    </div>

                    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-default btn-block mb-4"><a href= "doc_form.php">Save Changes</button></a>
                </form>
            </div>
        </div>
    </div>
        
	  

	  
	  
	  
  </section>

  <script src="script.js">
  </script>
 <script>
 
 
 </script>

</body>
</html>
