<?php
session_start();
include 'dbcon.php';
$review = $_GET['review'];
$book_name = $_GET['book_name'];
$email = $_SESSION['email'];

$sql = "INSERT INTO user_ratings(email,book_name,review) VALUES ('$email','$book_name','$review')";
if (mysqli_query($conn, $sql)) {
	$sql1 = "SELECT * FROM user_ratings WHERE book_name='$book_name'";
	$result1 = mysqli_query($conn , $sql1);
	$count = mysqli_num_rows($result1);
	$total = 0;

     function detect_sentiment($string){
      $string = urlencode($string);
      $api_key = "b20c12ed7f23a1c2d3c79dd3e4d7d8";
      $url = 'https://api.paysify.com/sentiment?api_key='.$api_key.'&string='.$string.'';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $result = curl_exec($ch);
      $response = json_decode($result,true);
      curl_close($ch);
      return $response;
      }	

	while ($row1 = mysqli_fetch_array($result1)) {
	 	$quote = $row1['review'];
	  $a = intval(0);
      $data = detect_sentiment($quote);
      $data['data']['state'];
      if($data['data']['state'] == 'Negative'){
      	$a=1;
      }
      elseif($data['data']['state'] == 'Positive'){
      	$a=5;
      }
      else{
      	$a=3;
      }
      $total += $a;
	 } 
	 $sum= floatval(0);
	 $sum = $total/$count;

	 $sql2 = "UPDATE all_books SET rating = '$sum' WHERE book_name='$book_name'";
	 mysqli_query($conn, $sql2);
	 header('location: books.php');
}
?>