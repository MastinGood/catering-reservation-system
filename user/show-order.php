<?php
$conn=mysqli_connect('localhost','root','','catering');
$id = $_GET['id'];
$query = "SELECT * FROM menu WHERE id = $id";
$results = mysqli_query($conn, $query);
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservations</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700" rel="stylesheet">

	<style type="text/css">
		.pic{
			background-image: url('../images/3.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			width: 100%;
			height: 500px;
		}
		body{
			background-color: #E5E5E5;
			border: none!important;
		}
		.name{
			font-family: 'Open Sans', sans-serif;
			font-weight: 700;
		}
		.price{
			font-family: 'Open Sans', sans-serif;
			font-weight: 300;
		}
		.desc{
			font-family: 'Open Sans', sans-serif;
			font-weight: 300;
			font-style: italic;
		}
		input 				{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
}
	</style>
</head>
<body>
<?php include('../includes/navbar-user.php'); ?>
<div>
	<div class="row">
		<div class="col-md-12">
			<form action="save-reserve.php" action="POST">
				<div class="col-md-8 mx-auto" style="background-color: #fff; border-radius: 5px;margin-top: 100px;height: 600px;">
					<div class="row">
						<div class="col-md-6" style="margin-top: 75px;">
							<img src="<?php echo $row['photo']; ?>" style="width: 100%;height: 300px;">
						</div>
						<div class="col-md-6 mt-2 pl-5">
						<h3 class="display-4 text-left name"><?php echo $row['name']; ?></h3>
						<h3 class="display-5 price">P <?php echo $row['price']; ?></h3>
						<br>
						<p class="text-center desc"><?php echo $row['descr']; ?></p>
						<br>
						<label for="quan">Quantity</label><br>
						<input type="hidden" name="user" value="<?php echo $_SESSION['username']; ?>">
						<input type="hidden" name="orderid" value="<?php echo $row['id']; ?>">
						<input type="hidden" name="name" value="<?php echo $row['name']; ?>">
						<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
						<input type="hidden" name="desc" value="<?php echo $row['descr']; ?>">
						<input type="hidden" id="num1" name="price" value="<?php echo $row['price']; ?>" onkeyup="sum()">
						<input type="number" id="num2" name="quantity" value="<?php echo $row['quantity']; ?>" onkeyup="sum()">
						<br>
						<p id="sum" class="text-center display-4 MT-4"></p>
						<input type="hidden" name="total" value="" id="sum1">
						<br>
						<button type="submit" class="btn btn-success btn-lg btn-block">Reserve</button>
						</div>
					</div>
			</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function() {
    //this calculates values automatically
    sum();
    $("#num1, #num2").on("keydown keyup", function() {
        sum();
    });
});

function sum() {
            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;
			var result = parseFloat(num1) * parseInt(num2);

            if (!isNaN(result)) {
                document.getElementById('sum').innerHTML = "Total : P" +result;
                document.getElementById('sum1').value = result;
            }
        }
	</script>
</body>
</html>