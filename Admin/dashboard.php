<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../display/sweetalert.min.js"></script>
    <script src="confirm.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Admin Panel</title>
</head>
<body>
  <?php 
    require_once "../Backend/getCount.php";
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
                    <a > Admin Dashboard</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1><?php echo getUserCount();?></h1>
                        <h3>Total User</h3>
                    </div>
                    <div class="icon-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo getBookingCount();?></h1>
                        <h3>Total Bookings</h3>
                    </div>
                    <div class="icon-case">
                        <img src="booking.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo getPackageCount();?></h1>
                        <h3>Total Packages</h3>
                    </div>
                    <div class="icon-case">
                        <img src="package.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="pack">
                    <div class="title">
                        <h2>All Customized Packages</h2>
                        <div class="search_box">
                            <input type="text" placeholder="Search.." id="find" onkeyup="search()"> 
                        </div>
                    </div>

                    <table id="packageTable">
                        <tr>
                            <th>Customized by</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Children Number</th>
                            <th>Adult Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                          require_once "../Backend/getData.php";
                          $result = fetchCustomPacakge();
                          while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                              echo "<td>".$row['Username']."</td>";
                              echo "<td>".$row['FromLocation']."</td>";
                              echo "<td>".$row['ToLocation']."</td>";
                              echo "<td>".$row['StartDate']."</td>";
                              echo "<td>".$row['EndDate']."</td>";
                              echo "<td>".$row['ChildrenNumber']."</td>";
                              echo "<td>".$row['AdultNumber']."</td>";
                              echo "<td>".$row['Status']."</td>";
                              $id = $row['CustomId'];
                               echo "<td><a onClick=\"forAction('You want to approve the Customized Booking','../Backend/Approve/approveBooking.php?id=" . $id . "&approve=yes')\"><i class='fas fa-check'></i></a>";
                              echo "<a onClick=\"forAction('You want to reject the Customized Booking','../Backend/Approve/approveBooking.php?id=" . $id . "&approve=no')\"><i class='fas fa-times'></i></a></td>";
                            echo "</tr>";     
                          } 
                      ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
function search() {
    let input, filter, table, tr, td, txtValue;
    input = document.getElementById("find");
    filter = input.value.toUpperCase();
    table = document.getElementById("packageTable");
    tr = table.getElementsByTagName("tr");

    for (let i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
</body>
</html>