 
 	<?php
 	$servername = "localhost";
    $dbusername = "root";
    $dbpassword = "123";
    $dbname = "DB1";

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO Register1(firstname, email, password)
    VALUES ('$firstname', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . " " . $conn->error;
    }
    

    $conn->close();
    ?>

 
 