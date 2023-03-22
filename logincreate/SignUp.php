<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="../display/jquery.min.js"></script>
    <script type="text/javascript" src="../display/toastr.min.js"></script>
    <link href="../display/toastr.min.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Login.css">
    <script src="https://kit.fontawesome.com/97f454a94a.js" crossorigin="anonymous"></script>
	<title>Sign Up page</title>
</head>
<body>
        <?php
            session_start();
            if (isset($_SESSION['error'])){
                echo '<script>toastr.error("'.$_SESSION['error'].'");</script>';
                unset($_SESSION['error']);
            } elseif(isset($_SESSION['success'])){
                echo '<script>toastr.success("'.$_SESSION['success'].'");</script>';
                unset($_SESSION['error']);
            }
        ?>
    <div class="container">
        <div class="form-box">
            <div class="logo">
                <img src="logo.png" alt="Project logo">

            </div>

            <h1>Holiday Hype</h1>
            <form  action ="../../Backend/signup.php" method="post">
                <div class="input-group">
                    <div class="input-field">
                         
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    

                     <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                    </div>

                    <button class="login_button" name="submit">
                        Sign Up</button>
                   
                    <p class="no_account">Already have a account : <a href="login.php">Login</a></p>


                    
                </div>
            </form>
        </div>

    </div>
	
</body>
</html>
