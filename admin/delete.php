<?php
include 'connection.php';
$donor_id = $_GET['id'];

if (isset($donor_id) && is_numeric($donor_id)) {
    $sql = "DELETE FROM donars WHERE id = {$donor_id}";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: donor_list.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid donor ID.";
}
mysqli_close($conn);
?>