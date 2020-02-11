<?php

require_once 'include/cred.php';

class connect
{
	private $conn;

	function connect()
	{
		$this->conn= new mysqli(Server_Name,User,Password,Database) or 
				die("There is an issue Connection to the database");
	}
	function Verification($user,$pass)
	{
		$conn= 

				$query= "Select * from Sign_Info where Username= ? and Auth_String= ? limit 1";
				if($stmt= $this->conn->prepare($query)){

					$stmt->bind_param('ss',$user,md5($pass))
					$stmt->execute();

					if($stmt->fetch())
					{
						$stmt->close();
						return true;
					}


				}


	}

}

?>