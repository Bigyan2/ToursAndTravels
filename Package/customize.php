<?php
session_start();
if(!isset($_SESSION['id'])){
	$_SESSION['error'] = "Please Login First";
	header("Location: ../Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../display/icons.js"></script>
    <link rel="stylesheet" type="text/css" href="../Responsive/responsive.css">
        <link rel="icon" href="../logo.png">
    <title>Customize</title>
    <style>
    </style>
</head> 
<body>
   <div class="container" id="home"> 
        <nav class="wholenav hnav">
            <img src ="../logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
                 onclick="window.location.reload();">
                 <div class="ho hide show">
                    <a class="home" href="../index.php">Home</a>
                    <a class="package" href="../suggestionLocation.php">Packages</a>
                    <a class="booking" href="../mybookings.php">My Bookings</a>
                    <a class="hotel" href="../hotel.php">Hotels</a>
                 </div>
          <form action="/action_page.php" class="search_box hide show">
            <input type="hidden" placeholder="Search.." id="find" onkeyup="search()"> 
          </form>
            <ul class="navbar hide show">
                <div>
                    <?php
                    if (isset($_SESSION['id'])){
                        echo '<div class="profile"><a href="../Account.php"><i class="fa-solid fa-user"></i></a></div>';
                    } else {
                        echo '<a class="signup-btn" <a href="../SignUp.php">Sign Up</a></a>';
                        echo '<a class="login-btn" <a href="../Login.php">Login</a></a>';
                    }
                    ?>
                </div>
            </ul>
            <img src="../Responsive/ham.png" alt="hambeger" class="burger" >
        </nav>    

        
    
    <form method="post">
    <br>
    <p >
        Trip From : <br>
         <input type="text" name="TFrom" style="height: 25px; " required> 

            <div id="Trip_To" >

                Trip To : <br>
                     <input type="text" name="TripTo" style="height: 25px; " required></p>
                    </div>
    </p>
   <div id="DateFrom">
    <p> Date from:
        <br>
         <input type="text" style="height: 25px; "  placeholder="Departure Date" id="date" onfocus="(this.type='date')" name="DateFrom"  required></p>
    </div>

    <div id="DateTo">
   
        <p ></p>Date To : <br>
                     <input type="text" style="height: 25px; "  placeholder="Return Date" id="date" onfocus="(this.type='date')"  name="DateTo" required></p>
    </div>
    
    <p >Guest : <br>
           <input type="number" id="guest" placeholder="Adult" style="height: 25px; "  name="adult" required></p>
           
    <div id="Guest" >
    <p ></p> 
         <input type="number" placeholder="Children"  style="height: 25px; " name="children" required></p>
        </div>
    
    <p> Email : <br>
        <input type="email" id="Email" style="height: 25px; " name="email" required> </p>
    <div id="Phone">
        Phone Number: <br>
        <input type="number" style="height: 25px; "  name="phone" required>
       </div>
    
    <input type="submit" value="Customize" id="submit" name="submit" required>
    </form>
</div>
</div>
</body>
</html>

<?php
include "../Backend/addData.php";
if (isset($_POST['submit'])){
    $fromLocation = $_POST['TFrom'];
    $toLocation = $_POST['TripTo'];
    $DateFrom = $_POST['DateFrom'];
    $DateTo = $_POST['DateTo'];
    $email = $_POST['email'];
    $children = $_POST['children'];
    $adult = $_POST['adult'];
    $phone = $_POST['phone'];

    if(addCustomPackages($fromLocation,$toLocation,$DateFrom,$DateTo,$email,$children,$adult,$phone,$_SESSION['id'])){
        $_SESSION['mssg'] = "Customized Successfully";
        echo '<script>window.location.href = "../suggestionLocation.php"</script>';
    }
}
?>
<script src="../Responsive/responsives.js"></script>
