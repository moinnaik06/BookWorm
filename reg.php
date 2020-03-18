<?php

include 'dbcon.php';
error_reporting(E_WARNING | E_NOTICE);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$user_id = uniqid(U);



if($password==$confirm_password) {


   
     

//get user ip address
$ip_address = $_SERVER['REMOTE_ADDR'];
//get user ip address details with geoplugin.net
$geopluginURL = 'http://www.geoplugin.net/php.gp?id='.$ip_address;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
//get city name by return array
$city = $addrDetailsArr['geoplugin_city'];




$sql = "INSERT INTO register (first_name,last_name,email,phone_no,password,confirm_password,user_id,time_zone) VALUES ( '$first_name' , '$last_name' , '$email' , '$phone_no' , '$password' , '$confirm_password' , '$user_id' ,'$city')";


if (mysqli_query($conn, $sql)) {
   echo '<script>alert("Registration Successful. ")</script>';
   // include 'farmer_main_login.html';
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$_SESSION['email'] = $email;

}

else
{
   echo '<script>alert("Passwords do not match")</script>';
}
header("Location: genre.html" );



mysqli_close($conn);
?>



