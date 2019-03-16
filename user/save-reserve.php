<?php
$conn=mysqli_connect('localhost','root','','catering');
$user = $_GET['user'];
$orderid = $_GET['orderid'];
$name = $_GET['name'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$desc = $_GET['desc'];
$total = $_GET['total'];
$find = "SELECT * FROM menu WHERE id = $orderid";
$result1 = mysqli_query($conn,$find);
$row=mysqli_fetch_array($result1);

$newQuantity = $row['quantity'] - $quantity;
$update = "UPDATE menu SET quantity='".$newQuantity."' WHERE id=$orderid";
$result2 = mysqli_query($conn,$update);

$query = "INSERT INTO reserve (user,total,name,price,descr,quantity,orderid,status) VALUES('$user','$total','$name','$price','$desc','$quantity','$orderid',0)";
$result3 = mysqli_query($conn,$query);
if($result3){
	header('location:homepage.php');
}

?>