<?php
include ('../../Backend/config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Login.css">
    <script src="https://kit.fontawesome.com/97f454a94a.js" crossorigin="anonymous"></script>
	<title>Log in page</title>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="logo">
                <img src="logo.png" alt="Project logo">

            </div>

            <h1>Holiday Hype</h1>
            <form action="../../Backend/login.php" method="post">
                <div class="input-group">
                    

                     <div class="input-field">
                         
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Username" name="username">


                    </div>

                    <div class="input-field">
                        
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name= "password">
                        

                    </div>

                    <p class="forget"><a href="#">Forget passsword ?</a></p>
               
   
                    <button class="login_button" >
                        Log in</button>
                    <p>Or</p>
                    <button class="login_button" onclick="window.location = '<?php echo $login_url ?>'" type="button">
                        <img src="google.png" alt="google">
                        Login with google
                    </button>
                    <p class="no_account">No account : <a href="SignUp.html">Sign Up</a></p>


                    
                </div>
            </form>
        </div>

    </div>
	
</body>
</html>