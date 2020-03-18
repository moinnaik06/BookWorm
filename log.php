<?php
session_start();
$count = 0;
include 'dbcon.php';
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

if ($count == 1) {
	echo '<script>alert("Login Successful")</script>';
 	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	        $_SESSION['email'] = $_POST['email'];
	        if($_SESSION['email']) {
	            header('location: books.php');
	        }
	    }
}else
{
	echo '<script>alert("Login Unsuccessful")</script>';
}
?>
