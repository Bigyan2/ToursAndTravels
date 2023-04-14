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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Hotel/feedback.css">
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
        </div>
        <ul>
            <li><a href="dashboard.php"><span>Dashboard</a> </li>
        </ul>
        <ul>
          <li><a href="Package.php">Package</a> </li>
        </ul>
        <ul>
          <li><a href="feedback.php">Feedback</a> </li>
        </ul>
        <ul>
          <li><a href="Bookings.php">Bookings</a> </li>
        </ul>
        <ul>
          <li><a href="hotel.php">Hotel</a> </li>
        </ul>
        <ul>
          <li><a href="../Backend/logout.php">Logout</a> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="user">
                    <a>Feedback</a>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="pack">
                    <div class="title">
                        <h2>All Feedbacks</h2>
                        <div class="search_box">
                            <input type="text" placeholder="Search.." id="find" onkeyup="search()"> 
                        </div>
                    </div>

                    <table id="packageTable">
                        <tr>
                            <th>Feedback By</th>
                            <th>Feedback</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php 
                          require_once "../Backend/getData.php";
                          $result = fetchFeedbacks();
                          while($row=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                              echo "<td>".$row['Username']."</td>";
                              echo "<td>".$row['Feedback']."</td>";
                              echo "<td>".$row['status']."</td>";
                              echo "<td><a href='../Backend/Approve/approveFeedback.php?id=".$row['FeedbackId']."&approve=yes'><i class='fas fa-check'></i></a>";
                              echo "<a href='../Backend/Approve/approveFeedback.php?id=".$row['FeedbackId']."&approve=no'><i class='fas fa-times'></i></a>";
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