<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "shop_db";

    $conn = mysqli_connect("$host","$username", "$password", "$database");
    if(!$conn){
        die();
    }
?>