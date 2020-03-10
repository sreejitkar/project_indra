<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectindra";
$uname = test_input($_POST["Username"]);
$pass = test_input($_POST["passwd"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$pass=md5($pass);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE (Uname='$uname'OR Email = '$uname') AND Password = '$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $uname=$row["Uname"];
        $fname=$row["Fname"];
        $email=$row["Email"];
        
        $_SESSION['uname']=$uname;
        $_SESSION['fname']=$fname;
        $_SESSION['email']=$email;
        $_SESSION['logged_in']='Active';
        header('location: indra.php');
    }
} else {
    /*echo "<html>";
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js'></script>";
    echo "<body>";
    echo "<script>swal('Username or password is incorrect','','warning')</script>";
    echo "</body>";
    echo "</html>";*/
    $_SESSION['uname']=$uname;
    $_SESSION['error'] = 'Incorrect Username or Password';
    header('location: index.php');
}

mysqli_close($conn);
?>