<?php

/*require_once "classes/Users.php";

$result= new Users();

$result->Confirm_User();*/

session_start();
if($_SESSION['logged_in']!='Active'){
header("Location: index.php"); 
}
else{
$fname=$_SESSION['fname'];
$email=$_SESSION['email'];
$uname=$_SESSION['uname'];

}

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
<body style="background-color: black;">


	<script type="text/javascript">
		$(window).scroll(function() {
			if ($(document).scrollTop() > 20) {
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
					<a href="logout.php" class="Nav_Button_Link" style="text-decoration: none;">
						<h4>Logout</h4>
					</a>
				</li>
			</ul>
		</div>


		<center>
			<div>
				<div style="display: flex; text-align: ">
					<table class="det_table">
						<tr>
							<td><h2 class="det_header">Name</h2></td>

							<td><h3 class="det_header1"><?php echo $fname ?></h3></td>
						</tr>
						<tr>
							<td><h2 class="det_header">Username</h2></td>
							<td><h3 class="det_header1"><?php echo $uname ?></h3></td>
						</tr>
						<tr>
							<td><h2 class="det_header">Email- ID</h2></td>
							<td><h3 class="det_header1"><?php echo $email ?></h3></td>
						</tr>
					</table>
				</div>
			</center>


			<br><br>
			<div class="wrap-collabsible">
				<input id="collapsible" class="toggle" type="checkbox">
				<label for="collapsible" class="lbl-toggle" >
					<div>
						<h3 style="letter-spacing: 2px;">APPLICANCE LED 1</h3>
					</div>
					<br>
					<div style="display:flex; justify-content: space-around;">
						<!-- <iframe style="border: 1px solid #cccccc; border-radius: 10px;" src="https://thingspeak.com/channels/995714/widgets/152002"></iframe> -->
						<iframe style="border: 1px solid #cccccc; border-radius: 10px;" src="https://thingspeak.com/channels/995714/widgets/152005"></iframe>
						<iframe style="border: 1px solid #cccccc; border-radius: 10px;" src="https://thingspeak.com/channels/995714/widgets/152006"></iframe>
					</div>
					<div style="display: flex; width: 100%; justify-content: center;">
						<button class="switchbut" id="light-on">ON</button>
						<button class="switchbut" id="light-off">OFF</button>				
					</div>
					<script>
						document.getElementById('light-on').addEventListener('click', function() {
							var ts_api_key = "80TOVS0ZIBOLVEDM";
							var url = "http://api.thingspeak.com/update?api_key="+ ts_api_key + "&field1=1"
							$.getJSON(url, function(data) {
								console.log(data);
							});
						});

						document.getElementById('light-off').addEventListener('click', function() {
							var ts_api_key = "80TOVS0ZIBOLVEDM";
							var url = "http://api.thingspeak.com/update?api_key="+ ts_api_key + "&field1=0"
							$.getJSON(url, function(data) {
								console.log(data);
							});
						});
					</script>
				</label>
				<div class="collapsible-content">
					<div class="content-inner">
						<hr>
						<div style="display: inline-flex; justify-content: space-between;">
						<div class="graphs">
							<!-- AMPERE -->
							<iframe class="frame" width="450" height="260" style="border:none;" src="https://thingspeak.com/channels/995714/charts/2?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Ampere&type=line"></iframe>
						</div>

						<div class="graphs">
							<!-- POWER -->
							<iframe class="frame" width="450" height="260" style="border:none;" src="https://thingspeak.com/channels/995714/charts/3?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Power&type=line"></iframe>
						</div>

					</div>
				</div>
			</div>
		</div>


<div class="footer">
	<center>
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