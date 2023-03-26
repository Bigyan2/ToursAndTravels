<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="../display/jquery.min.js"></script>
    <script type="text/javascript" src="../display/toastr.min.js"></script>
    <link href="../display/toastr.min.css" rel="stylesheet">
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
    <?php
        session_start();
        if (isset($_SESSION['ok'])){
            echo '<script>toastr.success("'.$_SESSION['ok'].'");</script>';
            unset($_SESSION['ok']);
        }
    ?>

    <div class="content" id="home"> 
        <nav>
            <img src ="./logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
                 onclick="window.location.reload();">
                 <li class="ho">
                    <a class="home" href="">Home</a>
                    <a class="package" href="#package">Packages</a>
                    <a class="booking" href="#booking">My Bookings</a>
                    <a class="hotel" href="#hotels">Hotels</a>
                 </li>
            
            <ul class="navbar">
                <li>
                    <?php
                    if (isset($_SESSION['id'])){
                        echo '<a class="signup-btn" <a href="../../Backend/logout.php">Log Out</a></a>';
                    } else {
                        echo '<a class="signup-btn" <a href="../logincreate/SignUp.php">Sign Up</a></a>';
                        echo '<a class="login-btn" <a href="../logincreate/login.php">Login</a></a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>        
       





    <section class="footer">
        <div class="foot">
            <div class="footer-content">
                <div class="footlinks">
                    <h4>Quick Links</h4>
                    <ul>
                    <li><a class="aboutus" href="#">About Us </a></li>
                    <li><a href="#">Contact Us </a></li>
                </ul>
            </div>

            <div class="footlink_social">
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