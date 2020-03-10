<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectindra";

//Data passed from form
$uname=$_POST["Username"];
$fname=$_POST["fname"];
$email=$_POST["email"];
$pass=$_POST["passwd"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = test_input($uname);
    $fname = test_input($fname);
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
     $_SESSION['name_takenerror']="Sorry... username or email already taken";
     $_SESSION['uname']=$uname;
     $_SESSION['fname']=$fname;
     $_SESSION['email']=$email;
//    $_SESSION['name_error']="Sorry... username or email already taken";
    /*echo "<html>";
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>";
    echo "<body>";
    echo "<script>swal('Username already taken','','warning')</script>";
    echo "</body>";
    echo "</html>";*/
    header('location: index.php');
}
else
{
    if($uname=='' && $email='' && $pass=''){$error = "Sorry... NULL Values are being inserted";}
    else{
          $sql = "INSERT INTO users(Uname,Fname,Email,Password) VALUES ('$uname','$fname','$email','$pass')";
          if (mysqli_query($conn,$sql)) 
          {
            $_SESSION['uname']=$uname;
            $_SESSION['fname']=$fname;
            $_SESSION['email']=$email;
            $_SESSION['logged_in']="Active";
            //$_SESSION['status']='authorize';
            /*mkdir("userimg/$uname");
            if(isset($_POST['Register']))
            {
             $uploadfile=$_FILES["upload_file"]["tmp_name"];
             $folder="userimg/$uname/";
             $target_file=$folder.basename($_FILES["upload_file"]["name"]);
             move_uploaded_file($_FILES["upload_file"]["tmp_name"],$target_file);*/
            header('location: indra.php');
          } 
         else
         {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
}
mysqli_close($conn);
?>