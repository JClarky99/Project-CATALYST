<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$studentId = $_POST['studentId'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'createaccount');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare and execute statement
$stmt = $conn->prepare("INSERT INTO regacc (firstName, lastName, studentId, gender, email, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $firstName, $lastName, $studentId, $gender, $email, $password);

if ($stmt->execute()) {
    echo "Registration successful";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
