<?php
// db_connection.php
$servername = "localhost"; // or your database server address
$username = "root"; // your MySQL username
$password = "Wanjala4122."; // your MySQL password
$dbname = "my_portfolio"; // your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
