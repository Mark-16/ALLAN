<?php
$servername = "localhost";
$username = "root"; // Default MySQL username for many local environments
$password = ""; // No password by default
$dbname = "service_management";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $address = $_POST["address"];
    $service = $_POST["service"];

    // Insert data into the database
    $sql = "INSERT INTO service_requests (name, email, mobile, address, service) VALUES ('$name', '$email', '$mobile', '$address', '$service')";

    if ($conn->query($sql) === TRUE) {
        echo "Request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
