<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $cart_id = $_POST['cart_id'];

    // Include your database connection file
    include("include/config/dbconn.php");

    // SQL query to delete the record
    $sql = "DELETE FROM cart WHERE id = $cart_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
