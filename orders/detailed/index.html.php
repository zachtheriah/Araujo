<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Araujo Inventory Tracker - Orders</title>
<meta name="description" content="">
<meta name="author" content="Tom Chandler">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link href="../../styles/login.css" rel="stylesheet">
<link href="../../styles/nav.css" rel="stylesheet">
<link href="../../styles/styles.css" rel="stylesheet">
<style type="text/css">
	.col1 {
		min-width: 7em;
		display:inline-block;
	}
	.col2 {
		min-width: 7em;
		display:inline-block;		
	}	
	#productName {
		min-width: 60em;
		display:inline-block;
	}
</style>
<script src="/araujo_tc/scripts/orders.js"></script>
</head>
<body>
<header>
  <h1>
    <script type="text/javascript">document.write(document.title)</script>
  </h1>
  <!-- Show Navbar -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/araujo_tc' . '/includes/nav.inc.html.php'; ?>
  <!-- Show login -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/araujo_tc' . '/includes/login.inc.html.php'; ?>
  <!-- Include drop down queries -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/araujo_tc' . '/getdata/GetDropDowns.php'; ?>
  <!-- Get tables -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/araujo_tc' . '/getdata/GetTables.php'; ?>
</header>
<div id="main">
  <section id="orders"> <br/>
    Order Detail <br/>

    <?php 
        if(isset($_GET['id'])) {
            getTable("Order Detail", $_GET['id']); 
        }
        else {
            echo 'Do not access this page directly.';
        }
    ?>

  </section>
</div>

</body>
</html>
