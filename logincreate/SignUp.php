<?php include "../../Backend/Class/user.Class.php"?>
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
            <form  method="post">
                <div class="input-group">
                    <div class="input-field">
                         
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name="name" required >
                    </div>
                    

                     <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required >
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required >
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


<?php   
if (isset($_POST['submit'])){

$username_pattern = "/^[a-zA-Z0-9]{4,20}$/";
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$password_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}$/";

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$h_password = password_hash($password, PASSWORD_DEFAULT);


$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
$_SESSION['password'] = $h_password;

if (!preg_match($username_pattern, $username)){
    echo '<script>toastr.error("Username should contain one uppercase and one number");</script>';
} else if(!preg_match($email_pattern, $email)){
    echo '<script>toastr.error("Invalid Email Format. Please try again!!!");</script>';
} else if(!preg_match($password_pattern,$password)){
    echo '<script>toastr.error("Invalid Password Format. Please try again!!!");</script>';
} else if($password != $confirm_password){
    echo '<script>toastr.error("Password doesnot matches. Please try again!!!");</script>';
} else {
    echo '<script>window.location.href = "../../Backend/signup.php"</script>';
}
}
?>
