function addToCart() {
  var productName = document.getElementById("product_name1").innerHTML.trim();
  var productPrice = document.getElementById("price1").innerHTML.trim();
  var quantity = document.getElementById("quantity").value;


  // Parse the productPrice as a floating-point number
  var parsedPrice = parseFloat(productPrice);

  if (!isNaN(parsedPrice)) { // Check if parsing is successful
      var request = new XMLHttpRequest();
  
      var formData = new FormData();
      formData.append("product_name", productName);
      formData.append("price", parsedPrice); // Use the parsed price
  
      request.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
              alert(this.responseText);
          }
      };
  
      request.open("POST", "cart.php", true);
      request.send(formData);
  } else {
      alert("Invalid product price.");
  }
}