<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>testing</title>
</head>
<body>
    <table>
    <tr>
        <td><label >Day Card Number :</label></td><td><input onkeyup="GetDetail(this.value)" type="text" name="Day_Card_No" id="day_card_num"></td>
    </tr>
    <tr>
        <td><label >Name :</label></td><td><input type="text" name="Name" id="name"></td>
    </tr>
    <tr>
        <td><label >Age :</label></td><td><input type="text" name="Age" id="age"></td>
    </tr>
    </table>
</body>
</html>
function GetDetail(str){
    if (str.length == 0) {
                document.getElementById("name").value = "";
                document.getElementById("age").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById
                            ("name").value = myObj[0];
                          
                        // Assign the value received to
                        // last name input field
                        document.getElementById(
                            "age").value = myObj[1];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "medical_consultant.php?Day_Card_No=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        
}








<?php 
$user_id = $_REQUEST['Day_Card_No'];
$conn=mysqli_connect("localhost" , "root" , "" , "doc_patient");
if($Day_Card_No!==""){
    $query_1=mysqli_query($conn , "SELECT Name , Age FROM medical_consultant ");
    $row=mysqli_fetch_array($query_1);
    $Name = $row["Name"];
    $Age = $row["Age"];
}
$result = array("$Name" , "$Age");
$myJSON=json_encode($result);
echo $myJSON;

?>