<?php
// savedata.php

// Database connection
include('connection.php'); // Make sure this file connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = $_POST['fullname'];
    $mobileno = $_POST['mobileno'];
    $emailid = $_POST['emailid']; // This should be corrected to match the correct form field name
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $address = $_POST['address'];

    // Insert into database
    $sql = "INSERT INTO donars (name, phone, email, age, gender, bloodtype, address)
            VALUES ('$fullname', '$mobileno', '$emailid', '$age', '$gender', '$blood_group', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
