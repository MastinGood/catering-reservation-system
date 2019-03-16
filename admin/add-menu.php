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
			<form action="add-menu-save.php" method="POST" enctype="multipart/form-data" class="mt-5">
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Food name</label>
			    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="ex. Adobo, Lechon">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Quantity</label>
			    <input type="number" name="quantity" class="form-control" id="exampleFormControlInput1" placeholder="0">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Price</label>
			    <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="0">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Description</label>
				<textarea class="form-control" name="desc"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Photo</label>
			    <input type="file" name="photo" class="form-control" id="exampleFormControlInput1" placeholder="0">
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