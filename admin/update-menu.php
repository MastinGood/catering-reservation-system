<?php
$conn=mysqli_connect('localhost','root','','catering');
$id = $_GET['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$oldphoto = $_GET['oldphoto'];
if(isset($_POST['photo']) && !empty($_POST('photo')))
{
$target_dir = "../uploads/";
$target_file = $target_dir .'.NOW().'.basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
else {
	    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
	        $query = "UPDATE menu SET name='".$name."' , quantity='".$quantity."', price='".$price."' , photo = '".$target_file."' , descr = '".$desc."' WHERE id=$id";

	       $result = mysqli_query($conn, $query);
	       if($result){
	       	header('location:index-menu.php');
	       }
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
}
$query = "UPDATE menu SET name='".$name."' , quantity='".$quantity."', price='".$price."' , descr = '".$desc."' WHERE id=$id";

	       $result = mysqli_query($conn, $query);
	       if($result){
	       	header('location:index-menu.php');
	       }


// if everything is ok, try to upload file

?>
