<!DOCTYPE html>
<html>
<head>
    <title>Cart Items</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/123.jpg');
        }

        .container {
            margin-top: 50px;
            background-color: #ccffcc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: green;
            margin-bottom: 20px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your Cart Items</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Cart Item name</th>
                <th>Quantity</th>
                <th>Price (RS.)</th>
            </tr>
        </thead>
        <a href="Pay.php"><button type="submit" name="submit" class="btn btn-primary">Pay Now</button></a>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT cart_item_name, quantity,product_price FROM Cart_item ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["cart_item_name"] . "</td>";
                    echo "<td>" . $row["quantity"] . "</td>";
                    echo "<td>" . $row["product_price"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No item details available</td></tr>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
</body>
</html>