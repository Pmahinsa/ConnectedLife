<?php
$conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

  

    $sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
      
        mysqli_close($conn);
        header("Location: CustomerAcc.php"); 
        exit();
    } else {
        
        $errorMessage = "Invalid username or password";
    }
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log in</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
   
</head>
<body style="background-image: linear-gradient( to top,rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%),url(images/1.jpg);background-repeat: no-repeat;">

    <?php if (isset($errorMessage)) : ?>
        <div style="color: red; text-align: center;"><?php echo $errorMessage; ?></div>
    <?php endif; ?>
</body>
</html>
