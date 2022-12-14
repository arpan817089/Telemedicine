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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
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
        <a href="#">
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
                    <h2><strong>Medical Consultation Measurements</strong></h2>
                    <p>Measurements needed before medical consultation</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform" method="post">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>Patient Details</strong></li>
                                    <li id="personal"><strong>????????????????????? ????????????????????? ?????? ????????????????????? (Remarks on Physical Examination)</strong></li>
                                    <li id="personal"><strong>????????????????????? ?????? ???????????? ?????? ???????????? (????????????????????? ????????????????????????) Reasons for the present visit (current problems)</strong></li>
                                    <li id="personal"><strong>Consultation</strong></li>

                                </ul>
                                <!-- fieldsets -->

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Patient Details</h2>

                                        <input type="text" name="date1" id="datepicker" placeholder="Date" />
                                        <input type="text" name="p_regno" placeholder="Patient Registration No" />
                                        <input type="text" name="day_cno" placeholder="Day Card Number" />
                                        <input type="text" name="name_pp" placeholder="Name (PP)" />
                                        <input type="text" name="age_pp" placeholder="Age (PP)" />
                                        <select class="browser-default custom-select" name="gender">
                                        <option selected>Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                            
                                        <input type="text" name="weight" placeholder="????????? (Weight) (in kilogram)" />
                                        <input type="text" name="height" placeholder="?????????????????? (Height) (in cm)" />
                                        <input type="text" name="p_rate" placeholder="Pulse Rate" />
                                        <input type="text" name="s_bp" placeholder="??????????????????????????? ????????????????????? (Systolic Blood Pressure)" />
                                        <input type="text" name="d_bp" placeholder="?????????????????????????????? ????????????????????? (Diastolic Blood Pressure)" />
                                        <input type="text" name="temp" placeholder="?????????????????? Temperature (F)" />
                                        <input type="text" name="sp02" placeholder="??????????????? ??? SPO2" />
                                        
                                        <select class="browser-default custom-select" name="bp">
                                        <option selected>Blood Sugar</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                        <option value="3">May be</option>
                                        
                                        <input type="text" name="bp_lvl" placeholder="Blood Sugar level (if advised by Doctor)" />



                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">????????????????????? ????????????????????? ?????? ????????????????????? (Remarks on Physical Examination)</h2>
                                                                                         
                                      </select>
                                        <br><br>

                                        <label>Remarks on Physical Examination</label>
                                        <div class="form-card" name="phy_exam">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedNone">
                                                <label class="custom-control-label" name="one" for="defaultUncheckedNone">????????? ???????????? (None)</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedBluish">
                                                <label class="custom-control-label" name="two" for="defaultUncheckedBluish">???????????? ????????? ?????? ??????????????? ???????????????????????? (Bluish skin discoloration / Cyanosis)</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedJaundice">
                                                <label class="custom-control-label" name="three" for="defaultUncheckedJaundice">?????????????????? (Jaundice / Icterus)</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedPallor">
                                                <label class="custom-control-label" name="four" for="defaultUncheckedPallor">????????? ?????? ????????????????????? (Pallor of the eye)</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedClubbing">
                                                <label class="custom-control-label" name="five" for="defaultUncheckedClubbing">????????? ?????? ??????????????? ???????????? ??????????????? (Clubbing)</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedEdema">
                                                <label class="custom-control-label" name="six" for="defaultUncheckedEdema">???????????? ????????? ?????? ????????? ????????? ???????????? (Edema)</label>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="defaultUncheckedLymphadenopathy">
                                                <label class="custom-control-label" name="seven" for="defaultUncheckedLymphadenopathy">????????? ????????? ?????? ???????????? ????????? ???????????? (Lymphadenopathy)</label>
                                            </div>

                                        </div>

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card" name="reason_p">
                                        <h2 class="fs-title">????????????????????? ?????? ???????????? ?????? ???????????? (????????????????????? ????????????????????????) Reasons for the present visit (current problems)</h2>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedRoutine">
                                            <label class="custom-control-label" name="eight" for="defaultUncheckedRoutine">?????????????????? ????????? ?????? (Routine Check up)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedCheckup">
                                            <label class="custom-control-label" name="nine" for="defaultUncheckedCheckup">?????????????????? ????????? ?????? (Follow up Check up)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedFever">
                                            <label class="custom-control-label" name="ten" for="defaultUncheckedFever">??????????????? (Fever)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedTrouble">
                                            <label class="custom-control-label" name="eleven" for="defaultUncheckedTrouble">???????????? ???????????? ????????? ??????????????? (Breathing Trouble)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedThroat">
                                            <label class="custom-control-label" name="twelve" for="defaultUncheckedThroat">????????? ?????? ????????????????????? (Throat Trouble)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedNausea">
                                            <label class="custom-control-label" name="fourteen" name="thirteen" for="defaultUncheckedNausea">??????????????? (Nausea)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedFitness">
                                            <label class="custom-control-label" name="fifteen" for="defaultUncheckedFitness">?????????????????? ?????????????????? ???????????? (Fitness Certificate)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAppetite">
                                            <label class="custom-control-label" name="sixteen" for="defaultUncheckedAppetite">????????? ????????? ????????? (Loss of Appetite)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedChest">
                                            <label class="custom-control-label" name="seventen" for="defaultUncheckedChest">???????????? ????????? ???????????? (Chest Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedHeadache">
                                            <label class="custom-control-label" name="eighteen" for="defaultUncheckedHeadache">?????????????????? (Headache)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedLeg">
                                            <label class="custom-control-label" name="nineteen" for="defaultUncheckedLeg">????????? / ??????????????? ?????? ???????????? (Leg / Knee Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedNeck">
                                            <label class="custom-control-label" name="twenty" for="defaultUncheckedNeck">??????????????? ???????????? (Neck Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedBack">
                                            <label class="custom-control-label" name="tone" for="defaultUncheckedBack">????????? ???????????? (Back Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedEye">
                                            <label class="custom-control-label" name="ttwo" for="defaultUncheckedEye">????????? ?????? ????????????????????? (Eye Trouble)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedJoint">
                                            <label class="custom-control-label" name="tthree" for="defaultUncheckedJoint">?????????????????? ?????? ???????????? (Joint Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedGas">
                                            <label class="custom-control-label" name="tfour" for="defaultUncheckedGas">????????? / ?????????????????? (Gas / Acidity / Heart burn)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedEar">
                                            <label class="custom-control-label" name="tfive" for="defaultUncheckedEar">????????? ?????? ????????????????????? (Ear Trouble)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedHand">
                                            <label class="custom-control-label" name="tsix" for="defaultUncheckedHand">????????? ?????? ???????????? (Hand Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedTooth">
                                            <label class="custom-control-label" name="tseven" for="defaultUncheckedTooth">???????????? ?????? ????????????????????? (Tooth Trouble)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedBlood">
                                            <label class="custom-control-label" name="teight" for="defaultUncheckedBlood">????????????????????? (Blood Pressure / Hypertension)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedCold">
                                            <label class="custom-control-label" name="tnine" for="defaultUncheckedCold">??????????????? ?????????????????? (Cold-Cough)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedNervous">
                                            <label class="custom-control-label" name="tten" for="defaultUncheckedNervous">??????????????? ?????????????????? (Nervous Weakness)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedSkin">
                                            <label class="custom-control-label" name="thone" for="defaultUncheckedSkin">??????????????? ?????? ?????????????????? ?????? ????????????????????? (Skin allergy & infection)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedSciatica">
                                            <label class="custom-control-label" name="thtwo" for="defaultUncheckedSciatica">???????????????????????????????????? (Sciatica)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedGeriatric">
                                            <label class="custom-control-label" name="ththree" for="defaultUncheckedGeriatric">????????????????????????????????? ?????? ?????????????????? (Geriatric Problem)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedGynaecological">
                                            <label class="custom-control-label" name="thfour" for="defaultUncheckedGynaecological">?????????????????? ????????? ?????????????????? ?????????????????? (Gynaecological Problem)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedPsychological">
                                            <label class="custom-control-label" name="thfive" for="defaultUncheckedPsychological">???????????????????????????????????? ?????????????????? (Psychological Problem)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAnxiety">
                                            <label class="custom-control-label" name="thsix" for="defaultUncheckedAnxiety">?????????????????? ?????? ??????????????????????????? (Anxiety)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedConstipation">
                                            <label class="custom-control-label" name="thseven" for="defaultUncheckedConstipation">??????????????? (Constipation)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedLose">
                                            <label class="custom-control-label" name="theight" for="defaultUncheckedLose">Lose motions (????????????)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedVomiting">
                                            <label class="custom-control-label" name="thnine" for="defaultUncheckedVomiting">Vomiting (???????????????)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedWound">
                                            <label class="custom-control-label" name="thten" for="defaultUncheckedWound">????????? (Wound)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedBone">
                                            <label class="custom-control-label" name="fone" for="defaultUncheckedBone">??????????????? ????????? ???????????? (Bone Pain)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedUrinary">
                                            <label class="custom-control-label" name="ftwo" for="defaultUncheckedUrinary">??????????????? ?????? ?????? ????????????????????? ?????????????????? (Problem Related To Urinary Tract)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedWeakness">
                                            <label class="custom-control-label" name="fthree" for="defaultUncheckedWeakness">???????????????????????? (Weakness)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedDiabetes">
                                            <label class="custom-control-label" name="ffour" for="defaultUncheckedDiabetes">?????????????????? (Diabetes)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedBleeding">
                                            <label class="custom-control-label" name="ffive" for="defaultUncheckedBleeding">??????????????????????????? (Bleeding)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedHearing">
                                            <label class="custom-control-label" name="fsix" for="defaultUncheckedHearing">?????????????????? (Hearing Loss)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedIssue">
                                            <label class="custom-control-label" name="fseven" for="defaultUncheckedIssue">??????????????? ?????? ??????????????? ?????? ????????? ?????????????????? (Issue with Eye Sight)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAcuteRespiratory">
                                            <label class="custom-control-label" name="feight" for="defaultUncheckedAcuteRespiratory">??????????????? ??????????????? ????????????????????? (Acute Respiratory Infection (ARI)/Influenza like illness (ILI))</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedPneumonia">
                                            <label class="custom-control-label" name="fnine" for="defaultUncheckedPneumonia">?????????????????????????????? (Pneumonia)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAcute">
                                            <label class="custom-control-label" name="ften" for="defaultUncheckedAcute">??????????????? ????????????????????? ????????? (Acute Diarrhoeal Disease)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedBacillary">
                                            <label class="custom-control-label" name="fhone" for="defaultUncheckedBacillary">???????????????????????? ??????????????? (Bacillary Dysentery)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedEnteric">
                                            <label class="custom-control-label" name="fhtwo" for="defaultUncheckedEnteric">??????????????? ?????? ??????????????? (Enteric Fever)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedViral">
                                            <label class="custom-control-label" name="fhthree" for="defaultUncheckedViral">??????????????? ?????????????????????????????? (Viral Hepatitis)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedMalaria">
                                            <label class="custom-control-label" name="fhfour" for="defaultUncheckedMalaria">????????????????????? (Malaria)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedDengue">
                                            <label class="custom-control-label" name="fhfive" for="defaultUncheckedDengue">??????????????? (Dengue/DHF/Dss)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedChikunguniya">
                                            <label class="custom-control-label" name="fhsix" for="defaultUncheckedChikunguniya">?????????????????????????????? (Chikunguniya)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedDiphtheria">
                                            <label class="custom-control-label" name="fhseven" for="defaultUncheckedDiphtheria">?????????????????????????????? (Diphtheria)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedPertussis">
                                            <label class="custom-control-label" name="fheight" for="defaultUncheckedPertussis">???????????? ??????????????? (Pertussis)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedChicken">
                                            <label class="custom-control-label" name="fhnine" for="defaultUncheckedChicken">???????????? ???????????? (Chicken Pox)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedMeasles">
                                            <label class="custom-control-label" name="fhten" for="defaultUncheckedMeasles">?????????????????? (Measles)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedMeningitis">
                                            <label class="custom-control-label" name="sone" for="defaultUncheckedMeningitis">???????????????????????????????????? ????????? (Meningitis)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAcuteEncephalitis">
                                            <label class="custom-control-label" name="stwo" for="defaultUncheckedAcuteEncephalitis">??????????????? ???????????????????????????????????? ?????? ?????????????????? (Acute Encephalitis problem)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedOrigin">
                                            <label class="custom-control-label" name="sthree" for="defaultUncheckedOrigin">?????????????????? ??????????????? (Fever of Unknown Origin (PUO))</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedKala">
                                            <label class="custom-control-label" name="sfour" for="defaultUncheckedKala">????????????????????? (Kala-azar)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedLeptospirosis">
                                            <label class="custom-control-label" name="sfive" for="defaultUncheckedLeptospirosis">???????????????????????????????????????????????? (Leptospirosis)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedFlaccid">
                                            <label class="custom-control-label" name="ssix" for="defaultUncheckedFlaccid">Acute Flaccid Paralysis less than 15 years of age</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAnimal">
                                            <label class="custom-control-label" name="sseven" for="defaultUncheckedAnimal">????????? ?????? ??????????????? (Animal bite)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedRabies">
                                            <label class="custom-control-label" name="seight" for="defaultUncheckedRabies">??????????????? (Rabies)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedSnake">
                                            <label class="custom-control-label" name="snine" for="defaultUncheckedSnake">???????????? ?????? ??????????????? (Snake Bite)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAnthrax">
                                            <label class="custom-control-label" name="sten" for="defaultUncheckedAnthrax">???????????????????????? (Anthrax)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedArsenicosis">
                                            <label class="custom-control-label" name="shone" for="defaultUncheckedArsenicosis">???????????????????????????????????? (Arsenicosis)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedFilariasis">
                                            <label class="custom-control-label" name="shtwo" for="defaultUncheckedFilariasis">??????????????????????????? Filariasis</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedThalassemia">
                                            <label class="custom-control-label" name="shthree" for="defaultUncheckedThalassemia">?????????????????????????????? (Thalassemia)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUncheckedAlcohol">
                                            <label class="custom-control-label" name="shfour" for="defaultUncheckedAlcohol">???????????? ?????? ?????? (Alcohol addiction)</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                            <label class="custom-control-label" name="shfive" for="defaultUnchecked">Other:</label>
                                        </div>
                                        <label>Any Other comment</label>
                                        <input type="text" name="lname" />







                                    </div>


                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button" value="Next Step" />
                                </fieldset>



                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Consultation</h2>


                                        <br><br>
                                        <select class="browser-default custom-select" name="t_con">
                                        <option selected>Type of Consulting</option>
                                        <option value="1">Real time</option>
                                        <option value="2">Differed</option>
                                    </select>
                                        <br><br>


                                        <select class="browser-default custom-select" name="a_doctor">
                                        <option selected>Assigned Doctor</option>
                                        <option value="1">Dr. Punyabrata Gun</option>
                                        <option value="2">Dr. Prabir Chatterjee</option>
                                        <option value="3">Dr. Mrinmoy Bera</option>
                                    </select>
                                        <br><br>
                                        <label for="appt">Consultation Date</label>
                                        <input type="date" name="c_date" id="datepicker" placeholder=" Consultation Date" />
                                        <label for="appt">Consultation Time</label>

                                        <input type="time" id="appt" name="c_time" min="09:00" max="18:00" required>


                                    </div>



                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="submit" class="next action-button" value="submit" />
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
                                                <a href="PatRegis.html">
                                                    <h5>Back to Fill Another Form</h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	  
  </section>

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
 

</body>
</html>
