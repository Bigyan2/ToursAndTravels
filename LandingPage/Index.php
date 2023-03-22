<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday Hype</title>
    <link rel="icon" href="./logo.png">
    <link rel="stylesheet" type="text/css" href="./Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   
</head>
<body>

    <div class="content" id="home"> 
        <nav>
            <img src="./logo.png" class="logo" alt="Logo" title="Holiday Hype">
            
            <ul class="navbar">
                <li>
                    <a class="home" <a href="Index.php">Home</a></a>
                    <a class="package" <a href="../Package/customize.php">Packages</a></a>
                    <a class="booking" <a href="#booking">Booking</a></a>'
                    <?php
                    if (isset($_SESSION['id'])){
                        echo '<a class="signup-btn" <a href="../../Backend/logout.php">Log Out</a></a>';
                    } else {
                        echo '<a class="signup-btn" <a href="../logincreate/SignUp.html">Sign Up</a></a>';
                        echo '<a class="login-btn" <a href="../logincreate/login.php">Login</a></a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>
        <div class="title">
            <h1>Lets enjoy your trip with Holiday Hype</h1>
            <p>Thinking of taking break form your daily boring life and want to have a special quality time with your loved ones then</p>
            <a class="button">Start Now -></a>
        </div>
        </div>
    </div>


<section class="container">
    <div class="text">
        <h2>Find the Travel Perfection</h2>
    </div>
    <div class="rowitems">
        <div class="container-box">
        <div class="container-image">
           <img src="./chat.png" alt="Chat">
        </div>
            <h4>Chat</h4>
            <p>Have a conversation 
                with travel agency</p>
        </div>

        <div class="container-box">
        <div class="container-image">
            <img src="./rateus.jpg" alt="Rate Us">
        </div>
            <h4>Feedback</h4>
            <p>Help us improve</p>
        </div>
    </div>
    </div>
</section>

<section class="footer">
    <div class="foot">
        <div class="footer-content">
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li>Sign Up</a></li>
                    <li>About Us</a></li>
                    <li>Contact Us</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://www.twitter.com/" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://www.youtube.com/" target="_blank"><i class='bx bxl-youtube' ></i></a>
                    <a href="https://www.tiktok.com/" target="_blank"><i class='bx bxl-tiktok' ></i></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="end">
        <p>Copyright © 2023 Holiday Hype  All Rights Reserved.</p>
    </div>
</section>
</body>
</html>