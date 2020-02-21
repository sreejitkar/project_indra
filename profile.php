<?php

/*require_once "classes/Users.php";

$result= new Users();

$result->Confirm_User();*/

session_start();
$fname=$_SESSION['fname'];
$email=$_SESSION['email'];
$uname=$_SESSION['uname'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="profile.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$('#btn-search').on("click", function() 
			{
				$('#search').fadeToggle(250);
			});
		});
	</script>
</head>
<body>


	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(document).scrollTop() > 100) {
				$('.navbar-scroll').addClass('color-change');
				$('.navbar-logo').addClass('size-change');
				$('.Nav_Button').addClass('margin-change');
				
			} else {
				$('.navbar-scroll').removeClass('color-change');
				$('.navbar-logo').removeClass('size-change');
				$('.Nav_Button').removeClass('margin-change');
				
			}
		});
	</script>

	<div class="bodydiv">


		<div class="navbar-scroll">

			<img src="logo123.png" class="navbar-logo">
			<ul class="Nav_Bar_Body">

				<li class="Nav_Button hvr-underline-from-center"><a href="#About" class="Nav_Button_Link" style="text-decoration: none;">
					<h4>About</h4></a>
				</li>
				<li class="Nav_Button hvr-underline-from-center">
					<a href="#About" class="Nav_Button_Link" style="text-decoration: none;">

						<h4>Why Us?</h4>
					</a>
				</li>
				<li class="Nav_Button hvr-underline-from-center">
					<a href="index.php?status=loggedout" class="Nav_Button_Link" style="text-decoration: none;">
						<h4>Logout</h4>
					</a>
				</li>

			</ul>

		</div>
		<div>
		<div>
			<h3>Name</h3><p><h4><?php echo $fname ?></h4></p>
			<h3>User Name</h3><p><h4><?php echo $uname ?></h4></p>
			<h3>Email ID</h3><p><h4><?php echo $email ?></h4></p>
			<h3>API </h3>
			<h3></h3>
		</div>
		<br>
			<div class="wrap-collabsible">
				<input id="collapsible" class="toggle" type="checkbox">
				<label for="collapsible" class="lbl-toggle" >
					<div>
						<h3 style="letter-spacing: 2px; float: left;">APPLICANCE LED 1</h3>
					</div>
					<div style="display: inline-flex; float: right;">
						<iframe   class="frame" height="100%" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/995714/widgets/151401"></iframe>
						<iframe   class="frame" height="100%" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/995714/widgets/151404"></iframe>
						<iframe   class="frame" height="100%" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/995714/widgets/151414"></iframe>
					</div>
				</label>
				<div class="collapsible-content">
					<div class="content-inner">
						<hr>
						<div style="display: inline-flex;">

							<div class="graphs">
								<!-- VOLTAGE -->
								<iframe  class="frame" width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/995714/charts/1?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Voltage&type=spline"></iframe>
							</div>

							<div class="graphs">
								<!-- AMPERE -->
								<iframe class="frame" width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/995714/charts/2?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Ampere&type=line"></iframe>
							</div>

							<div class="graphs">
								<!-- POWER -->
								<iframe class="frame" width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/995714/charts/3?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Power&type=line"></iframe>
							</div>

						</div>
					</div>
				</div>
			</div>
</div>
	</div>

	<div class="video-container">

		<div class="video-overlay"></div>
		<video   loop muted autoplay >
			<source src="video1.mp4" type="video/mp4">
			</video>
		</div>


		<div class="footer">QWERTYUIOQWERTYUIOQWERTYUIO	
			<center>
				<div class="footermid">
					<div class="footermid-el">
						<li style="list-style: none;">
							<ul class="footer-list-el"><h3 class="footer-label"><b>THE TEAM</b></h3></ul>
							<br>
							<ul class="footer-list-el">Know us</ul>
							<ul class="footer-list-el">Members</ul>
							<ul class="footer-list-el">Acknowledgments</ul>
							<ul class="footer-list-el">Thank Us</ul>
						</li>	
					</div>
					<div class="footermid-el">
						<li style="list-style: none;">
							<ul class="footer-list-el"><h3 class="footer-label"><b>HELP</b></h3></ul>
							<br>
							<ul class="footer-list-el">Documentation</ul>
							<ul class="footer-list-el">Read Logs</ul>
							<ul class="footer-list-el">Report an Issue</ul>
							<ul class="footer-list-el">Customer Forum</ul>
						</li>	
					</div>
					<div class="footermid-el">
						<li style="list-style: none;">
							<ul class="footer-list-el"><h3 class="footer-label"><b>OUR SERVICES</b></h3></ul>
							<br>
							<ul class="footer-list-el">Energy Solutions</ul>
							<ul class="footer-list-el">Remote Environment</ul>
							<ul class="footer-list-el">Our Partners</ul>
							<ul class="footer-list-el">Thank Us</ul>
						</li>	
					</div>
				</div>
				<div class="footerend">
					<img class="imgclass" src="instagram (1).png">
					<img class="imgclass" src="facebook (1).png">
					<img class="imgclass" src="whatsapp (1).png">
					<img class="imgclass" src="twitter (1).png">
					<img class="imgclass" src="github.png">
					<img class="imgclass" src="linkedin.png">
				</div> 
				<div class="footerin">
					<br>
					<input type="email" name="contact" placeholder="name @example.com" class="footerinput"><input type="submit" value="GO!" class="footerbut" placeholder="Ping!">
					<br><br>
					<h5>indra &copy;</h5>
					<h7>a place for all your enrgy needs and solutions.</h7>
				</div>
			</center>
		</div>
	</body>
	</html>