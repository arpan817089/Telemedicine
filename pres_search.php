<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telemedicine Prescription Search</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<style>
body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	/*animation: gradient 8s ease infinite;*/
	height: 40rem;
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
    <div class="loginBox">
        <img src="Logo.png" class="user">
        <h2>Prescription Info</h2>
        <form action="PRESCRIPTION3.php" method="post">
            <p>Patient Name</p>
            <input type="text" name="pat_reg" placeholder="Enter Patient Name">
            <input type="submit" name="submit" value="Fetch Prescription">
        </form>
    </div>
</body>
</html>