<!DOCTYPE html>
<html>
<head>
    <title>Registration for Seller</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/1.jpg');
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
    <h2>Seller Registration Form</h2>
    <form class="registration-form" action="SellerRegistration.php" method="POST">
         <div class="form-group">
                    <label for="seller-id">Seller ID (NIC):</label>
                    <input type="text" name="seller-id" id="seller-phone" required>
                </div>
                <div class="form-group">
                    <label for="seller-firstname">First Name:</label>
                    <input type="text" name="seller-firstname" id="seller-firstname" required>
                </div>
                <div class="form-group">
                    <label for="seller-middlename">Middle Name:</label>
                    <input type="text" name="seller-middlename" id="seller-middlename" required>
                </div>
                <div class="form-group">
                    <label for="seller-lastname">Last Name:</label>
                    <input type="text" name="seller-lastname" id="seller-lastname" required>
                </div>
               <div class="form-group">
            <label for="seller-gender">Gender:</label>
            <input type="text" class="form-control" id="Gender" name="seller-gender" required>
        </div>  
                <div class="form-group">
                    <label for="seller-address">Address:</label>
                    <input type="text" name="seller-address" id="seller-address" required>
                </div>
                <div class="form-group">
                    <label for="seller-phone">Phone Number:</label>
                    <input type="text" name="seller-phone" id="seller-phone" required>
                </div>
                <div class="form-group">
                    <label for="seller-email">Email:</label>
                    <input type="email" name="seller-email" id="seller-email" required>
                </div>
              <div class="form-group">
                    <label for="seller-username">User Name:</label>
                    <input type="text" name="seller-username" id="seller-username" required>
                </div> 
                <div class="form-group">
                    <label for="seller-password">Password:</label>
                    <input type="password" name="seller-password" id="seller-password" required>
                </div>
               <div class="form-group">
                    <label for="seller-confirm-password">Confirm Password:</label>
                    <input type="password" name="seller-confirm-password" id="seller-confirm-password" required>
                </div>
               <div class="form-group">
                    <label for="seller-admin">Admin:</label>
                    <input type="text" name="seller-admin" id="seller-admin" required>
                </div>
        <button type="submit" name="seller-submit" class="btn btn-primary">Register</button>
    </form>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>


