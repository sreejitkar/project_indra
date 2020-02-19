<?php
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
echo "Connected successfully<br>Uname: ".$uname."<br>Password: ".$pass;
$sql = "SELECT id, uname, password FROM users WHERE Uname='$uname' AND Password = '$pass'";
$result = mysqli_query($conn, $sql);
echo "<br>".$sql;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "<br>id: " . $row["id"]. " <br>Retrieved Userame: " . $row["uname"]. "<br>Retrieved Password: " . $row["password"]. "<br>";
        header('location: welcome.php');
    }
} else {
    echo "<br>0 results<br>";
    echo $uname;
    echo "<br>$pass";
    header('Refresh:1;url=http://localhost/project_indra/error.php');
}

mysqli_close($conn);
?>