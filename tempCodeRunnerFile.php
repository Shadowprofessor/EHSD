<?php
$servername = "YOUR_SQL_SERVER_IP";
$username = "YOUR_SQL_USERNAME";
$password = "YOUR_SQL_PASSWORD";
$dbname = "YOUR_DATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];
$moisture = $_POST['moisture'];
$voltage = $_POST['voltage'];

$sql = "INSERT INTO sensor_data (temperature, humidity, moisture, voltage) 
        VALUES ('$temperature', '$humidity', '$moisture', '$voltage')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>