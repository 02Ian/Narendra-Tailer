<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "tailors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$users_fname = $_POST['fname'];
$users_address = $_POST['address'];
$users_email = $_POST['email'];
$users_phone = $_POST['phone'];
$users_message = $_POST['message'];

$users_fname = mysql_real_escape_string($users_fname);
$users_address = mysql_real_escape_string($users_address);
$users_email = mysql_real_escape_string($users_email);
$users_phone = mysql_real_escape_string($users_phone);
$users_message = mysql_real_escape_string($users_message);
  
  

$sql = "INSERT INTO feedback (`no`,`fname',`address`,`email`,`phone`,`message`) VALUES ( '$users_fname`, 'users_address', 'users_email', `users_phone`, `users_message`)";

if (mysqli_query($conn,$sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>