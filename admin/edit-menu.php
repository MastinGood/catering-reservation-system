<?php
$conn=mysqli_connect('localhost','root','','catering');

$id = $_GET['id'];
$query = "SELECT * FROM menu WHERE id= $id";
$results = mysqli_query($conn,$query);
$row=mysqli_fetch_array($results);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<?php include('../includes/nav.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="update-menu.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" class="mt-5">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Food name</label>
			    <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="ex. Adobo, Lechon">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Quantity</label>
			    <input type="number" name="quantity" class="form-control" value="<?php echo $row['quantity']; ?>" placeholder="0">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Price</label>
			    <input type="text" name="price" class="form-control" value="<?php echo $row['price']; ?>" placeholder="0">
			  </div>
			  <div class="form-group">
			  	<label>Description</label>
			  	<textarea name="desc" class="form-control"><?php echo $row['descr']; ?></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Photo</label>
			    <input type="file" name="photo" class="form-control" id="exampleFormControlInput1" placeholder="0">
			    <input type="hidden" name="oldphoto" value="<?php echo $row['photo']; ?>">
			  </div>
			  <div class="form-group">
			  	<label>Current Photo:</label><br>
			  	<img src="<?php echo $row['photo']; ?>" style="width: 300px;height: 200px;">
			  </div>
			  <div class="form-group">
			    <button type="submit" name="submit" class="btn btn-success btn-lg">Save</button>
			  </div>
			</form>
		</div>
	</div>

</div>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
</body>
</html>