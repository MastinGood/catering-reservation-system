<?php
$conn=mysqli_connect('localhost','root','','catering');
$id = $_GET['id'];
$find = "SELECT * FROM reserve WHERE id = $id";
$res = mysqli_query($conn, $find);
$row=mysqli_fetch_array($res);
$quantity = $row['quantity'];
$orderid = $row['orderid'];
$menu = "UPDATE menu SET quantity='".$quantity."' WHERE id= $orderid";
$rez = mysqli_query($conn, $menu);

$query = "DELETE FROM reserve WHERE id= $id";
$result = mysqli_query($conn,$query);
if($result){
	header('location: ../user/reservation.php');
}

?>