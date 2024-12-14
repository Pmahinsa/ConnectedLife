<?php

$conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["seller-submit"])) {
    $id = $_POST["seller-id"];
    $firstname = $_POST["seller-firstname"];
    $middlename = $_POST["seller-middlename"];
    $lastname = $_POST["seller-lastname"];
    $gender = $_POST["seller-gender"];
    $address = $_POST["seller-address"];
    $phone = $_POST["seller-phone"];
    $email = $_POST["seller-email"];
    $username = $_POST["seller-username"];
    $password = $_POST["seller-password"];
    $admin = $_POST["seller-admin"];


    $sql = "INSERT INTO seller (seller_id,first_name, middle_name, last_name, gender, address, tele_phone, email, username, password, admin_id) VALUES ('$id','$firstname', '$middlename', '$lastname', '$gender', '$address', '$phone', '$email', '$username', '$password','$admin')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Registration successful!<h2>";
        echo "<h2>Thank you for your Registration !<h2>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>
