<?php
include 'connection.php';

// Get donor_id from URL
$donor_id = $_GET['id'];

// Check if donor_id is set and is a valid number to avoid SQL injection
if(isset($donor_id) && is_numeric($donor_id)) {
    // Prepare the DELETE query
    $sql = "DELETE FROM donars WHERE id = {$donor_id}";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if($result) {
        // Redirect to the donor list page after deletion
        header("Location: donor_list.php");
        exit(); // Don't forget to exit after header redirection
    } else {
        // If the query failed, show an error
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // If id is not valid or not set, show an error
    echo "Invalid donor ID.";
}

// Close the connection
mysqli_close($conn);
?>
