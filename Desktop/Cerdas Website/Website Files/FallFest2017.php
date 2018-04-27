<?php
	session_start();
	$_SESSION['sessionbrowser'] = session_id();
	require_once(dirname(__FILE__).'/main.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CERDAS  Foundation</title>
        <link href="assets/css/bootstrap3.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/style-new.css" rel="stylesheet">
        <link href="assets/css/jquery-ui-1.8.6.custom.css" rel="stylesheet">
		<link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">        	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'> 
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap3.min.js"></script>
		<script src="assets/chart/highcharts.js"></script>
		<script src="assets/chart/modules/exporting.js"></script>
		<script src="assets/js/respond.js"></script>
		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->	
    </head>
    <body style="background:#000000;">
		<div align="center" style="padding:0px 0px 50px 0px;">
			
			<div style="width:900px;color:#ffffff;padding:30px 0px 30px 0px;text-align:right;overflow:auto;">
				<div style="float:left;"><img src="assets/img/logowhite.png" width="130"></div>
				<div style="float:right;margin-top:10px;"><a href="index.php" style="color:#ffffff;border-radius:200px;border:2px solid #ffffff;padding:10px 30px;font-weight:bold;">Back to main page</a></div>
			</div>
			
			<div style="width:900px;background:#ffffff;padding-bottom:100px;min-height:1000px;color:#666666;text-align:left;font-size:15px;line-height:23px;">
				
				<div style="background:url(assets/img/ff2017.jpg);height:1166px;">		
				</div>				
								
				<div style="text-align:center;margin-top:10px;"><br><br><a href="index.php" style="color:#666666;border-radius:200px;border:2px solid #666666;padding:10px 30px;font-weight:bold;">Back to main page</a></div>
				
			</div>
		</div>
    </body>
</html>