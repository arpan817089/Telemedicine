<?php
session_start();
if (isset($_SESSION['dcr'])){
  $p=$_SESSION['dcr'];
  $conn=mysqli_connect("localhost","arp7029", "790Aa@790","doc_patient");
  $q1="SELECT * FROM `doctor` WHERE `Doctors_Registration_No`='$p'";
		$e1=mysqli_query($conn,$q1);
		if(mysqli_num_rows($e1)>0){
			
			$res=mysqli_fetch_row($e1);
			$nm=$res[2];
		}

}


?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Dashboard </title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>   
</head>
   <style>
   .container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}
/* 
.table-image {
  td, th {
    vertical-align: middle;
  }
} */

@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap');
     :root {
        --calendar-bg-color: #262829;
        --calendar-font-color: #FFF;
        --weekdays-border-bottom-color: #404040;
        --calendar-date-hover-color: #505050;
        --calendar-current-date-color: #1b1f21;
        --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
        --calendar-today-innerborder-color: transparent;
        --calendar-nextprev-bg-color: transparent;
        --next-prev-arrow-color: #FFF;
        --calendar-border-radius: 16px;
        --calendar-prevnext-date-color: #484848
    }
    
    * {
        padding: 0;
        margin: 0;
    }
    
    .calendar {
        font-family: 'IBM Plex Sans', sans-serif;
        position: relative;
        max-width: 400px;
        /*change as per your design need */
        min-width: 320px;
        background: var(--calendar-bg-color);
        color: var(--calendar-font-color);
        margin: 20px auto;
        box-sizing: border-box;
        overflow: hidden;
        font-weight: normal;
        border-radius: var(--calendar-border-radius);
    }
    
    .calendar-inner {
        padding: 10px 10px;
    }
    
    .calendar .calendar-inner .calendar-body {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        text-align: center;
    }
    
    .calendar .calendar-inner .calendar-body div {
        padding: 4px;
        min-height: 30px;
        line-height: 30px;
        border: 1px solid transparent;
        margin: 10px 2px 0px;
    }
    
    .calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
        border: 1px solid transparent;
        border-bottom: 1px solid var(--weekdays-border-bottom-color);
    }
    
    .calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
        border: 1px solid transparent;
        border-bottom: 1px solid var(--weekdays-border-bottom-color);
    }
    
    .calendar .calendar-inner .calendar-body div>a {
        color: var(--calendar-font-color);
        text-decoration: none;
        display: flex;
        justify-content: center;
    }
    
    .calendar .calendar-inner .calendar-body div:hover {
        border: 1px solid var(--calendar-date-hover-color);
        border-radius: 4px;
    }
    
    .calendar .calendar-inner .calendar-body div.empty-dates:hover {
        border: 1px solid transparent;
    }
    
    .calendar .calendar-inner .calendar-controls {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }
    
    .calendar .calendar-inner .calendar-today-date {
        display: grid;
        text-align: center;
        cursor: pointer;
        margin: 3px 0px;
        background: var(--calendar-current-date-color);
        padding: 8px 0px;
        border-radius: 10px;
        width: 80%;
        margin: auto;
    }
    
    .calendar .calendar-inner .calendar-controls .calendar-year-month {
        display: flex;
        min-width: 100px;
        justify-content: space-evenly;
        align-items: center;
    }
    
    .calendar .calendar-inner .calendar-controls .calendar-next {
        text-align: right;
    }
    
    .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
    .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
        font-weight: 500;
        font-size: 20px;
    }
    
    .calendar .calendar-inner .calendar-body .calendar-today {
        background: var(--calendar-today-color);
        border-radius: 4px;
    }
    
    .calendar .calendar-inner .calendar-body .calendar-today:hover {
        border: 1px solid transparent;
    }
    
    .calendar .calendar-inner .calendar-body .calendar-today a {
        outline: 2px solid var(--calendar-today-innerborder-color);
    }
    
    .calendar .calendar-inner .calendar-controls .calendar-next a,
    .calendar .calendar-inner .calendar-controls .calendar-prev a {
        color: var(--calendar-font-color);
        font-family: arial, consolas, sans-serif;
        font-size: 26px;
        text-decoration: none;
        padding: 4px 12px;
        display: inline-block;
        background: var(--calendar-nextprev-bg-color);
        margin: 10px 0 10px 0;
    }
    
    .calendar .calendar-inner .calendar-controls .calendar-next a svg,
    .calendar .calendar-inner .calendar-controls .calendar-prev a svg {
        height: 20px;
        width: 20px;
    }
    
    .calendar .calendar-inner .calendar-controls .calendar-next a svg path,
    .calendar .calendar-inner .calendar-controls .calendar-prev a svg path {
        fill: var(--next-prev-arrow-color);
    }
    
    .calendar .calendar-inner .calendar-body .prev-dates,
    .calendar .calendar-inner .calendar-body .next-dates {
        color: var(--calendar-prevnext-date-color);
    }
    
    .calendar .calendar-inner .calendar-body .prev-dates:hover,
    .calendar .calendar-inner .calendar-body .next-dates:hover {
        border: 1px solid transparent;
        pointer-events: none;
    }

   </style>
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
       <a href="prescription.php">
        <i class='bx bxs-message-alt-add'></i>
         <span class="links_name">Create Prescription</span>
       </a>
       <span class="tooltip">Create Prescription</span>
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
    <div style="padding: 10px 10px; "><h3 style=>Doctor Dashboard</h3>
    <div style="padding: 10px 10px; background-color: lightgreen"><h2>Welcome Dr. Madhusudan</h2></div>
    <div style="float:right; width: 200px;" class="calendar"></div>
    <div style="padding: 10px 20px; text-align: right;"><div class="dropdown">
      <button style="float:right; margin-right: 20px;"class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Preferred Location
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Location 1</a></li>
    <li><a href="#">Location 2</a></li>
    <li><a href="#">Location 3</a></li>
  </ul>
  
  
  <div style= "float:left;" ><h4 style="float:left; color: blue">Todays Event:</h4>

    <div><table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>No. of Patient </th>
                            <th>Location</th>
                            
                            
                            <th colspan="2" style= "text-align: center;">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Barun Das</td>
                            <td>Pat_Regis No</td>
                            <td>
                            <td ><button type="button" class="btn btn-primary">View</button>
                        </td>
                        </tr>
                    </div>
</div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function CalendarControl() {
            const calendar = new Date();
            const calendarControl = {
                localDate: new Date(),
                prevMonthLastDate: null,
                calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                calMonthName: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec"
                ],
                daysInMonth: function(month, year) {
                    return new Date(year, month, 0).getDate();
                },
                firstDay: function() {
                    return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
                },
                lastDay: function() {
                    return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
                },
                firstDayNumber: function() {
                    return calendarControl.firstDay().getDay() + 1;
                },
                lastDayNumber: function() {
                    return calendarControl.lastDay().getDay() + 1;
                },
                getPreviousMonthLastDate: function() {
                    let lastDate = new Date(
                        calendar.getFullYear(),
                        calendar.getMonth(),
                        0
                    ).getDate();
                    return lastDate;
                },
                navigateToPreviousMonth: function() {
                    calendar.setMonth(calendar.getMonth() - 1);
                    calendarControl.attachEventsOnNextPrev();
                },
                navigateToNextMonth: function() {
                    calendar.setMonth(calendar.getMonth() + 1);
                    calendarControl.attachEventsOnNextPrev();
                },
                navigateToCurrentMonth: function() {
                    let currentMonth = calendarControl.localDate.getMonth();
                    let currentYear = calendarControl.localDate.getFullYear();
                    calendar.setMonth(currentMonth);
                    calendar.setYear(currentYear);
                    calendarControl.attachEventsOnNextPrev();
                },
                displayYear: function() {
                    let yearLabel = document.querySelector(".calendar .calendar-year-label");
                    yearLabel.innerHTML = calendar.getFullYear();
                },
                displayMonth: function() {
                    let monthLabel = document.querySelector(
                        ".calendar .calendar-month-label"
                    );
                    monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
                },
                selectDate: function(e) {
                    console.log(
                        `${e.target.textContent} ${
                calendarControl.calMonthName[calendar.getMonth()]
              } ${calendar.getFullYear()}`
                    );
                },
                plotSelectors: function() {
                    document.querySelector(
                        ".calendar"
                    ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
              <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
              <div class="calendar-year-month">
              <div class="calendar-month-label"></div>
              <div>-</div>
              <div class="calendar-year-label"></div>
              </div>
              <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
              </div>
              <div class="calendar-today-date">Today: 
                ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
                ${calendarControl.localDate.getDate()}, 
                ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
                ${calendarControl.localDate.getFullYear()}
              </div>
              <div class="calendar-body"></div></div>`;
                },
                plotDayNames: function() {
                    for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
                        document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
                    }
                },
                plotDates: function() {
                    document.querySelector(".calendar .calendar-body").innerHTML = "";
                    calendarControl.plotDayNames();
                    calendarControl.displayMonth();
                    calendarControl.displayYear();
                    let count = 1;
                    let prevDateCount = 0;

                    calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
                    let prevMonthDatesArray = [];
                    let calendarDays = calendarControl.daysInMonth(
                        calendar.getMonth() + 1,
                        calendar.getFullYear()
                    );
                    // dates of current month
                    for (let i = 1; i < calendarDays; i++) {
                        if (i < calendarControl.firstDayNumber()) {
                            prevDateCount += 1;
                            document.querySelector(
                                ".calendar .calendar-body"
                            ).innerHTML += `<div class="prev-dates"></div>`;
                            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
                        } else {
                            document.querySelector(
                                ".calendar .calendar-body"
                            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                        }
                    }
                    //remaining dates after month dates
                    for (let j = 0; j < prevDateCount + 1; j++) {
                        document.querySelector(
                            ".calendar .calendar-body"
                        ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                    }
                    calendarControl.highlightToday();
                    calendarControl.plotPrevMonthDates(prevMonthDatesArray);
                    calendarControl.plotNextMonthDates();
                },
                attachEvents: function() {
                    let prevBtn = document.querySelector(".calendar .calendar-prev a");
                    let nextBtn = document.querySelector(".calendar .calendar-next a");
                    let todayDate = document.querySelector(".calendar .calendar-today-date");
                    let dateNumber = document.querySelectorAll(".calendar .dateNumber");
                    prevBtn.addEventListener(
                        "click",
                        calendarControl.navigateToPreviousMonth
                    );
                    nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
                    todayDate.addEventListener(
                        "click",
                        calendarControl.navigateToCurrentMonth
                    );
                    for (var i = 0; i < dateNumber.length; i++) {
                        dateNumber[i].addEventListener(
                            "click",
                            calendarControl.selectDate,
                            false
                        );
                    }
                },
                highlightToday: function() {
                    let currentMonth = calendarControl.localDate.getMonth() + 1;
                    let changedMonth = calendar.getMonth() + 1;
                    let currentYear = calendarControl.localDate.getFullYear();
                    let changedYear = calendar.getFullYear();
                    if (
                        currentYear === changedYear &&
                        currentMonth === changedMonth &&
                        document.querySelectorAll(".number-item")
                    ) {
                        document
                            .querySelectorAll(".number-item")[calendar.getDate() - 1].classList.add("calendar-today");
                    }
                },
                plotPrevMonthDates: function(dates) {
                    dates.reverse();
                    for (let i = 0; i < dates.length; i++) {
                        if (document.querySelectorAll(".prev-dates")) {
                            document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                        }
                    }
                },
                plotNextMonthDates: function() {
                    let childElemCount = document.querySelector('.calendar-body').childElementCount;
                    //7 lines
                    if (childElemCount > 42) {
                        let diff = 49 - childElemCount;
                        calendarControl.loopThroughNextDays(diff);
                    }

                    //6 lines
                    if (childElemCount > 35 && childElemCount <= 42) {
                        let diff = 42 - childElemCount;
                        calendarControl.loopThroughNextDays(42 - childElemCount);
                    }

                },
                loopThroughNextDays: function(count) {
                    if (count > 0) {
                        for (let i = 1; i <= count; i++) {
                            document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
                        }
                    }
                },
                attachEventsOnNextPrev: function() {
                    calendarControl.plotDates();
                    calendarControl.attachEvents();
                },
                init: function() {
                    calendarControl.plotSelectors();
                    calendarControl.plotDates();
                    calendarControl.attachEvents();
                }
            };
            calendarControl.init();
        }

        const calendarControl = new CalendarControl();
    </script>
    
      
  </section>
   
  
  <script>
var dt = new Date();
document.getElementById('date-time').innerHTML=dt;
</script>
<script type="text/javascript">
  var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
  var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date+' '+time;
   
  document.getElementById("displayDateTime").innerHTML = dateTime + ' <br> Day :- ' + daylist[day];
 
  </script>

</body>
</html>
