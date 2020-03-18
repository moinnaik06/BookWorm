<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Lattes - Onepage Multipurpose Bootstrap HTML</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
				<style type="text/css">
			* {box-sizing: border-box;}

		body { 
			  margin: 0;
			  font-family: Arial, Helvetica, sans-serif;
			}

			.header {
			  overflow: hidden;
			  background-color: #f1f1f1;
			  padding: 20px 10px;
			}

			.header a {
			  float: left;
			  color: black;
			  text-align: center;
			  padding: 12px;
			  text-decoration: none;
			  font-size: 18px; 
			  line-height: 25px;
			  border-radius: 4px;
			}

			.header a.logo {
			  font-size: 25px;
			}

			.header a:hover {
			  background-color: #ddd;
			  color: black;
			}

			.header a.active {
			  background-color: dodgerblue;
			  color: white;
			}

			.header-right {
			  float: right;
			}

			@media screen and (max-width: 500px) {
			  .header a {
			    float: none;
			    display: block;
			    text-align: left;
			  }
			  
			  .header-right {
			    float: none;
			  }
			}

			
			img {
			  opacity: 1.0;
			}

			img:hover {
			  opacity: 0.5;
			}
		</style>
	</head>
	<body id="page-top">
<div class="header">
  <a href="#" class="logo"><img src="logo.png" height="40"></a>
  <div class="header-right">
    <a href="books.php">New Books</a>
    <a href="library.php">Library</a>
    <a href="profile.php">Profile</a>
  </div>
</div>

		<section id="portfolio" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2><b>Starred Books</b></h2><br><br>
						</div>
					</div>
				</div>

				<div class="row">
					<?php
					session_start();
					$email = $_SESSION['email'];
					include 'dbcon.php';
					$starred_books = NULL;
					$sql1 = "SELECT * FROM starred_books WHERE email = '$email'";
					$result1 = mysqli_query($conn, $sql1);
					$starred_books = "('0'";
					while ($row1 = mysqli_fetch_array($result1)) {
						$starred_books = $starred_books.",";
						$starred_books = $starred_books."'".$row1['book_name']."'";
					}
					$starred_books = $starred_books.")";

				    $sql = "SELECT * FROM all_books WHERE book_name IN".$starred_books;
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)){
						echo "<div class='col-md-4' align = 'center'>";
						echo "<a href='custom_selection.php?book_name=".$row['book_name']."'><img class='abc' src = '".$row['book_image']."'></a>";
						echo "<br>";
						echo "<h4><b><span>".$row['book_name']."</span></b></h4>";
						#echo "<br>";
						echo "<span>Category :".$row['book_genre']."</span>";
						echo "<br>";
						echo "<a href='remove_from_list.php?book_name=".$row['book_name']."'><button>X</button>";
						echo "</div>";
					} 
					?>
				</div>	
			</div>
		</section>


		<section id="portfolio" class="light-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-title">
							<h2><b>Purchased Books</b></h2><br><br>
						</div>
					</div>
				</div>

				<div class="row">
					<?php
					$email = $_SESSION['email'];
					include 'dbcon.php';

					$sql = "SELECT * FROM book_purchase WHERE email = '$email'";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_array($result)){
						$book_name = $row['book_name'];
						$sql1 = "SELECT * FROM all_books WHERE book_name='$book_name'";
						$result1 = mysqli_query($conn, $sql1);
						$row1 = mysqli_fetch_array($result1);

						$book_image = $row1['book_image'];
						echo "<div class='col-md-4' align = 'center'>";
						echo "<a href='purchased_book.php?book_name=".$row1['book_name']."&email=".$email."'><img class='abc' src = '".$row1['book_image']."'></a>";
						echo "<br>";
					} 
					?>
				</div>	
			</div>
		</section>
				</div>	
			</div>
		</section>		


		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>