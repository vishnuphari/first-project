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
$sql = "DELETE FROM Register1 WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
