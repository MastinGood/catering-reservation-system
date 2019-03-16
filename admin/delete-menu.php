<?php
$conn=mysqli_connect('localhost','root','','catering');
$id= $_GET['id'];

$query = "DELETE FROM menu WHERE id=$id";

$results = mysqli_query($conn,$query);
if($results){
	header('location:index-menu.php');
}
 ?>

