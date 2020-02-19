<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectindra";

//Data passed from form
$uname=$_POST["Username"];
$email=$_POST["email"];
$pass=$_POST["passwd"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = test_input($uname);
    $email = test_input($email);
    $pass = md5(test_input($pass));
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql_u = "SELECT * FROM users WHERE Uname='$uname'";
$sql_e = "SELECT * FROM users WHERE Email='$email'";
$res_u = mysqli_query($conn, $sql_u);
$res_e = mysqli_query($conn, $sql_e);
if (mysqli_num_rows($res_u) > 0 || mysqli_num_rows($res_e) > 0) {
  	  $name_error = "Sorry... username already taken";
    echo $name_error;   
}
else
{
    if($uname=='' && $email='' && $pass=''){$error = "Sorry... NULL Values are being inserted";}
    else{
          $sql = "INSERT INTO users(Uname,Email,Password) VALUES ('$uname','$email','$pass')";
          if (mysqli_query($conn,$sql)) 
          {
            mkdir("userimg/$uname");
            if(isset($_POST['Register']))
            {
             $uploadfile=$_FILES["upload_file"]["tmp_name"];
             $folder="userimg/$uname/";
             $target_file=$folder.basename($_FILES["upload_file"]["name"]);
             move_uploaded_file($_FILES["upload_file"]["tmp_name"],$target_file);
            }
            header('Refresh:1;url=http://localhost/project_indra/welcome.php');
          } 
         else
         {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
}
mysqli_close($conn);
?>