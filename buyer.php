<!DOCTYPE html>
<html>
<head>
    <title>Registration for Customer</title>
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

        .registration-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .form-group button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Customer Registration Form</h2>
    <form class="registration-form" action="CustomerRegistration.php" method="POST">
         <div class="form-group">
             <label for="custosmer-id">Customer ID (NIC):</label>
             <input type="text" class="form-control" id="customer-id" name="customer-id" required>
        </div>
        <div class="form-group"> 
            <label for="first-name">First Name:</label>
            <input type="text" class="form-control" id="first-name" name="first-name" required>
        </div>
        <div class="form-group">
            <label for="middle-name">Middle Name:</label>
            <input type="text" class="form-control" id="middl-name" name="middle-name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name:</label>
            <input type="text" class="form-control" id="last-name" name="last-name" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" class="form-control" id="Gender" name="gender" required>
        </div>     
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="address" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>   
        <div class="form-group">
            <label for="username">username:</label>
            <input type="username" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
        </div>
        <div class="form-group">
            <label for="tele-phone">Phone Number:</label>
            <input type="tele-phone" class="form-control" id="tele-phone" name="tele-phone" required>
        </div>
        <div class="form-group">
             <label for="admin-id">Admin:</label>
             <input type="text" class="form-control" id="admin-id" name="admin-id" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
