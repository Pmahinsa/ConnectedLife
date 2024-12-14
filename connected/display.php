<!DOCTYPE html>
<html>
<head>
  <title>Display Data</title>
  <style>
    .card {
      border: 1px solid #ccc;
      padding: 20px;
      margin: 20px;
      width: 300px;
      box-shadow: 0px 0px 5px #aaa;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<h1>Item Details</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $itemCategory = $_POST['itemCategory'];
  $itemName = $_POST['itemName'];
  $itemDescription = $_POST['itemDescription'];
  $itemPrice = $_POST['itemPrice'];
  $sellerContact = $_POST['sellerContact'];

  echo '<div class="card">';
  echo "<p><strong>Category:</strong> $itemCategory</p>";
  echo "<p><strong>Name:</strong> $itemName</p>";
  echo "<p><strong>Description:</strong> $itemDescription</p>";
  echo "<p><strong>Price:</strong> $itemPrice</p>";
  echo "<p><strong>Contact No:</strong> $sellerContact</p>";
  echo '</div>';
} else {
  echo "No data received.";
}
?>

</body>
</html>
