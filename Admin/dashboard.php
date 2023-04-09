<?php require_once "../Backend/getCount.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="Dassh">
        <div class="hype">  
            <img src ="../logo.png" href="#" class="logo" alt="Logo" title="Holiday Hype"
            onclick="window.location.reload();">
        </div>
        <ul>
            <li class="active"><span>Dashboard</a> </li>
        </ul>
        <ul>
          <li><a href="dashboard.php">Customize Package</a> </li>
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
                        <h2>All Packages</h2>
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
                              echo "<td><a href='../Backend/Package/update.php?id=".$row['Package_id']."'><i class='fas fa-pencil-alt'></i></a>";
                              echo "<a href='../Backend/Package/delete.php?id=".$row['Package_id']."'><i class='fas fa-trash-alt'></i></a>";
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