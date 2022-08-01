<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>DOCTORS MODULE</title>
</head>
<style>
    /* @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"); */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Poppins", sans-serif;
        background-color: rgb(114, 36, 148);
    }

    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .flex-div {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }

    .name-content {
        margin-right: 7rem;
    }

    .name-content p {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 350px;
        height: 380px;
    }

    form .login {
        outline: none;
        border: none;
        background: #06f36d;
        padding: 0.8rem 1rem;
        margin-top: 1rem;
        margin-left: 8rem;
        border-radius: 0.4rem;
        font-size: 1.2rem;
        color: #fff;
        width: 20rem;
    }

    form .login:hover {
        background: #0f71f1;
        cursor: pointer;
    }
</style>

<body>
    <div class="content">
        <div class="flex-div">
            <div class="name-content">
            <div>
                    <img src="Logo.png" alt="" width="200px" style="padding-left: 100px;margin-top:5rem;">
                </div>
                <p style="padding-bottom:2rem;color: white; width:400px;font-size: 40px;">SSF TELEMEDICINE DOCTORS MODULE </p>
                <div>
                    <img src="fam1.jpeg" height="50px" width="50px" style="border-radius: 2rem; margin:-20px 0px;">
                    <a href="date_pat.php" style="font-size:1.5rem;text-decoration:none;outline:none;margin:20px 20px;cursor:pointer;background-color:#fff;color:rgb(114, 36, 148);">Patient Records</a>
                </div><br><br><br>
                
                <div>
                    <img src="patient1.jpeg" height="50px" width="50px" style="border-radius: 2rem; margin:-20px 0px;">
                    <a href="view_dash2.php.php" style="font-size:1.5rem;text-decoration:none;outline:none;margin:20px 20px;cursor:pointer;background-color:#fff;color:rgb(114, 36, 148);">Medical Prescription</a>
                </div><br><br><br>
                <!-- <p>ADMIN LOGIN</p> -->
            </div>
            <form>
                <img src="3.jpeg" alt="" width="500px" height="500px">
            </form>

        </div>
    </div>
</body>

</html>