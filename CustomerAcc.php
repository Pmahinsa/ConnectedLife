<!DOCTYPE html>
<html>
<head>
    <title>Customer Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/1.jpg');
        }

        .container {
            margin-top: 50px;
         background-color:  #ccffcc;
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
    <h2>Your Details</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            $conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");
            
                
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT first_name, middle_name, last_name, gender, address, email, tele_phone FROM customer WHERE customer_id = 2";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["middle_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["tele_phone"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No customer details available</td></tr>";
            }
            
            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
<div class="container">
    <h2>Admin of ConnectedLife</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Admin Name</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT name, email, tele_phone FROM admin WHERE admin_id = 1";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["tele_phone"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No admin details available</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
</div>
 <div class="container">
    <h2>Distributors of ConnectedLife</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "onlinemarketplace", "3307");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT first_name, last_name, gender,email, tele_phone FROM distributor";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["tele_phone"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No distributor details available</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
    </table>
    <div>
    <a href="Logout.php"><button type="submit" name="submit" class="btn btn-primary">Log Out</button></a>
    </div>
</div>
    
</body>
</html>
