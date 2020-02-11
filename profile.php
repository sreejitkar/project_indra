<?php

 require_once "classes/Users.php";

 $result= new Users();

  $result->Confirm_User();

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
</head>
<body style="background-color: #bbf0f3;
background-image: linear-gradient(315deg, #bbf0f3 0%, #f6d285 74%); background-attachment: fixed;">
	<div class="bgimage"></div>
	<script type="text/javascript">
		function bringcenter(divname){
			var i;
			var x=document.getElementsByClassName("innerdiv");
			for(i=0;i<x.length;i++){
				x[i].style.display="none";
			}
			document.getElementById(divname).style.display="inline-block";
			document.getElementById(divname).style.width="50%";
		}
		function fadein(divname){
			var i;
			var x=document.getElementsByClassName("div1");
			for(i=0;i<x.length;i++){
				x[i].style.display="none";
			}
			document.getElementById(divname).style.display="inline-block";

			function checkEvt(){
    var evTypep=window.performance.getEntriesByType("navigation")[0].type;
       if (evTypep=='reload'){
         window.location.replace("index.php");
       }
      
}
checkEvt();
			
		}			
	</script>
	<ul class="head" style="z-index: 3;">
		<li style="float: left;">
			<div class="headcontain" style="float: left;">
				<div class="headcontain-inner">
					<div class="headcontain-front">
						<button class="logsign" style="float: left; width: 90%;"><h3>S M A R T L Y S E R</h3></button>
					</div>
					<div class="headcontain-back">
						<button class="logsign" style="width: 90%; float: left; color: white;"><h5>A complete solution for all your energy needs!</h5></button></li>
					</div>
				</div>
			</div>		
			<li style="float: right;">
				<div class="headcontain">
					<div class="headcontain-inner">
						<div class="headcontain-front" style="float: right; width: 90%;">
							<button class="logsign"><h4><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h4></button>
						</div>
						<div class="headcontain-back">
							<!-- <button class="logsign" style="width: 90%; float: right; color: white;"  name="logout" id='logout' onclick="logout()">Log Out</h4></button> -->
							<a class="logsign" style="text-decoration: none; font-size: 150%;" href="index.php?status=loggedout">Log Out</a>
						</li>
					</div>
				</div>
			</div>
		</li>


		</ul>

		<br><br><br><br>	
		<div class="headerdiv" style="width: 100%;">
			<div class="innerdiv mytext" id="Personal">
				<h1 class="headline" style="font-size: 400%">Personal</h1>
				<hr>
				<span class="fieldspan">Name : <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></span> <br><br>
				<span class="fieldspan">User ID</span><br><br>
				<span class="fieldspan">Email</span><br>
				<span class="fieldspan"></span>


			</div>
			<div class="innerdiv mytext" id="Devices">
				<h1 class="headline" style="font-size: 400%">Devices</h1>
				<hr>
				<center>
				<div style="display: inline-flex; justify-content:space-between;">

				<div class="innerdiv" tabindex="1" style="margin: 10px;"> 
					<h1>Hello Device 1</h1>
				</div>
				<div class="innerdiv" tabindex="2" style="margin: 10px;">
					<h1>Hello Device 2</h1>
				</div>
				<div class="innerdiv" tabindex="1" style="margin: 10px;"> 
					<h1>Hello Device 3</h1>
				</div>
			</div>
		</center>
			</div>
		</div>
		<div class="footer">
			<center>
				<div class="footermid">
					<div class="footermid-el">
						<li style="list-style: none;">
							<ul class="footer-list-el"><h3><b>THE TEAM</b></h3></ul>
							<br>
							<ul class="footer-list-el">Know us</ul>
							<ul class="footer-list-el">Members</ul>
							<ul class="footer-list-el">Acknowledgments</ul>
							<ul class="footer-list-el">Thank Us</ul>
						</li>	
					</div>
					<div class="footermid-el">
						<li style="list-style: none;">
							<ul class="footer-list-el"><h3><b>HELP</b></h3></ul>
							<br>
							<ul class="footer-list-el">Documentation</ul>
							<ul class="footer-list-el">Read Logs</ul>
							<ul class="footer-list-el">Report an Issue</ul>
							<ul class="footer-list-el">Customer Forum</ul>
						</li>	
					</div>
					<div class="footermid-el">
						<li style="list-style: none;">
							<ul class="footer-list-el"><h3><b>OUR SERVICES</b></h3></ul>
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
					<h5>s m a r t y l s e r 	&copy;</h5>
					<h7>a place for all your enrgy needs and solutions.</h7>
				</div>
			</center>
		</div>
	</body>
	</html>