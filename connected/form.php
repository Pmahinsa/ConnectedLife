<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .form-frame {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-heading {
      text-align: center;
      margin-bottom: 20px;
      color: #28a745; 
    }
     .bold-label {
      font-weight: 700;
      font-weight: bold;
    }
    
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="form-frame">
        <h2 class="form-heading">Add Item</h2>
        <form action="display.php" method="post">
          <div class="form-group">
            <label for="itemCategory">Item Category:</label>
            <select class="form-control" id="itemCategory" name="itemCategory">
              <option value="">Select Item Category</option>
              <option value="laptop">Laptop</option>
              <option value="phone">Phone</option>
            </select>
          </div>
          <div class="form-group">
            <label for="itemName">Item Name:</label>
            <input type="text" class="form-control" id="itemName" name="itemName">
          </div>
          <div class="form-group">
            <label for="itemDescription">Description:</label>
            <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="itemPrice">Price:</label>
            <input type="text" class="form-control" id="itemPrice" name="itemPrice">
          </div>
          <div class="form-group">
            <label for="sellerContact">Contact No:</label>
            <input type="text" class="form-control" id="sellerContact" name="sellerContact">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
