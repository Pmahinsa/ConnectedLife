<!DOCTYPE html>
<html lang="en">

<title>ConnectedLife</title>
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
        
        <!-- main slide show section-->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
              
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/slider7.png" class="d-block w-100" alt="wallpaper 1">
      </div>
      <div class="carousel-item">
        <img src="images/a.gif" class="d-block w-100" alt="wallpaper 2">
      </div>
      <div class="carousel-item">
        <img src="images/slider6.png" class="d-block w-100" alt="wallpaper 3">
      </div>
        <div class="carousel-item">
        <img src="images/d.jpg" class="d-block w-100" alt="wallpaper 3">
      </div>
        <div class="carousel-item">
        <img src="images/slider8.png" class="d-block w-100" alt="wallpaper 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<style>
    .video-container {
  width: 1000%;
  max-width: 600px; 
  height: auto;
  margin: 0 auto;
}

video {
  width: 200%;
  height: auto;
  align: right;
}
 .carousel-item {
  height: 600px;
  
}

.carousel-item img {
  height: 100%;
  object-fit: cover;
}
.slide h4 {
    position: absolute;
    top:20%;
    right:20%;
    transform: translate(-50%,-70%);
    font-size: 30px;
  }  
    p{
  text-align: justify;
}

</style>
 <!-- latest laptop section-->
   <div class="product_section layout_padding">
    <div class="container">
        <div class="product_text">Latest <span style="color: #5ca0e9;">Phones</span></div>
      <div class="product_section_2">
        <div class="row">
          <div class="col-md-6">
              <div class="image_2"><img src="images/p1.png" width ="450px" height = "400px"></div>
            <h2 class="game_text"><b>Oppo Reno 8T 5G</b><br> Display:6.70-inch (2400x1080)<br>Processor:Qualcomm Snapdragon 695</h2>
            <div class="price_text">Price LKR <span style="color: #3a3a38;"> 109,500.00</span></div>
          </div>
          <div class="col-md-6" >
            <div class="image_2"><img src="images/p2.png" width ="450px" height = "400px"></div>
            <h2 class="game_text"><b>OnePlus Nord CE3 Lite 5G</b><br>Display:6.72-inch (1800x2400)<br>Processor:Qualcomm Snapdragon 695 </h2>
            <div class="price_text">Price LKR <span style="color: #3a3a38;">92,450.00</span></div>
          </div>
        </div>
      </div>
      <div class="see_main">
          <div class="see_bt"><a href="Phone.php">See More</a></div>
      </div>
    </div>
  </div>
 
  <!-- latest laptop section end -->
  <!-- latest smart phones section start -->
  <div class="laptop_section layout_padding">
    <div class="container">
        <div class="product_text"><span style="color: #e83e8c;">Latest </span><span style="color: #5ca0e9;">Laptop</span></div>
      <div class="laptop_section_2">
        <div class="row">
          <div class="col-md-6">
              <div class="image_2"><img src="images/latestlap.jpg" width ="450px" height = "400px"></div>
             <h2 class="game_text"><b>MACKBOOK AIR (M2 2022)</b></h2>
             <h2 class="price_text">Price LKR <span style="color: #3a3a38;">459,000.00</span></h2>
          </div>
          <div class="col-md-6" >
            <div class="image_2"><img src="images/latestlap2.jpg" width ="450px" height = "400px"></div>
            <h2 class="game_text"><b>MacBook Pro</b></h2>
            <div class="price_text">Price LKR <span style="color: #3a3a38;">265,000.00</span></div>
          </div>
        </div>
      </div>
      <div class="see_main">
          <div class="see_bt"><a href="Laptop.php">See More</a></div>
      </div>
    </div>
  </div>
  
  <!-- product section end -->

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