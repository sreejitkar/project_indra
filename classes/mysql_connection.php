<?php

require_once 'include/cred.php';

class connect

{
	

	function Verification($user,$pass)
	{

				$conn= new mysqli(Server_Name,User,Password,Database) or 
				die("The databse is not able to get connected");


				$sql= "SELECT * FROM Users WHERE Uname =? AND Password =?";

				$pass=md5($pass);
				
				if($stmt=$conn->prepare($sql))
				{
					$stmt->bind_param("ss",$user,$pass);
					$stmt->execute();
					$result=$stmt->get_result();

					if($result->num_rows == 1 )
					{
						$row=$result->fetch_assoc();

							$_SESSION['fname']=$row['Fname'];
							$_SESSION['email']=$row['Email'];
							$_SESSION['uname']=$row['Uname'];
	
						$stmt->close();
						return true;
					}
					
				}
				

	}

}

?>