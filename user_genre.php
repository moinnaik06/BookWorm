<?php
session_start();
include 'dbcon.php';
$email = $_SESSION['email'];
$thriller = $_POST['thriller'];
$horror = $_POST['horror'];
$mystery = $_POST['mystery'];
$fiction = $_POST['fiction'];
$scifi = $_POST['scifi'];
$crime = $_POST['crime'];
$romance = $_POST['romance'];
$fiction = $_POST['others'];

$sql = "INSERT INTO user_genre(email,thriller,horror,mystery,fiction,scifi,crime,romance,others) VALUES('$email','$thriller','$horror','$mystery','$fiction','$scifi','$crime','$romance','$others')";

if (mysqli_query($conn, $sql)) {
	header('location: index.html');
}else {
	mysqli_error($conn);
}

?>