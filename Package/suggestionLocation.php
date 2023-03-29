<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="suggestionLocation.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script
      src="https://kit.fontawesome.com/97f454a94a.js"
      crossorigin="anonymous"
    ></script>
    <title>Suggestion Location</title>
  </head>
  <body>
    <div class="conatainer">
      <div class="top_navbar">
        <div class="logo">
          <img src="logo.png" alt="logo" />
        </div>
        <div class="nav_button">
          <a  href="../LandingPage/Index.php">Home</a>
          <a class="active" href="">Packages</a>
          <a href="#Booking">My Bookings</a>
          <a href="#Hotel">Hotels</a>
        </div>
        <div class="search">
          <form action="/action_page.php" class="search_box">
            <input type="text" placeholder="Search.." name="search" id="MyInput" onkeyup="searchPackages()">
            
          </form>
        </div>
        <div class="profile">
          <i class="fa-solid fa-user"></i>
        </div>
      </div>

      <h1>Suggested Packages</h1>
      <div class="location_box">
        <?php 
          include "../../Backend/Class/Package.Class.php";
          $result = fetchPackages();
          while($row = mysqli_fetch_array($result)){
              echo '<div class="locations">';
              echo '<img src="https://source.unsplash.com/1200x600/?'.$row["PackageLocation"].'" alt="nature">';
              echo "<h3>".$row['PackageLocation']."</h3>";
              echo "<p>".$row['Description']."</p>";
          echo "</p>";
        echo "</div>";
      }
      ?>
      </div>

     <div class="customize_container">
      <p>You can also customize your booking at the place you want to go.</p>
      <button class="customize_button">Customize</button>
       
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
</div>
    <script type="text/javascript">
      const searchPackages = () =>{
        let filter = document.getElementById('MyInput').value.toUpperCase();

        let location = document.querySelectorAll('.locations');

        let l = document.getElementsByTagName('h3');

        for (var i=0;i<=l.length;i++){
            let a = location[i].getElementsByTagName('h3')[0];

            let value = a.innerHTML || a.innerText || a.TextContent;

            if(value.toUpperCase().indexOf(filter) > -1){
              location[i].style.display= "";
            } else {
              location[i].style.display = "none"
            }

        }
      }
</script>
</body>
</html>
