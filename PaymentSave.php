<?php

$conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", 3307);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["submit"])) {
    $paymentid = $_POST["paymentid"];
    $date = $_POST["date"];
    $type = $_POST["type"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];
    $customerid = $_POST["customerid"];
    $D_ID = 3;


    $sql = "INSERT INTO payment (payment_id, date, type, description, amount, customer_id, distributer_id) 
            VALUES ('$paymentid', '$date', '$type', '$description', '$amount', '$customerid', '$D_ID')"; 

    if (mysqli_query($conn, $sql)) {
        echo "<h2>OK. Details Successfully Added</h2>"; 
        echo "<h2>Now Enter your card number</h2>"; 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>
