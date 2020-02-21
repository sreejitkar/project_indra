<?php




require_once "classes/Users.php";

class hello{


function Send()
{
	$member= new Users();

		if(!empty($_POST['Username']) && !empty($_POST['passwd']))
	{

		$respond = $member->Validation($_POST['Username'],$_POST['passwd']);
		return $respond;
	}

	

}

	function Logout()
	{
		if(isset($_SESSION['status']))
		{
			unset($_SESSION['status']);

			if(isset($_COOKIE[session_name()]))
				setcookie(session_name(),'', time()-10000);

			session_destroy();
		}
	}


}
?>