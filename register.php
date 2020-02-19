 
<?php 

/*
session_start();

require "hello.php";

$ret= new hello();

//User to logout

if(isset($_GET['status']) && $_GET['status']=='loggedout')
{
	$ret->Logout();
}

if(isset($_GET['status']) && $_GET['status']=='error')
{
	$ret->Logout();
}



if($_POST &&  isset($_POST['login']))
{

	$response= $ret->Send();
}
*/
// define variables and set to empty values
//$uname = $email = $pass = $cpass = "";
//include 'regaction.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>German Project</title>
	<link rel="stylesheet" href="mainpage.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="JS/validate.js"></script>  
	<meta name=”viewport” content=”width=device-width, initial-scale="1.0">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
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
     function readURL(input){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload = function(e){
             $('#ID').attr('src',e.target.result);
          };
           reader.readAsDataURL(input.files[0]);
        }
     }
</script>


	<!-- ********************** OPENING PAGE ************************* -->
	<div class="bodydiv">
		<div class="navbar-scroll">
		<img src="logo123.png" class="navbar-logo">
		<ul class="Nav_Bar_Body">
<!-- 			<li class="Nav_Button" style="display: flex;float: left;"><img src="logo123.png">
			</li> -->
			<li class="Nav_Button hvr-underline-from-center"><a href="#About" class="Nav_Button_Link" style="text-decoration: none;">
				<h4>About</h4></a>
			</li>
			<li class="Nav_Button hvr-underline-from-center">
				<a href="#About" class="Nav_Button_Link" style="text-decoration: none;">

				<h4>Why Us?</h4>
			</a>
			</li>
			<li class="Nav_Button hvr-underline-from-center">
				<a href="#About" class="Nav_Button_Link" style="text-decoration: none;">
					<h4>Help</h4>
				</a>
			</li>

		</ul>
	</div>


		<div class="container1">
			<div id="register-panel">
				<center>

					<form action="regaction.php" method="post" enctype="multipart/form-data" name="register" onsubmit="return regvalidate();">

						<h4 style="color: white; letter-spacing: 4px;">Get Started</h4>
                        <img id="ID" src="img_avatar.png"/><br>
                        <div class="upload-btn-wrapper">
                          <button class="uploadbut">Choose profile pic</button>
                          <input type="file" name="upload_file" onchange="readURL(this);" accept=".png, .jpg, .jpeg" />
                        </div>
                        <br>
						<input type="Text" name="Username" id="Uname_log" placeholder="Username" class="inputbody" autofocus>
                        <input type="email" class="inputbody" placeholder="Email" name="email" autofocus>
						<input type="password" name="passwd" placeholder="Password" class="inputbody" autofocus ><br>
                        <input type="password" name="cpasswd" placeholder="Confirm Password" class="inputbody" autofocus ><br>
						<div style="display: flex; justify-content: space-around;">
							<div>
								<input type="checkbox" name="rem1" value="Terms and Conditions" class="check1">
								<label>Accept Terms and Conditions</label>
							</div>
							</div>
							<input type="submit" name="Register" value="Register" class="submitbut">
                            <a href="index.php?status=loggedout">Have an account?</a>
						</form>
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
				<div class="desc-panel">
					<h1 class="typestyle"><span style="color: rgb(0,168,246);">Energy</span><hr style="margin: 2%;border-top: none;"><span
     class="txt-rotate"
     data-period="500"
     data-rotate='[ "has never been easier. ", "on your fingertips. ", "to you, for you. ", "faster delivered than ever. ", "simplified by iNDRA. " ]'></span></h1>
<!-- 					<button class="">Get It Now</button>
	We help making change happen
	Energy has never been simpler
	Making energy easier than ever
	Inspire the iNDRA in you

-->
<button class="hvr-float-shadow"><h4>Learn More</h4></button>
</div>
</div>

<!-- VIDEO CONTAINER -->

	<div class="video-container">

		<div class="video-overlay"></div>
		<video   loop muted autoplay >
			<source src="video1.mp4" type="video/mp4">
			</video>
		</div>


</div>
<!-- 		<script src="JS/scroll.js"></script>
-->
<!-- ************************************************************** -->


<?php if(isset($response)) echo "<h4 class='alert'>".$response."</h4>";?>

<div class="infoclass-out">
	<h1 style="color: rgb(0,168,246);">About</h1>
	<div class="infoclass-content">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet mi gravida, maximus felis vel, imperdiet sapien. Nulla aliquam egestas urna in feugiat. Suspendisse mattis est vel molestie fermentum. Duis eu ligula cursus, aliquam metus non, tincidunt ligula. Integer ut blandit sapien, eget varius nunc. Curabitur risus lectus, facilisis eget ex sed, finibus dapibus metus. Sed non sollicitudin mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus sed urna nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
		Aenean facilisis nibh eu dui tempor, eu malesuada metus accumsan. Proin pellentesque faucibus tempus. Nunc lacinia blandit rhoncus. Donec urna velit, condimentum nec accumsan a, facilisis et eros. Praesent nec magna eu purus pharetra semper id sed nibh. Nulla non enim id ex congue blandit. Aliquam urna risus, consequat vel velit at, sagittis varius justo. Curabitur tincidunt nisl leo, a fringilla dui dignissim sodales. Donec nec justo eget elit pulvinar ornare vel id magna. Duis dignissim feugiat nisi vel ullamcorper. Nunc lacinia blandit rhoncus. Donec urna velit, condimentum nec accumsan a, facilisis et eros. Praesent nec magna eu purus pharetra semper id sed nibh. Nulla non enim id ex congue blandit. Aliquam urna risus, consequat vel velit at, sagittis varius justo. Curabitur tincidunt nisl leo, a fringilla dui dignissim sodales. Donec nec justo eget elit pulvinar ornare vel id magna. Duis dignissim feugiat nisi vel ullamcorper. Nunc lacinia blandit rhoncus. Donec urna velit, condimentum nec accumsan a, facilisis et eros. Praesent nec magna eu purus pharetra semper id sed nibh. Nulla non enim id ex congue blandit. Aliquam urna risus, consequat vel velit at, sagittis varius justo. Curabitur tincidunt nisl leo, a fringilla dui dignissim sodales. Donec nec justo eget elit pulvinar ornare vel id magna. Duis dignissim feugiat nisi vel ullamcorper.

</div>
</div>
<div class="footer">
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



