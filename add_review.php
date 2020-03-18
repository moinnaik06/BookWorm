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
		<title>BookWorm</title>
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

			.click{
              float: center;
              color: black;
              background-color: white;
              font-family: serif;
              font-style: bold;
              size: 200px;
              border-color: white;
              border-radius: 25px;
              font-size: 18px;
              display: inline-block;
              margin: 4px 2px;
              cursor: pointer;
              text-align: center;
              box-shadow: 0 12px 16px 0 #d9d9d9, 0 17px 50px 0 #d9d9d9;
            }

            .green{
            	color: green;
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
							<h2><b>Add a review for this book!</b></h2><br><br>
						</div>
					</div>
				</div>
				
				<div class="container">
				<!--------------- review container ------------------>
		          <div class="col-md-12 order-md-last d-flex" align="center">
		            <form action="review_process.php" method="get" class="bg-white p-5 contact-form">

		              <div class="form-group">
		                <div align="center">
		                <span><h4><b> Book : <input type="text" value="<?php $book_name = $_GET['book_name']; echo $book_name; $_SESSION['book_name'] = $book_name; ?>" name="book_name" ></b></h4></span>
		                </div>
		              </div> 

		              <div class="form-group">
		                <div align="center">
		                <label><b> Review </b></label>
		                </div>

		                <textarea type="" name="review" class="form-control" placeholder="Your Thoughts ?" required></textarea>
		              </div> 

		              <div class="form-group">
		                <div align="center">
		                  <input type='submit' value='Submit' class='btn btn-primary py-3 px-5'>
		                </div>
		              </div>
		            </form>
		           </div>  
        <!--------------- review container ------------------>
					
				</div>
			</div>
		</section>	
		<p id="back-top">
			<a href="#top"><i class="fa fa-angle-up"></i></a>
		</p>
		<footer>
			<div class="container text-center">
				<p>Designed by <a href="#">Team Qwerty</a></p>
			</div>
		</footer>

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