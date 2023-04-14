<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../display/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="packageAdd.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Admin Panel</title>
</head>
<body>
  <?php 
    if (isset($_SESSION['mssg'])){
      echo '<script>swal("'.$_SESSION['mssg'].'", {icon: "success"})</script>';
      unset($_SESSION['mssg']);
    }
  ?>
       <div class="Dassh">
        <div class="hype">  
            <img src ="../../logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
            onclick="window.location.reload();">
        </div>
        <ul>
            <li><a href="../dashboard.php">Dashboard</a> </li>
        </ul>
        <ul>
          <li><a href="../Package.php">Package</a> </li>
        </ul>
        <ul>
          <li><a href="../feedback.php">Feedback</a> </li>
        </ul>
        <ul>
          <li><a href="../Bookings.php">Bookings</a> </li>
        </ul>
        <ul>
          <li><a href="../hotel.php">Hotel</a> </li>
        </ul>
        <ul>
          <li><a href="../../Backend/logout.php">Logout</a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    <a>Add Packages</a>
                </div>
            </div>
        </div>
    <div class="content">
      <form method="POST" action="../../Backend/Package/add.php">
          <label for="package-name">Package Name:</label>
          <input type="text" id="package-name" name="package-name" required>

          <label for="total-days">Total Days:</label>
          <input type="number" id="total-days" name="total-days" required> 

          <label for="location">Location:</label>
          <input type="text" id="location" name="location" required>

          <label for="image-link">Image Link:</label>
          <input type="text" id="image-link" name="image-link" required>

          <label for="rating">Rating:</label>
          <input type="number" id="rating" name="rating" required>

          <label for="price">Price:</label>
          <input type="number" id="price" name="price" required>

          <label for="difficulty">Difficulty:</label>
          <select id="difficulty" name="difficulty" class="input-field" required>
            <option value="">Select Difficulty</option>
            <option value="easy">Easy</option>
            <option value="medium">Moderate</option>
            <option value="hard">Difficult</option>
          </select>

          <label for="about">About:</label>
          <textarea id="about" name="about" required></textarea>

          <label for="itinerary">Itinerary:</label>
          <textarea id="itinerary" name="itinerary" required></textarea>
        <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</div>
</div>
</body>
</html>