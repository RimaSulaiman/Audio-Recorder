<!DOCTYPE html>
<html>

<head>
</head>

<body>

<?php

$paragraph = $_POST['paragraph'];


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO vc(textt) VALUES ('$paragraph')";

if ($conn->query($sql) === TRUE) {
    echo "record stored successfully!";
} else {
    echo "Error storing list: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

</body>
</hrml>