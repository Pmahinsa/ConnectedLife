<!DOCTYPE html>
<html>
<head>
  <title>Display Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      border: 1px solid #ccc;
      background-color: #fff;
      padding: 20px;
      width: 300px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    .card h3 {
      margin-top: 0;
      font-size: 20px;
    }

    .card p {
      margin: 0;
      margin-bottom: 10px;
      font-size: 14px;
    }

    .card strong {
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card">
    <h3>Successfully added your item.</h3>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $itemCategory = $_POST['itemCategory'];
      $itemName = $_POST['itemName'];
      $itemDescription = $_POST['itemDescription'];
      $itemPrice = $_POST['itemPrice'];
      $sellerContact = $_POST['sellerContact'];

      echo "<p><strong>Category:</strong> $itemCategory</p>";
      echo "<p><strong>Name:</strong> $itemName</p>";
      echo "<p><strong>Description:</strong> $itemDescription</p>";
      echo "<p><strong>Price:</strong> $itemPrice</p>";
      echo "<p><strong>Contact No:</strong> $sellerContact</p>";
    } else {
      echo "<p>No data received.</p>";
    }
    ?>
  </div>
</div>

</body>
</html>
