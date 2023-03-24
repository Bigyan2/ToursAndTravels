<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="style.css">
    <title>Customize</title>
    <style>
    

    </style>
</head> 
<body>
   
<img  src="icons/logo.png" alt="logo" width="50px" height="50px" id="logo" >
<h1>Customize</h1>
    <div class="container">
        <!-- <img  src="icons/logo.png" alt="logo" width="50px" height="50px" id="logo" > -->

    <img  src="icons/user.png" alt="notification" width="25px" height="25px"  id="profile"  >
    <!-- <img  src="icons/notification.png" alt="notification" width="25px" height="25px"  id="notification"  > -->
    
    <br>
    <p>
        name : <br>
         <input type="text" name="FName" placeholder="First Name"> 
            <input  type="text" name="LName"  id="LName" placeholder="Last Name">
    </p>
   
    <p> Trip to:
        <br>
         <input type="text" id="trip_To"  ></p>
    
    <p >Guest : <br>
           <input type="text" id="guest" ></p>
    <div id="Date" >
    <p ></p>Date : <br>
         <input type="date"  ></p>
        </div>
    
    <p>Transportation : <br>
        <input type="text" id="Transportation"></p>
    
    <p>Contact : <br>
        <input type="number" id="Contact" ></p>
    
    <input type="submit" value="Customize" id="submit">
    
</div>
</body>
</html>