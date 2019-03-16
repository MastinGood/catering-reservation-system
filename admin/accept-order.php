<?php
$conn=mysqli_connect('localhost','root','','catering');
$id = $_GET['id'];
$query = "UPDATE reserve SET status= 1 WHERE id=$id";
$result = mysqli_query($conn, $query);
if($result){
header('location: ../admin/list-order.php');
}

?>