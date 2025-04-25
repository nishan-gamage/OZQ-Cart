<?php
session_start();

// Include the database connection
include("../include/config/dbconn.php");


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Use a prepared statement to prevent SQL injection
    $sql = "SELECT * FROM clients WHERE email=? AND password=? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            $client_id = $row['id'];
            $client_name = $row['fname'] . " " . $row['lname'];
            $client_email = $row['email'];

            $_SESSION['auth'] = true;
            $_SESSION['auth_client'] = [
                'client_id' => $client_id,
                'client_name' => $client_name,
                'client_email' => $client_email
            ];

            echo "valid";
            exit();
        } else {
            echo "invalid";
            exit();
        }
    } else {
        header("Location: index.php");
        exit();
    }

?>
