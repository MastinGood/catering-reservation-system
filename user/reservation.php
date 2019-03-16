
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<?php include('../includes/navbar-user.php'); ?>
<?php
$conn=mysqli_connect('localhost','root','','catering');
$query = "SELECT * FROM reserve WHERE status = 0 && user = '$user' ";
$results = mysqli_query($conn,$query);
?>
<div class="container">
  <div class="rows">
    <div class="col-md-12">
      <div class="col-md-10 mx-auto mt-4">
        <h2 class="display-4 ">Reservations</h2>
        <br>
        <table class="table table-striped">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Food</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach($results as $result)
      {
       ?>
      <tr>
        <td><?php
          $id = $result['orderid'];
          $conn=mysqli_connect('localhost','root','','catering');
          $query = "SELECT * FROM menu WHERE id = $id";
          $resultz = mysqli_query($conn,$query);
          foreach($resultz as $resultzz){
            $photo = $resultzz['photo'];
          }
          $ph = $photo;
          ?>
          <img src="<?php echo $ph; ?>" height="70" width="70"></td>
        <td><?php echo $result['name']; ?></td>
        <td><?php echo $result['price']; ?></td>
        <td><?php echo $result['quantity']; ?></td>
        <td><?php echo $result['total']; ?></td>
        <td><span class="badge badge-info" style="font-size: 1rem;padding: 5px auto;"><?php
        if($result['status'] == 0){
          echo "waiting for approval";
        }
          ?></span></td>
        <td><a href="delete-reserve.php?id=<?php echo $result['id']; ?>" class="btn btn-danger">Cancel Reservation</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

      </div>
    </div>
  </div>
</div>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
</body>
</html>