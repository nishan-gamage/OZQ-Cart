<?php
session_start();


session_destroy();

// Redirect the user to the login page or any other appropriate page
header("Location:index.php");
exit();
?>