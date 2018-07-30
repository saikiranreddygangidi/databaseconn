<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "form";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$user=$_post["i1"];
$pass=$_post["i2"];
$sql = "INSERT INTO form_login
VALUES ($user,$pass)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
