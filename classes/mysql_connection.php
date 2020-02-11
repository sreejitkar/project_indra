<?php

require_once 'include/cred.php';

class connect

{
	

	function Verification($user,$pass)
	{

				$conn= new mysqli(Server_Name,User,Password,Database) or 
				die("The databse is not able to get connected");


				$sql= "SELECT F_Name, L_Name FROM Sign_Info WHERE Username =? AND Auth_String =?";

				$pass=md5($pass);
				
				if($stmt=$conn->prepare($sql))
				{
					$stmt->bind_param("ss",$user,$pass);
					$stmt->execute();
					$result=$stmt->get_result();

					if($result->num_rows == 1 )
					{
						$row=$result->fetch_assoc();

							$_SESSION['fname']=$row['F_Name'];
							$_SESSION['lname']=$row['L_Name'];
	
						$stmt->close();
						return true;
					}
					
				}
				

	}

}

?>