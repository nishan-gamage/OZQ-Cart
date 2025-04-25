<?php
session_start();
include("../include/config/dbconn.php");

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = trim(mysqli_real_escape_string($conn, $_POST['lname']));
$email = trim(mysqli_real_escape_string($conn, $_POST['email']));
$password = trim(mysqli_real_escape_string($conn, $_POST['password']));
$mobile = trim(mysqli_real_escape_string($conn, $_POST['mobile']));

// Check if the email already exists
$query = "SELECT * FROM `clients` WHERE `email` = '$email' LIMIT 1";
$result_set = mysqli_query($conn, $query);

if ($result_set) {
    if (mysqli_num_rows($result_set) == 1) {
        echo "alreadyExit";
        exit(0);
    } else {
        // Register the user
        $query = "INSERT INTO `clients` (`fname`, `lname`, `email`, `password`, `mobile`) VALUES ('$fname', '$lname', '$email', '$password', '$mobile')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "success";
            exit(0);
        } else {
            echo "error";
            exit(0);
        }
    }
} else {
    echo "error";
    exit(0);
}
?>
