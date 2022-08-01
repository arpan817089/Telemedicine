<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN PAGE</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <!-- <link rel="stylesheet"  /> -->
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
        /* background-image: url("bg.jpeg"); */
        background-color: rgb(114, 36, 148);
        /* background-position: cover; */
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
        margin-right: 10rem;
    }

    /* .name-content .logo {
        font-size: 3.5rem;
        color: #5df218;
        float: none;
    } */

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
        /* border-radius: 0.5rem; */
        /* box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%); */
    }

    /* form input {
        outline: none;
        padding: 2rem 1rem;
        margin-bottom: 0.8rem;
        font-size: 1.1rem;
    } */

    /* form input:focus {
        border: 1.8px solid #1877f2;
    } */

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

    /* 
    form a {
        text-decoration: none;
        text-align: center;
        font-size: 1rem;
        padding-top: 0.8rem;
        color: #1877f2;
    } */

    /* //.........Media Query.........// */

    /* @media (max-width: 500px) {
        html {
            font-size: 60%;
        }

        .name-content {
            margin: 0;
            text-align: center;
        }

        form {
            width: 350px;
            height: fit-content;
        }

        form input {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        form .login {
            font-size: 1.5rem;
        }

        form a {
            font-size: 1.5rem;
        }

        form .create-account {
            font-size: 1.5rem;
        }

        .flex-div {
            display: flex;
            flex-direction: column;
        }
    }

    @media (min-width: 501px) and (max-width: 768px) {
        html {
            font-size: 60%;
        }

        .name-content {
            margin: 0;
            text-align: center;
        }

        form {
            width: 300px;
            height: fit-content;
        }

        form .login {
            font-size: 1.5rem;
        }

        form a {
            font-size: 1.5rem;
        }

        form .create-account {
            font-size: 1.5rem;
        }

        .flex-div {
            display: flex;
            flex-direction: column;
        }
    }

    @media (min-width: 769px) and (max-width: 1200px) {
        html {
            font-size: 60%;
        }

        .name-content {
            margin: 0;
            text-align: center;
        }

        form {
            width: 350px;
            height: 350px;
        }

        form input {
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        form .login {
            font-size: 1.5rem;
        }

        form a {
            font-size: 1.5rem;
        }

        form .create-account {
            font-size: 1.5rem;
        }

        .flex-div {
            display: flex;
            flex-direction: column;
        }

        @media (orientation: landscape) and (max-height: 500px) {
            .header {
                height: 90vmax;
            }
        }
    } */
</style>

<body>
    <div class="content">
        <div class="flex-div">
            <div class="name-content">
                <div>
                    <img src="Logo.png" alt="" width="200px" style="padding-bottom: 100px;padding-left: 100px;">
                </div>
                <p style="color: white; width:400px;font-size: 40px;">SSF TELEMEDICINE CENTRE KULBURU
                </p>
                <!-- <p>ADMIN LOGIN</p> -->
            </div>
            <form action="TELMEDLogin.php" method="post">
                <img src="1.jpeg" alt="" width="550px" height="350px">
                <button type="submit" style="padding-left: 5rem;" class="login">Log In</button>
            </form>

        </div>
    </div>
</body>

</html>