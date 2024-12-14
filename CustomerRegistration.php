<?php
$conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $firstname = $_POST["first-name"];
    $middlename = $_POST["middle-name"];
    $lastname = $_POST["last-name"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["tele-phone"];
    $admin = $_POST["admin-id"];
    $id = $_POST["customer-id"];


    $sql = "INSERT INTO customer (first_name, middle_name, last_name, gender, address,email, username, password, tele_phone, admin_id,customer_id) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$address', '$email', '$username', '$password','$phone','$admin','$id')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Registration successful!<h2>";
        echo "<h2>Thank you for your Registration !<h2>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
