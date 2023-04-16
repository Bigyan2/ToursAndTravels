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
    <link rel="stylesheet" type="text/css" href="RatingReview/Rating.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="content" id="home"> 
        <nav>
            <img src ="./logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
                 onclick="window.location.reload();">
                 <li class="ho">
                 <a class="home" href="index.php">Home</a>
                <a class="package" href="suggestionLocation.php">Packages</a>
                <a class="booking" href="#booking">My Bookings</a>
                <a class="hotel" href="#hotels">Hotels</a>

                 </li>
            
            <ul class="navbar">
                <li>
                    <?php
                    session_start();
                    if (isset($_SESSION['id'])){
                        echo '<a class="signup-btn" <a href="Backend/logout.php">Log Out</a></a>';
                    } else {
                        echo '<a class="signup-btn" <a href="SignUp.php">Sign Up</a></a>';
                        echo '<a class="login-btn" <a href="Login.php">Login</a></a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>  
    </div>


<div class ="Rating">
<h1>Rating and Feedbacks</h1>
<div class ="background">
<style>
  span {
    font-size: 2rem;
    color: gray;
  }
  span.selected {
    color: gold;
  }
</style>

<div>
  <span>&#9733;</span>
  <span>&#9733;</span>
  <span>&#9733;</span>
  <span>&#9733;</span>
  <span>&#9733;</span>
</div>

<script>
  const stars = document.querySelectorAll('span');
  stars.forEach((star) => {
    star.addEventListener('click', () => {
      star.classList.toggle('selected');
    });
  });
</script>

<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.7 average based on 22 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>1</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>0</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>0</div>
  </div>
</div>
</div>
<div class="addrev">
  <iconify-icon icon="material-symbols:add-circle"></iconify-icon> Add Review
</div>
</div>



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