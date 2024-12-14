<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "onlinemarketplace"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$data = json_decode(file_get_contents("php://input"));


$stripeToken = $data->stripeToken;
$cardHolderName = $data->cardHolderName;



$sql = "INSERT INTO payments (stripe_token, card_holder_name) VALUES ('$stripeToken', '$cardHolderName')";

if ($conn->query($sql) === TRUE) {

    $response = array("success" => true, "message" => "Payment registered successfully");
    echo json_encode($response);
} else {

    $response = array("success" => false, "message" => "Error registering payment: " . $conn->error);
    echo json_encode($response);
}


$conn->close();
?>