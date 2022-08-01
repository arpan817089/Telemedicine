<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-laptop' ></i>
        <div class="logo_name">Telemedicine-Project</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
   
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="https://docs.google.com/forms/d/150Ov8QjR-eg4kg0hZTf1ojQ6TE9F4eTQR-_pf0FScuQ/edit?ts=628d9365 " target="_blank">
        <i class='bx bxs-user-plus'></i>
         <span class="links_name">Patient Registration</span>
       </a>
       <span class="tooltip">Patient Registration</span>
     </li>
     
     <li>
       <a href="https://script.google.com/macros/s/AKfycbyH1y10KjLWuvowOcnxWI-wDzP6OVKUmASNDdleQDoK7z71iH-Rc_wiqrrNr7m17bqJHA/exec" target="_blank">
        <i class='bx bxs-analyse'></i>
         <span class="links_name">Patient Problem</span>
       </a>
       <span class="tooltip">Patient Problem</span>
     </li>
     <li>
       <a href="#">
        <i class='bx bxs-message-alt-add'></i>
         <span class="links_name">Create Prescription</span>
       </a>
       <span class="tooltip">Create Prescription</span>
     </li>
     <li>
       <a href="#">
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
  </section>

  <script src="script.js"></script>

</body>
</html>
