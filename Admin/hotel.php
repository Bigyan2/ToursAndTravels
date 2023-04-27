<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="confirm.js"></script>
    <script src="../display/sweetalert.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Hotel/hotel.css">
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
            <img src ="../logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
            onclick="window.location.reload();">
            <span>Holiday Hype</span>
        </div>
        <ul>
            <li><a href="dashboard.php"><img src="img/dashboard.png">Dashboard</a></li>
        </ul>
        <ul>
          <li><a href="Package.php"><img src="img/package.png">Package</a> </li>
        </ul>
        <ul>
          <li><a href="feedback.php" class="active"><img src="img/feedback.png">Feedback</a></li>
        </ul>
        <ul>
          <li><a href="Bookings.php"><img src="img/bookings.png">Bookings</a> </li>
        </ul>
        <ul>
          <li><a href="hotel.php"><img src="img/hotel.png">Hotel</a> </li>
        </ul>
        <ul>
          <li><a onclick="toLogout()"><img src="img/logout.png">Logout</a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    <a>Hotels</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="pack">
                    <div class="title">
                    <input type="button" value="Add Hotels" class="add_package" onClick="document.location.href='Hotel/addHotel.php'">
                        <h2>All Hotels</h2>
                        <div class="search_box">
                            <input type="text" placeholder="Search.." id="find" onkeyup="search()"> 
                        </div>
                    </div>

                    <table id="packageTable">
                        <tr>
                            <th>Package Name</th>
                            <th>Duration</th>
                            <th>Location</th>
                            <th>Price(in Rs)</th>
                            <th>Difficulty</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                          require_once "../Backend/getData.php";
                          $result = fetchPackages();
                          while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                              echo "<td>".$row['PackageName']."</td>";
                              echo "<td>".$row['Days']."</td>";
                              echo "<td>".$row['LocationName']."</td>";
                              echo "<td>".$row['Price']."</td>";
                              echo "<td>".$row['Difficulty']."</td>";
                              $id = $row['Package_id'];
                              echo "<td><a href='./Hotel/updateHotel.php?id=".$id."'><i class='fas fa-pencil-alt'></i></a>";
                              echo "<a onClick=\"forAction('You want to delete the Hotel','../Backend/Hotel/delete.php?id=" . $id . "')\"><i class='fas fa-trash-alt'></i></a>";
                            echo "</tr>";     
                          } 
                      ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>