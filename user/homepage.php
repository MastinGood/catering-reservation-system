<?php
$conn=mysqli_connect('localhost','root','','catering');
$query = "SELECT * FROM menu";
$results = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style type="text/css">
		.pic{
			background-image: url('../images/3.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			width: 100%;
			height: 500px;
		}
		body{
			background-color: #f6f9fc;
			border: none!important;
		}
	</style>
</head>
<body>
<?php include('../includes/navbar-user.php'); ?>

<div class="pic"></div>
<div class="container">
	<div class="row">
		<br>
		<br>
		<h1 class="display-4 mx-auto">All Menu</h1>
		<br>
		<br>
		<div class="col-md-12">
			<br>
			<div class="row">
			<br>
			<br>
			<?php
			foreach($results as $result)
			{
			?>
			<div class="col-md-4">
				<div class="card shadow p-3 mb-5 bg-white rounded" >
				  <img class="card-img-top" src="<?php echo $result['photo']; ?>" alt="Card image cap" height="200">
				  <div class="card-body">
				    <h5 class="card-title"><?php echo $result['name']; ?></h5>
				    <p class="card-text"><?php echo $result['descr']; ?></p>
				    <a href="show-order.php?id=<?php echo $result['id']; ?>" class="btn btn-primary btn-block">Reserve</a>
				  </div>
				</div>
			</div>
			<?php  } ?>
		</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
$('.carousel').carousel();
</script>
</body>
</html>