<?php
include('../auth.php');
$user = $_SESSION['username'];
$conn = mysqli_connect('localhost','root','','catering');
$query = "SELECT COUNT(id) FROM `reserve` WHERE user='$user' && status= 0";
$resultcount = mysqli_query($conn,$query);
$count = mysqli_fetch_array($resultcount);

 ?>


<div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 90px!important; color: white!important;">

        <div class="container">
            <a class="navbar-brand" href="#">Catering Reservation System</a>
            <div class="col-md-6 " id="navbarTogglerDemo03"></div>
            <div class="col-md-4">
                  <ul class="navbar-nav mr-auto mt-2" style="margin-left: -150px;">
                  <li class="nav-item active mx-2">
                    <a class="nav-link" href="../user/homepage.php" style="width: 60px;">Menu<span class="sr-only glyphicon glyphicon-dashboard">(current)</span></a>
                  </li>
                  <li class="nav-item mx-2";">
                    <a class="nav-link" style="color:#fff!important;" href="../user/reservation.php" style="width: 60px;">Reservations
                      <?php
                      if($count[0] >= 1){

                       ?>
                      <span class="badge badge-danger mr-3" style="border-radius:5px;position: absolute;font-size: 14px;">
                      <?php
                        echo $count[0];
                       ?>
                      </span>
                    <?php }?>
                    </a>
                  </li>
                  <li class="nav-item mx-2" style="margin-right :30px!important;">
                    <a class="nav-link" style="color:#fff!important; width: 60px;" style="width: 60px;" href="../user/notification.php">Notifications</a>
                  </li>
                  <li class="mx-4 nav-item">
                    <p style="width: 60px;">Welcome, <?php echo $_SESSION['username']; ?></p>
                  </li>
                  <li class="nav-item mx-4";">
                    <a class="nav-link" style="color:#fff!important; width: 60px;" href="../logouts.php">Logout</a>
                  </li>

                </ul>
            </div>
        </div>
      </nav>
    </div>