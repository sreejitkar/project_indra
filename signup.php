<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<title>Sign Up</title>
	<meta name=”viewport” content=”width=device-width, initial-scale="1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="validate.js"></script>
	<script src="wifithingspeak.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="bodydiv">
		<img src="logo123.png" style="width: 7%;">
		<center>
			<div class="container">	
				<div class="signup-panel">
					<div class="signup-panel-design">
<!-- 						<div style="display: flex;"> -->
							<img src="photo-1541701494587-cb58502866ab.jpeg" class="signup-panel-design-logo" style="z-index: 10;">
<!-- 						</div> -->
							<div class="signup-panel-design-text"><h3 class="signup-panel-design-text-heading"><span style="color: rgb(0,168,246); font-family: 'AnmolHindi';">e</span>NDRA</h3><br><h3>energy at your fingertips.</h3></div>
					</div>
					<div class="signup-panel-form">
						<div class="signup-panel-form-div1"><img src="roland-larsson-m2De0QR_tWo-unsplash.jpg" id="profilepic"></div>
						<div class="signup-panel-form-div2">
						<form action="" method="post" onsubmit="return regvalidate();" name="register">


							<!-- <h2 style="color: white; letter-spacing: 2px; font-size: 180%;">Sign up To <span style="color: rgb(0,168,246);">iNDRA</span></h2> -->
							<!-- <img src="roland-larsson-m2De0QR_tWo-unsplash.jpg" id="profilepic"> -->
							<br><input type="Text" name="Username" id="Uname_log" placeholder="Username" class="inputbody" autofocus>
							<input type="Text" name="fname" placeholder="Full Name" class="inputbody" autofocus><br>
							<input type="email" name="email" placeholder="E-mail ID" class="inputbody" autofocus><br>
							<input type="password" name="passwd" placeholder="Password" class="inputbody" autofocus><br>
							<input type="password" name="cpasswd" placeholder=" Confirm Password" class="inputbody" autofocus><br>
				<!-- <div style="display: flex; justify-content: space-around;">
					<div>
						<input type="checkbox" name="rem1" value="Remember Me" class="check1">
						<label>Remember Me</label>
					</div>
					<a href="#forgot" >Forgot Password?</a></div> -->
					<br>
<input type="submit" name="Register" value="REGISTER" class="submitbut">
				</form>
			</div>
			</div>
		</div>
	</div>
</center>
<div class="video-container">
	<div class="video-overlay">
	</div>
	<video loop muted autoplay >
		<source src="video1.mp4" type="video/mp4">
		</video>
	</div>
</div>


</body>
</body>
</html>