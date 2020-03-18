<?php
session_start();
include 'dbcon.php';
$email = $_SESSION['email'];
$book_name = $_GET['book_name'];

$sql = "INSERT INTO starred_books (email,book_name) VALUES ('$email','$book_name')";
if (mysqli_query($conn, $sql)) {
	header('location: books.php');
}else {
	mysqli_error($conn);
}
?>