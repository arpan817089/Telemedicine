<?php
session_start();
extract($_REQUEST);
$conn = mysqli_connect("localhost", "arp7029", "790Aa@790", "doc_patient");
$query = "SELECT * FROM `medical_consultant` where `Name` = '$x'";
$result = mysqli_query($conn, $query);
$fetch = mysqli_fetch_row($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Video Calling</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
</head>
<body>
<script>
  var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const config = {
      name: "<?php echo $fetch[2]; ?>",
      meetingId: "milkyway2",
      apiKey: "bca7a3e0-d47b-4558-bc92-b2837ca0d3b8",

      containerId: null,
      micEnabled: true,
      webcamEnabled: true,
      participantCanToggleSelfWebcam: true,
      participantCanToggleSelfMic: true,
      chatEnabled: true,
      screenShareEnabled: true,
      raiseHandEnabled: true,
      /*

     Other Feature Properties
      
      */
  recording: {
    enabled: true,
    webhookUrl: "https://drive.google.com/drive/folders/",
    // awsDirPath: `/meeting-recordings/${meetingId}/`,
    autoStart: false,

    layout: {
      type: "SIDEBAR", // "SPOTLIGHT" | "SIDEBAR" | "GRID"
      priority: "PIN", // "SPEAKER" | "PIN",
      gridSize: 3,
    },
  },
whiteboardEnabled: true,
  permissions: {
    toggleRecording: true,
    removeParticipant: true,
    endMeeting: true,
    drawOnWhiteboard: true,
    toggleWhiteboard: true,
    //...
  },

      
      
      
    };

    const meeting = new VideoSDKMeeting();
    meeting.init(config);
  });

  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.7/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
</script>
</body>
</html>