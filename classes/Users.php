<?php

require 'classes/mysql_connection.php';

class Users{

	function Validation($user,$pass)
	{
		$mysql= new connect();



		if($mysql->Verification($user,$pass))
		{

			//$_SESSION['status']="authorize";
			
			/*echo "<script type='text/javascript'> window.location = 'profile.php'; </script>";	}*/
			header('location: profile.php');
		}
		else {

			return "The Password or Username is Invalid";
		}
	}


	function Logout_User(){

		if(isset($_SESSION['status']))
		{
			unset($_SESSION['status']);

			if(isset($_COOKIE[session_name()])) 
				setcookie(session_name(),'',time()-10000);
			session_destroy();
		}
	}



	function Confirm_User(){

		session_start();

			if($_SESSION['status']!= "authorize")
			header("location: index.php?fail=1");
		else{
			$uname=$_SESSION['uname'];
			$fname=$_SESSION['fname'];
			$email=$_SESSION['email'];

		}
	}
}

?>