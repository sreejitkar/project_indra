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
	<title>German Project</title>
	<link rel="stylesheet" href="test1.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="JS/validate.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300&display=swap" rel="stylesheet">
	<meta name=”viewport” content=”width=device-width, initial-scale="1.0">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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


	<!-- ********************** OPENING PAGE ************************* -->
	<div class="bodydiv">
		<div class="navbar-scroll">
			<img src="logo123.png" class="navbar-logo">
			<div class="Nav_Bar_Body">
				<div class="Nav_Button hvr-underline-from-center">
					<a href="#About" class="Nav_Button_Link" style="text-decoration: none;">
						<h4>Settings</h4>
				</div>
				<div class="Nav_Button hvr-underline-from-center">
					<a href="logout.php" class="Nav_Button_Link" style="text-decoration: none;">
						<h4>Logout</h4>
					</a>
				</div>

			</div>
		</div>


		<div class="container1">
			<div id="login-panel">
				<center>
					<div style="text-align: center; align-items: ceenter;">
					<h1 style="color: rgba(255,255,255,0.7);letter-spacing: 20px;font-size: 200%; ">MY PROFILIA</h1></div>
					<table class="det_table">
						<tr>
							<td class="attcell">N A M E</td><td class="valuecell"><?php echo $fname ?></td>
						</tr>
						<tr>
							<td class="attcell">U S E R N A M E</td><td class="valuecell"><?php echo $uname ?></td>
						</tr>
						<tr>
							<td class="attcell">D E V I C E S</td><td class="valuecell">3</td>
						</tr>
						<tr>
							<td class="attcell">L O C A T I O N</td><td class="valuecell">Bangalore</td>
						</tr>		
						<tr>
							<td class="attcell">M A I L</td><td class="valuecell"><?php echo $email ?></td>
						</tr>					
					</table>
				</center>
			</div>
				<script type="text/javascript">
					var TxtRotate = function(el, toRotate, period) {
						this.toRotate = toRotate;
						this.el = el;
						this.loopNum = 0;
						this.period = parseInt(period, 10) || 2000;
						this.txt = '';
						this.tick();
						this.isDeleting = false;
					};

					TxtRotate.prototype.tick = function() {
						var i = this.loopNum % this.toRotate.length;
						var fullTxt = this.toRotate[i];

						if (this.isDeleting) {
							this.txt = fullTxt.substring(0, this.txt.length - 1);
						} else {
							this.txt = fullTxt.substring(0, this.txt.length + 1);
						}

						this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

						var that = this;
						var delta = 300 - Math.random() * 100;

						if (this.isDeleting) { delta /= 2; }

						if (!this.isDeleting && this.txt === fullTxt) {
							delta = this.period;
							this.isDeleting = true;
						} else if (this.isDeleting && this.txt === '') {
							this.isDeleting = false;
							this.loopNum++;
							delta = 500;
						}

						setTimeout(function() {
							that.tick();
						}, delta);
					};

					window.onload = function() {
						var elements = document.getElementsByClassName('txt-rotate');
						for (var i=0; i<elements.length; i++) {
							var toRotate = elements[i].getAttribute('data-rotate');
							var period = elements[i].getAttribute('data-period');
							if (toRotate) {
								new TxtRotate(elements[i], JSON.parse(toRotate), period);
							}
						}
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
	<div class="verticalline">
	</div>
<div class="col">
    <div class="tabs">
      <div class="tab">


        <input type="radio" id="rd1" name="rd">

        <label class="tab-label" for="rd1">APPLIANCE 1</label>

        <div class="tab-content">
        <div style="display: flex; height: 260px;">
			<iframe class="graphs" src="https://thingspeak.com/channels/995714/charts/2?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Ampere&type=line"></iframe>
			<iframe class="graphs" src="https://thingspeak.com/channels/995714/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
		</div>
		<div style="display: flex; width: 100%; justify-content: center;">
						<button class="switchbut" id="light-on" style="background-color: rgb(153, 255, 51);">ON</button>
						<button class="switchbut" id="light-off" style="background-color: rgb(204, 51, 0);">OFF</button>			
					</div>
        </div>
      </div>
      <div class="tab">
        <input type="radio" id="rd2" name="rd">
        <label class="tab-label" for="rd2">APPLIANCE 2</label>
         <div class="tab-content">
        <div style="display: flex; height: 260px;">
			<iframe class="graphs" src="https://thingspeak.com/channels/995714/charts/2?bgcolor=%23daf1f7&color=%2300c4f8&dynamic=true&results=60&title=Ampere&type=line"></iframe>
			<iframe class="graphs" src="https://thingspeak.com/channels/995714/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
		</div>
		<div style="display: flex; width: 100%; justify-content: center;">
						<button class="switchbut" id="light-on" style="background-color: rgb(153, 255, 51);">ON</button>
						<button class="switchbut" id="light-off" style="background-color: rgb(204, 51, 0);">SWITCH OFF</button>				
					</div>
        </div>
      </div>
      <div class="tab">
        <input type="radio" id="rd3" name="rd">
        <label for="rd3" class="tab-close">Close All &times;</label>
      </div>
    </div>
  </div>
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
<?php if(isset($response)) echo "<h4 class='alert'>".$response."</h4>";?>

<br>
<br>
<br>
<br>
<br>
<br>
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