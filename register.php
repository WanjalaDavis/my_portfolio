<?php
// registration_script.php
include 'db_connection.php';

// Retrieve form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Prepare the SQL query
$sql = "INSERT INTO users (full_name, email, mobile_number, username, password) VALUES (?, ?, ?, ?, ?)";

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $full_name, $email, $mobile_number, $username, $password);

// Execute the query and check for success
if ($stmt->execute()) {
    // Registration successful
    header('Location: it_courses.php');
    exit();
} else {
    // Registration failed
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
mysqli_close($conn);
?>
