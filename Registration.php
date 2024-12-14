<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="all" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  <!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <style>
    body {
      background-color: #046307 rgba(0, 0, 0, 0.5);
      font-family: Arial, sans-serif;
      background-image: url('images/1.jpg');
      background-size: cover;
      animation: animateBackground 10s infinite;
      
    }
     @keyframes animateBackground {
      0% { background-position: 0% 0%; }
      50% { background-position: 100% 100%; }
      100% { background-position: 0% 0%; }
    }

    h1 {
      margin-top: 30px;
      text-transform: uppercase;
      color: green;
      font-family: Times New Roman;
      font-size: 50px;
      font-weight: bold;
      text-align: center;
    }
    h3{
        color: green;
    }
    .icon {
      width: 350px;
      height: 300px;
      margin: 20px;
      cursor: pointer;
      border-radius: 100%;
      transition: all 0.3s ease-in-out;
    }

    .icon:hover {
      transform: scale(1.1);
      border-color: #ff8800;
    }
  </style>
</head>
<body>
   <!-- header section start -->
	<div class="header_section">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="images/ConnectedLife.png"></a></div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="AdminLogin.php">ADMIN</a> 
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <a class="nav-link" href="index.php">HOME</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CATEGORIES
                </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Laptop.php">Laptop</a>
                   <a class="dropdown-item" href="Phone.php">Smart Phone</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                  <a class="nav-link" href="Registration.php">REGISTER</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                  <a class="nav-link" href="CustomerLogin.php">LOGIN</a> 
                </li>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <li class="nav-item">
                  <a class="nav-link" href="about.php">ABOUT</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="Payment.php">CART & PAYMENT<img src="images/cart.jpg" height="40" width="40"></a>
             </li>
              </ul>
            </div>
             
        </nav>
	</div>
	<!-- header section end -->
  <h1>Registration</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <a href="buyer.php"><img class="icon" src="images/R1.jpg"  aonclick="toggleDetails('')"></a><div class="col-md-6"><h3>Buyer Ragistration<h3></div>
      </div>
      <div class="col-md-4">
          <a href="seller.php"><img class="icon" src="images/R2.jpg" aonclick="toggleDetails('')"></a> <div class="col-md-"><h3>Seller Ragistration<h3></div>
      </div>
    </div>
  </div> 
 <!-- footer section start -->
  <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                  <h2 class="account_text">ConnectedLife IT</h2>
                  <p class="ipsum_text_2">ConnectedLife I.T, The Nation's Laptop Provider offers you unmatched confidence & 
                      convenience in buying world renowned laptops & tech accessories accompanied by a host of support & 
                      after sales services to meet your evolving demands for remarkable I.T solutions.</p>
                </div>
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <h2 class="account_text">Contact Us</h2>
                    <h5><span style="color: #FFFFFF;"> Hotline:</h5>
                    <a href="tel:+94115555888">011 55 55 888</a>
                    <h5><span style="color: #FFFFFF;"> Email:</h5>
                    <a href="mailto:itservices@abansgroup.com">ITSERVICES@CONNECTEDLIFE.COM </a>
                    <h5><span style="color: #FFFFFF;"> Address:</h5>
                     <a href="#">No.498, Galle Road, Colombo 03 Sri Lanka</a>
                </div>
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
          <div class="col-sm-6 col-md-6 col-lg-3">
            <h2 class="account_text">Quick Links</h2>
            <a href="index.php" text-ailng>Home</a><br>
            <a href="Registration.php">Register</a><br>
            <a href="CustomerLogin.php">Login<br>
            <a href="about.php">About </a>
          </div>
        </div>
      </div>
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png"></a></li>
          <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text"> All Right Reserved.</p>
    </div>
  </div>
  <!-- copyright section end -->
</body>
</html>
