<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="Package/style.css">
    <title>Customize</title>
    <style>
    </style>
    
</head> 
<body>
   <div class="content" id="home"> 
        <nav>
            <img src ="logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
                 onclick="window.location.reload();">
                 <div class="ho vclass">
                    <a class="home" href="index.php">Home</a>
                    <a class="package" href="suggestionLocation.php">Packages</a>
                    <a class="booking" href="#booking">My Bookings</a>
                    <a class="hotel" href="#hotels">Hotels</a>
                 </div>
            
            <ul class="navbar vclass">
                <div>
                    <?php
                    if (isset($_SESSION['id'])){
                        echo '<a class="signup-btn" <a href="Backend/logout.php">Log Out</a></a>';
                    } else {
                        echo '<a class="signup-btn" <a href="SignUp.php">Sign Up</a></a>';
                        echo '<a class="login-btn" <a href="login.php">Login</a></a>';
                    }
                    ?>
                </div>
            </ul>
            <img src="ham.png" alt="hambeger" class="ham" >
        </nav>  
        
        
        
<!-- <img  src="icons/logo.png" alt="logo" width="50px" height="50px" id="logo" > -->
<!-- <h1>Customize</h1> -->
    <div class="container">
        <!-- <img  src="icons/logo.png" alt="logo" width="50px" height="50px" id="logo" > -->

    <!-- <img  src="icons/user.png" alt="notification" width="25px" height="25px"  id="profile"  > -->
    <!-- <img  src="icons/notification.png" alt="notification" width="25px" height="25px"  id="notification"  > -->
    
    <br>
    <p >
        Trip From : <br>
         <input type="text" name="TFrom" style="height: 25px; " > 

            <div id="Trip_To" >

                Trip To : <br>
                     <input type="text" style="height: 25px; "   ></p>
                    </div>
    </p>
   <div id="DateFrom">
    <p> Date from:
        <br>
         <input type="text" style="height: 25px; "  placeholder="Departure Date" id="date" onfocus="(this.type='date')"></p>
    </div>

    <div id="DateTo">
   
        <p ></p>Date To : <br>
                     <input type="text" style="height: 25px; "  placeholder="Return Date" id="date" onfocus="(this.type='date')"  ></p>
    </div>
    
    <p >Guest : <br>
           <input type="number" id="guest" placeholder="Adult" style="height: 25px; "  ></p>
           
    <div id="Guest" >
    <p ></p> 
         <input type="number" placeholder="Children"  style="height: 25px; " ></p>
        </div>
    
    <p> Email : <br>
        <input type="email" id="Email" style="height: 25px; " > </p>
    <div id="Phone">
        Phone Number: <br>
        <input type="number" style="height: 25px; "  >
       </div>
    
    <input type="submit" value="Customize" id="submit">
    
</div>
</body>
</html>