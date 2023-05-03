<?php
session_start();
if(!isset($_SESSION['id'])){
	$_SESSION['error'] = "Please Login First";
	header("Location: Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Bookings</title>
	<script type="text/javascript" src="display/icons.js"></script>
	<link rel="stylesheet" type="text/css" href="Hotel_Booking/style.css">
</head>
<body>
        <nav>
            <img src ="./logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
                 onclick="window.location.reload();">
                 <div class="ho">
                    <a class="home" href="index.php">Home</a>
                    <a class="package" href="suggestionLocation.php">Packages</a>
                    <a class="booking" href="mybookings.php">My Bookings</a>
                    <a class="hotel" href="hotel.php">Hotels</a>
                 </div>
            
            <ul class="navbar">
                <li>
                    <?php
                    if (isset($_SESSION['id'])){
                        echo '<div class="profile"><a href="Account.php"><i class="fa-solid fa-user"></i></a></div>';
                    } else {
                        echo '<a class="signup-btn" <a href="SignUp.php">Sign Up</a></a>';
                        echo '<a class="login-btn" <a href="Login.php">Login</a></a>';
                    }
                    ?>
                </li>
            </ul>
        </nav>  
	<main>
		<section>
			<h2>Bookings</h2>
			<hr>
			<ul>
			<?php 
				require_once "Backend/getData.php";
				$result = fetchBookings($_SESSION['id']);
				
				if (mysqli_num_rows($result)< 1){
					echo "<span style='color: black'>No Bookings To Show</span>";
				} else {
					while($row = mysqli_fetch_assoc($result)){
			?>
				<li>
					<div class="Booking-inner">
					<h3>Booking #<?php echo $row['BookingsId'] ?></h3>
					<p>Booked Date: <?php echo $row['BookedDate'] ?></p>
					<p>Package Name: <?php echo $row['PackageName'] ?></p>
					</div>
					<span class="status status--<?php echo $row['status'] ?>"><?php echo $row['status'] ?></span>
				</li>
				<?php }}?>
			</ul>
		</section>

		<section>
			<h2 >Customized  Bookings</h2>
			<hr>
			<ul>
			<?php 
				$result = fetchCustomPacakge($_SESSION['id']);
				if (mysqli_num_rows($result)< 1){
					echo "<span style='color: black'>No Customized Bookings To Show</span>";
				} else {
					while($row = mysqli_fetch_assoc($result)){
			?>
				<li>
					<div class="Booking-inner">
					<h3>Booking #<?php echo $row['Package_id'] ?></h3>
					<p>BookedDate: <?php echo $row['BookedDate'] ?></p>
					<p>Destination: <?php echo $row['TripTo'] ?></p>
					</div>
					<span class="status status--<?php echo $row['status'] ?>"><?php echo $row['status'] ?></span>
				</li>
				<?php }}?>
			</ul>
		</section>
	</main>
</body>
</html>
