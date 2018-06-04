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
$sql = "SELECT  $firstname, $email FROM Register1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        echo "$email: " . $row["$firstname"]. " - Name: " . $row["$email"].  "<br>";
    }
} else {
    echo "0 results";
}
 $conn->close();
?>
?>

