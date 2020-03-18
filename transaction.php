<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<br><br>
<div class="container">
  <div align="center">
  <form action="pgRedirect.php" method="post">
    <div class="row">
      <div class="col-md-4">
        <label>Order ID</label>
        <input type="text" id="ORDER_ID" name="ORDER_ID" value="<?php error_reporting(E_ALL ^ E_WARNING);  echo uniqid(O); ?>" style="border: none" readonly>
      </div>

      <div class="col-md-4">
        <label>Customer ID</label>
        <input type="text" id="CUST_ID" name="CUST_ID" value="<?php error_reporting(E_ALL ^ E_WARNING); echo uniqid(C); ?>" style="border: none" readonly>
      </div>

      <div class="col-md-4">
        <label>Industry Type ID</label>
        <input type="text" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="RETAIL" style="border: none" readonly>
      </div>            
    </div>

    <div class="row">
      <div class="col-md-4">
        <label>Channel ID</label>
        <input type="text" id="CHANNEL_ID" name="CHANNEL_ID" value="WEB"style="border: none" readonly>
      </div>

      <div class="col-md-4">
        <label>Total</label>
        <input type="text" name="TXN_AMOUNT" value ="<?php echo intval(1); ?>" style="border: none" readonly>
      </div>
           
    </div>

    <div class="row">
      <input type="submit" value="Proceed to Checkout">
    </div>    
  </form>
</div>
</div>
</div>

</body>
</html>