<?php
// Attempt to connect to the database
$conn = mysqli_connect("localhost", "root", "", "blood_donation");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the charset to utf8
mysqli_set_charset($conn, "utf8");

echo "Connected successfully";
?>
