
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>View Doctor</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <style>
        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 8s ease infinite;
            height: 40rem;
        }
    </style>
    <div class="loginBox">
        <img src="Logo.png" class="user">
        <h2>Doctor Info</h2>
        <form action="view_doc.php" method="post">
            <p>Doctor Registration No</p>
            <input type="text" name="doc_reg" placeholder="Enter Doctor Registration No" required>
            <input type="submit" name="submit" value="Fetch Details">
        </form>
    </div>
</body>

</html>