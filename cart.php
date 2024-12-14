<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["productName"];
    $price = $_POST["price"];
    
    $connection = new mysqli("localhost", "root", "", "onlinemarketplace", "3307");

    
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    
    $quantity = 5;
    $total_product_price = $quantity * $price; 
    $customer_id = 5;
    $cart_id = 3;
    $distributer_id = 2;

    $query = "INSERT INTO `cart_item` (`cart_item_name`, `product_price`, `quantity`, `total_product_price`, `customer_id`, `cart_id`, `distributer_id`)
              VALUES ('$productName', '$price', '$quantity', '$total_product_price', '$customer_id', '$cart_id', '$distributer_id')";

    if ($connection->query($query) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $connection->error;
    }

   
    $connection->close();
}
?>