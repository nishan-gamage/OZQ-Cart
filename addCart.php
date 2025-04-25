<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents('php://input'), true);

    if ($data !== null) {

        $clientID = $data['clientID'];
        $productID = $data['productID'];
        $productName = $data['productName'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $img = $data['imgPath'];

        include("include/config/dbconn.php");

        $sql = "INSERT INTO cart (client_id, product_id, pro_name, unit_price, qty, pro_des, img_path)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind parameters and execute the query
        $stmt->bind_param("iississ", $clientID, $productID, $productName, $price, $quantity, $description, $img);

        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }

        // Close the statement
        $stmt->close();

        // Close the database connection
        $conn->close();
    } else {
        echo "Error decoding JSON data.";
    }
} else {
    echo "Invalid request method.";
}
?>
