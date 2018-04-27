<?php
	require_once(dirname(__FILE__).'/main.php');
        session_start();
	$sessionbrowser = isset($_SESSION['sessionbrowser']) ? $_SESSION['sessionbrowser'] : "";
	if($sessionbrowser == "" || $sessionbrowser == "NULL"){
		$_SESSION['sessionbrowser'] = session_id();
		echo"<meta http-equiv='Refresh'>";
		exit;
	}
	
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
		<script src="../assets/js/respond.js"></script>
		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.js"></script>
		<![endif]-->	
    </head>
    <body>	
		
	
		<div class="section1">
			<div class="container">
				<div id="header">
					<div class="row">
						<div class="col-lg-2 col-md-2">
							<img src="assets/img/logo2.png" class="logo">
						</div>
						<div class="col-lg-10 col-md-10 pull-right">
							<ul class="linkheader">
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="news.php">News &amp; Events</a></li>
								<li><a href="getinvolved.php">Get Involved</a></li>
								<li><a href="program.php">Program</a></li>
								<li><a href="aboutus.php">About Us</a></li>
								<li><a href="index.php" class="active">Home</a></li>							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="gradientsky">
			<div class="banner">
				<div class="container">
					
					<img src="assets/img/cloud.png" style="width:50px;position:absolute;margin:220px 100px 100px 300px;opacity:1;">
					<img src="assets/img/cloud.png" style="width:40px;position:absolute;margin:270px 100px 100px -70px;opacity:1;">				
					<img src="assets/img/cloud.png" style="width:100px;position:absolute;margin:150px 100px 100px -170px;opacity:0.5;">
					<img src="assets/img/map.png" style="position:absolute;margin:-10px 100px 100px 350px;opacity:0.3;width:1100px;">
					
					<div style="margin:160px 100px 100px 780px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/1.jpg" width="60"></div>
					<div style="margin:90px 100px 100px 610px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/2.jpg" width="60"></div>
					<div style="margin:205px 100px 100px 610px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/3.jpg" width="60"></div>
					<div style="margin:55px 100px 100px 410px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/4.jpg" width="60"></div>
					<div style="margin:35px 100px 100px 870px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/5.jpg" width="60"></div>
					<div style="margin:80px 100px 100px 1000px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/6.jpg" width="60"></div>
					<div style="margin:220px 100px 100px 930px;border-radius:200px;width:70px;height:70px;background:transparent;border:5px solid rgba(255,255,255,0.5);position:absolute;overflow:hidden;"><img src="assets/img/7.jpg" width="60"></div>
					
					<div class="row">
						<div class="col-lg-5 col-md-5">
							<div class="slogan">A little help from you will change their lives forever
							<br/>
							<br/>
							<a class="link-line-blue" href="https://www.paypal.com/donate/?token=WB9FZh6WIwiZWEX15jPAGyiyJhvn-kutSmzKRNKdfhco_OAlyLHMExPZKrV4-nhmQIFGMG&country.x=US&locale.x=US">Donate Now</a></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="section2">
				<div class="container">					
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="paddinginsidebox">
								<div class="title" style="color:#ffffff;"><i class="icon-heart" style="color:#b7cb43;font-size:40px;margin-right:20px;"></i>What is CERDAS</div>
								<div class="desc">CERDAS is a community powered, volunteer based organization; established in Seattle, Washington</div>						
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="paddinginsidebox">
								<div class="title" style="color:#ffffff;"><i class="icon-leaf" style="color:#b7cb43;font-size:40px;margin-right:20px;"></i>What we do?</div>
								<div class="desc">We provide Indonesian children access to an education through a scholarship program and offer relief assistance in the event of a natural disaster or natural emergency in Indonesia.</div>						
							</div>
						</div>	
						<div class="col-lg-4 col-md-4">
							<div class="paddinginsidebox">
								<div class="title" style="color:#ffffff;"><i class="icon-gears" style="color:#b7cb43;font-size:40px;margin-right:20px;"></i>How can i contribute?</div>
								<div class="desc">Donate: Make a tax-deductible donation or become our monthly pledge partner 
								Volunteer: CERDAS is always in need of dedicated individuals to help with our fundraising activities and outreach efforts.</div>						
							</div>
						</div>						
					</div>			
				</div>
			</div>
		</div>
		
		<div class="section3">
			<div class="container">	
				
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="titlesection"><span style="color:#b7cb43;">About</span> <span style="color:#7fc5d4;">Us</span></div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="boxabout" style="padding:0px;border:0px;">
							<div class="title2 text-left" style="color:#7fc5d4;height:150px;background:url(assets/img/about1.jpg);">
								<div style="color:#ffffff;padding:105px 0px 0px 30px;"><i class="icon-cloud-upload" style="font-size:30px;margin-right:10px;"></i>Mission</div>
							</div>
						</div>
						<div style="padding:30px;background:#7fc5d4;">
							<div class="desc  text-left" style="padding:0px 0px 20px 0px;color:#ffffff;">CERDAS Foundation was established in 2007 in Seattle, WA. We are a 501(c)3 non-profit organization registered in the State of Washington. </div>						
							<div class="text-left"><a href="aboutus.php#mission" class="linkline" style="color:#ffffff;border:1px solid #ffffff;">Read More</a></div>						
						</div>
					</div>					
					<div class="col-lg-4 col-md-4">
						<div class="boxabout" style="padding:0px;">
							<div class="title2 text-left" style="color:#7fc5d4;height:150px;background:url(assets/img/about3.jpg);">
								<div style="color:#ffffff;padding:105px 0px 0px 30px;"><i class="icon-book" style="font-size:30px;margin-right:10px;"></i>History</div>
							</div>
						</div>
						<div style="padding:30px;background:#ffffff;border:1px solid #eeeeee;border-top:0px;">
							<div class="desc  text-left" style="padding:0px 0px 20px 0px;">The CERDAS Foundation story began with a small scholarship program.  It was in 2001 when members of Pengajian-Seattle, a small Indonesian Muslim community in Seattle.</div>						
							<div class="text-left"><a href="aboutus.php#history"  class="linkline">Read More</a></div>						
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						<div class="boxabout" style="padding:0px;">
							<div class="title2 text-left" style="color:#7fc5d4;height:150px;background:url(assets/img/about2.jpg);">
								<div style="color:#ffffff;padding:105px 0px 0px 30px;"><i class="icon-group" style="font-size:30px;margin-right:10px;"></i>Our Officers</div>
							</div>
						</div>
						<div style="padding:30px;background:#ffffff;border:1px solid #eeeeee;border-top:0px;">
							<div class="desc  text-left" style="padding:0px 0px 20px 0px;">Our team is comprised of volunteers who share the same vision of improving the lives of children through education by making basic education accessible to all of them.</div>						
							<div class="text-left"><a href="aboutus.php#officers"  class="linkline">Read More</a></div>						
						</div>
					</div>
										
				</div>
				
				<div class="row" style="padding-top:30px;padding-bottom:0px;">
					<div class="col-lg-4 col-md-4">
						<div class="boxabout" style="padding:0px;">
							<div class="title2 text-left" style="color:#7fc5d4;height:150px;background:url(assets/img/about4.jpg);">
								<div style="color:#ffffff;padding:105px 0px 0px 30px;"><i class="icon-question-sign" style="font-size:30px;margin-right:10px;"></i>FAQ</div>
							</div>
						</div>
						<div style="padding:30px;background:#ffffff;border:1px solid #eeeeee;border-top:0px;">
							<div class="desc  text-left" style="padding:0px 0px 20px 0px;">Please browse through our frequently asked questions to learn more about CERDAS Foundation. Feel free to contact us if you can’t find the answer to your question. </div>						
							<div class="text-left"><a href="aboutus.php#faq"  class="linkline">Read More</a></div>						
						</div>
					</div>

					<div class="col-lg-8 col-md-8">
						<div class="row">	
							<div class="col-lg-6 col-md-6" style="padding-right:0px;">
								<div style="height:368px;background:url(assets/img/about5.jpg);">
									<div class="title2 text-left" style="color:#ffffff;padding:310px 0px 0px 30px;"><i class="icon-bar-chart" style="color:#ffffff;font-size:40px;margin-right:20px;"></i>Financial Statements</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6" style="padding-left:0px;">															
								<div style="padding:30px;background:#b7cb43;height:368px;">
									<div class="desc" style="padding:0px;color:#ffffff;">We make our financial statements available to the public. everybody can access it. every year we always make financial statements.<br/><br/></div>		
									<div class="text-left"><a  href="aboutus.php#finance" class="linkline" style="color:#ffffff;border:1px solid #ffffff;">Read More</a></div>	
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
		
        <div class="section4" style="background: #111111 url(assets/img/section4.jpg) center center no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6" style="color:#ffffff;">
						<div style="font-size:32px;padding-top:50px;"><span style="color:#b7cb43;">Our</span> <span style="color:#7fc5d4;">Program</span></div>
						<div style="padding-top:15px;font-size:14px;line-height:23px;">
						While education is widely acknowledged as the key to breaking the cycle of poverty, the people who need it the most are the ones who are often left behind. Economic barriers often the most important factor that exclude these underprivileged children from educational opportunity in the developing world.
						<br/><br/><a href="program.php#overviewprogram" class="linkline" style="color:#ffffff;border:1px solid #ffffff;">Read More</a>
						<br/><br/>
						<div class="row">
							<div class="col-lg-6 col-md-6">
								<ul class="listblack">
									<li><a href="program.php#guidelines">Program Guidelines</a></li>
									<li><a href="program.php#wherewework">Where We Work </a></li>
									<li><a href="program.php#beneficiaries">Our Beneficiaries </a></li>
								</ul>
							</div>
							<div class="col-lg-6 col-md-6">
								<ul class="listblack">
									<li><a href="program.php#coordinator">Our Coordinators </a></li>
									<li><a href="program.php#successstories">Success Stories </a></li>
									<li><a href="program.php#disaster">Disaster Relief Program </a></li>
								</ul>
							</div>
						</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 pull-right" style="color:#ffffff;">
						<div style="width:100%;background:#7fc5d4;height:480px;margin:60px 0px 0px 0px;">
							<div style="font-size:32px;color:#ffffff;height:60px;background:#ffffff;">
								<div style="padding:6px 0px 0px 30px;"><span style="color:#b7cb43;">Get</span> <span style="color:#7fc5d4;">Involved</span></div>
							</div>
							<div style="background:url(assets/img/invloved.jpg) center center no-repeat;height:210px;">
								
							</div>
							<div style="padding:10px 30px 30px 30px;font-size:16px;line-height:26px;">
								<ul class="listblack2">
									<li><a href="getinvolved.php#monthlypledger">Become A Monthly Pledge Partner.</a></li>
									<li><a href="getinvolved.php#donatetocerdas">Donate to CERDAS </a></li>
									<li><a href="getinvolved.php#sponsorship">Sponsorship</a></li>
									<li><a href="getinvolved.php#volunteer" style="border:0px;">Be a Volunteer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="section5">
			<div class="container">	
				
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="titlesection"><span style="color:#b7cb43;">News &amp;</span> <span style="color:#7fc5d4;">Events</span></div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<a href="banjarnegara.php" style="text-decoration:none;">
							<div style="position:absolute;width:150px;height:150px;background:#eeeeee;"><img src="assets/img/newsbanjar.jpg"></div>
							<div style="padding:0px 40px 0px 170px;">
								<div style="font-weight:bold;font-size:18px;color:#333333;">Banjarnegara Landslide Disaster Urgent Appeal</div>
								<div style="font-size:13px;padding:5px 0px 0px 0px;color:#888888;font-style:italic;">December 17th, 2014</div>
								<div style="font-size:14px;padding-top:10px;color:#333333;">A deadly landslide struck off the mountainous area of Banjarnegara District in Central Java, Indonesia. Wiped out over 100 houses in and near Sampang Village and displaced more than 500 people. </div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 col-md-6">
						<a href="foodbazar.php" style="text-decoration:none;">
							<div style="position:absolute;width:150px;height:150px;background:#eeeeee;"><img src="assets/img/news1.jpg"></div>
							<div style="padding-left:170px;">
								<div style="font-weight:bold;font-size:18px;color:#333333;">Save the Date!. Cerdas Food Bazar. Sat, September 20</div>
								<div style="font-size:13px;padding:5px 0px 0px 0px;color:#888888;font-style:italic;">September 16th, 2013</div>
								<div style="font-size:14px;padding-top:10px;color:#333333;">Spend your Saturday, 28 September 2013 at CERDAS Bazaar, and experience what has become a yearly tradition! Our annual CERDAS Bazaar features authentic Indonesian food.</div>
							</div>
						</a>
					</div>
					
					<div class="clearfix"></div>
					<br/>
					<br/>
					<br/>
					
					<div class="col-lg-6 col-md-6">
						<a href="generosity.php" style="text-decoration:none;">
							<div style="position:absolute;width:150px;height:150px;background:#eeeeee;"><img src="assets/img/news2.jpg"></div>
							<div style="padding:0px 40px 0px 170px;">
								<div style="font-weight:bold;font-size:18px;color:#333333;">Saturday, April 21st, A Night of Generosity</div>
								<div style="font-size:13px;padding:5px 0px 0px 0px;color:#888888;font-style:italic;">March 25th, 2012</div>
								<div style="font-size:14px;padding-top:10px;color:#333333;">It’s almost that time of year again, when we gather together to mingle and socialize while pooling our resources to help underprivileged children in Indonesia. We would like to let you all know that the 2012 CERDAS Annual Fundraising Dinner is on Saturday, April 21st. </div>
							</div>
						</a>
					</div>
					
					
					
					<div class="col-lg-6 col-md-6">
						<a href="foodbazar2.php" style="text-decoration:none;">
							<div style="position:absolute;width:150px;height:150px;background:#eeeeee;"><img src="assets/img/news3.jpg"></div>
							<div style="padding-left:170px;">
								<div style="font-weight:bold;font-size:18px;color:#333333;">It's that time of year again</div>
								<div style="font-size:13px;padding:5px 0px 0px 0px;color:#888888;font-style:italic;">September 16th, 2013</div>
								<div style="font-size:14px;padding-top:10px;color:#333333;">Authentic Indonesian Food, Live Entertainment, Traditional Dancing, and A Whole Lot of Fun!. Spend your Saturday at Magnuson Park enjoying authentic Indonesian food, dessert, live music, and dancing.</div>
							</div>
						</a>
					</div>
					
					<div class="clearfix"></div>
					<br/>
					<br/>
					<br/>
					
					
				</div>
				
			</div>
		</div>
		
		<div class="footer">
			<div class="container">					
				<div class="row">
					<div class="col-lg-12 col-md-12">						
						<div style="border-top:1px solid #e5e5e5;padding:10px 0px 50px;color:#999999;">
							<div class="row">
								<div class="col-lg-6 col-md-6">
								&copy; Copyright 2007-2014 <b>CERDAS Foundation</b>. All Rights Reserved
								</div>
								<div class="col-lg-6 col-md-6">
									<ul class="linkordinary">
										<li><a href="contact.php">Contact</a></li>
										<li><a href="aboutus.php#faq">FAQ</a></li>
										<li><a href="aboutus.php">About</a></li>
										<li><a href="index.php">Home</a></li>
										
										
										
									</ul>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		
		<!-- content end -->        
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap3.min.js"></script>
        <script src="assets/js/silpo.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="assets/js/jquery.mousewheel.min.js"></script>
    </body>
</html>