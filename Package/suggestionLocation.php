<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="suggestionLocation.css">
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
          <a class="active" href="#Package">Package</a>
          <a href="#Booking">Booking</a>
          <a href="#Hotel">Hotel</a>
        </div>
        <div class="search">
          <form action="/action_page.php" class="search_box">
            <input type="text" placeholder="Search.." name="search" id="MyInput" onkeyup="searchPackages()">
            <button type="submit"><i class="fa fa-search"></i></button>
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
      <input  class="customize_button" type="button" onclick="location.href='./customize.php'" value="Customize" />
     </div>
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
