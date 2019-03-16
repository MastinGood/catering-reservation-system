<?php
$conn=mysqli_connect('localhost','root','','catering');
$query = "SELECT * FROM menu";
$results = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Menu</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<style type="text/css">
	.menu{
		padding: 10px 10px;
		border: 1px solid rgba(0,0,0,.125);
		border-radius: .25rem;
	}
	</style>
</head>
<body>
<?php include('../includes/nav.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="form-group">
				<a href="../admin/add-menu.php" class="btn btn-info btn-lg">Add Menu</a>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<?php
				foreach($results as $result)
				{
				?>
				<div class="col-md-3 mt-3 menu mr-3">
					<img src="<?php echo $result['photo']; ?>" style="width:100%; height: 220px;">
					<p class="text-center mt-2" style="font-size: 1.5rem;"><?php echo $result['name']; ?></p>
					<p class="text-center"><?php echo $result['descr']; ?></p>
					<label>Price: P <?php echo $result['price']; ?></label><br>
					<label class="pull-right">Quantity: <?php echo $result['quantity']; ?></label><br>
					<a href="edit-menu.php?id=<?php echo $result['id'];?>" class="btn btn-primary">Update Meal</a>
					<a href="delete-menu.php?id=<?php echo $result['id'];?>" class="btn btn-danger">Delete Meal</a>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
</body>
</html>