<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "123";
$dbname = "DB1";

$firstname = $_POST['firstname'];
$email = $_POST['email'];


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE Register1 SET firstname='$firstname' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>