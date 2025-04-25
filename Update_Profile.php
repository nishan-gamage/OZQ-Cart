<?php
session_start();
include("include/config/dbconn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $client_id = $_POST["client_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    // Update the user's profile in the database
    $sql = "UPDATE clients SET fname = '$fname', lname = '$lname', email = '$email', mobile = '$mobile' WHERE id = $client_id";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
