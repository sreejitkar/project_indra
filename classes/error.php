<?php
session_start();

?>


<!DOCTYPE html>
<html>

<head>
	<title>Error</title>
</head>

<body>

<center>
	<?php 
	echo $_SESSION['message'];
	?>


	<a href="/index.php?status=error">HOME</a>
</center>
</body>
</html>


