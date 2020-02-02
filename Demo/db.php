<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mancescent";

$name = $_POST["name"];
$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$description = $_POST["description"];
$comments = $_POST["comments"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mancescent (name, latitude, longitude, description, comments)
VALUES ('$name', '$latitude', '$longitude','$description','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>