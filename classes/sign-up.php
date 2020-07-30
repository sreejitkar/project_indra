<?php
// if(isset($_POST["Sign"])){

session_start();

$servername="localhost";
$uname="root";
$password="";
$Fname =$Lname= $EmailID = $Username = "";
$db="Website";

$pass=htmlspecialchars($_POST["pass"]);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Fname = test_input($_POST["FName"]);
  $Lname = test_input($_POST["LName"]);
  $EmailID = test_input($_POST["EmailID"]);
  $Username = test_input($_POST["Username"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


// Create connection
$conn = mysqli_connect($servername,$uname,$password,$db);

// Check connection
if (!$conn) {

    $_SESSION['message'] = "Connection failed: ";
    header("location: error.php");
}
else
{

  $checkusername= "Select * from Sign_Info where Username = ?";

  if($stmt=$conn->prepare($checkusername))
        {
          $stmt->bind_param("s",$Username);
          $stmt->execute();
          $result1=$stmt->fetch();

          if($result1)

          {

            $_SESSION['message'] ="This Username Has been taken";
            header("location: error.php");
          }

}

  $checkemail="Select * from Sign_Info where Email_ID = ?";

  if($stmt=$conn->prepare($checkemail))
        {
          $stmt->bind_param("s",$EmailID);
          $stmt->execute();
          $result=$stmt->fetch();

          if($result)

          {

            $_SESSION['message'] ="This Email Account already exists.";
            header("Location: error.php");


          }
        }

  $sql="Insert into Sign_Info values(Null,'".$Fname."','".$Lname."','".$EmailID."','".$Username."','".md5($pass)."')";

if(!mysqli_query($conn,$sql))
{
	$_SESSION['message']="Error drfghbConnection";
  header("Location: error.php");
} 
else
header("Location: /index.php");
// else
// echo "Data is inserted";

// $sql1 = "SELECT * FROM Sign_Info";


// $result = mysqli_query($conn, $sql1);

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " .$row["Sign_ID"]. " <br> - First Name: " .$row["F_Name"]. "<br> Last Name : " .$row["L_Name"]. "<br> Email-ID: ".$row["Email_ID"]."<br> Username:".$row["Username"]."<br> Password:".$row["Auth_String"]."<br";
//     }
// } else {
//     echo "0 results";
// }
}

mysqli_close($conn);
// }

?>