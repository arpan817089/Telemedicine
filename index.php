<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to SSF Telemedicine</title>
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"> -->
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">SSFNGO</span></h3>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="main">
                <header>
                    <div class="overlay">
                        <div class="inner">
                            <img src="./Logo.png">
                            <h1 class="title" data-text="[title_Name]">WELCOME TO</h1><br>

                            <h1 class="title" data-text="[title_Name]">SSF TELEMEDICINE</h1>

                        </div>
                    </div>
                </header>
            </div>

            <div class="shadow one"></div>
            <div class="shadow two"></div>
        </div>

        <div class="links">
            <ul>
                <li>
                    <a href="index.php" style="--i: 0.05s">HOME</a>
                </li>
                <li>
                    <a href="admin_login.php" style="--i: 0.1s" target="_blank">Admin Login</a>
                </li>
                <li>
                    <a href="hwlogin.php" style="--i: 0.1s" target="_blank">Health Worker Login</a>
                </li>
                <li>
                    <a href="TELMEDLogin.php" target="_blank" style="--i: 0.35s">Doctor Login</a>
                </li>
            </ul>
        </div>
    </div>

    <script>
        const hamburger_menu = document.querySelector(".hamburger-menu");
        const container = document.querySelector(".container");
        hamburger_menu.addEventListener("click", () => {
            container.classList.toggle("active");
        })
    </script>

</body>

</html>