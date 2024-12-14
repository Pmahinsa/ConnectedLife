<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Phones</title>
      
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
     <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
   
<link rel="stylesheet" href="styles.css">
<style>
  body{
   background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("images/Image01.jpg")no-repeat; background-size:100%;
    width: 100;
    font-family: 'Merriweather';
    }
    h1{
    font-size: 3rem;
    font-weight: 700;
    }
    card{
    border: none;
    height: 500px;
    
    } 
    select{
    height: 40px;
    width: 100%;
    outline: none;
    padding: 0 10px;
    }
    span{ 
    color: gray;
    font-weight: 600;
    }
    .btn01 {
      background-color:yellow;
            color: black;
            outline: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            margin-right: 10px;
          }
    .btn01:hover {
      background-color:#FFEF00;
      transition: 0.5s;
    }
    .btn02 {
      background-color: #33872C;
      color: black;
      outline: none;
    }

    .btn02:hover {
      background-color: #276E22;
      transition: 0.5s;
    }
    .modal-content {
     border: none;
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     border-radius: 10px 10px 0 0;
    }

    .modal-header {
      background-color: #33872C;
      color: white;
      border-radius: 10px 10px 0 0;
      padding: 15px;
      text-align: center;
    }

    .modal-title {
      font-size: 24px;
      font-weight: bold;
    }

    .form-group label {
      font-weight: bold;
     
    }

    .form-control {
      border: 1px solid #ccc;
      border-radius: 5px;
     
    }

    .d-flex.justify-content-center {
      margin-top: 20px;
    }
    .modal-dialog {
      margin: 10 auto;
      max-width: 400px;
    }

    button1 {
        background-color:yellow;
          
            outline: none;
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 14px;
            cursor: pointer;
            margin-right: 10px;
    }
    .button1:hover {
      background-color: #FFEF00;
      transition: 0.5s;
    }
          .button-container {
           position: absolute;
           top: 10px; 
           right: 10px; 
            }
    .btn1{
    background-color: #24ac17;
    color: white;
    outline: none;
    border: none;
    width: 90%;
    height: 40px;
    margin-top: 32px;
    }
    .btn1:hover{
    background-color: #276E22;
    transition: 0.5s;
    }
    .part1{
    background: white;
    }
    .btn2{
    background: #24ac17;
    color: white;
    height: 45px;
    width: 200px;
    outline: none;
    border: black;
    margin: 13px;
    

    } 
    .btn2:hover{
    background-color: #276E22;
    transition: 0.5s;
    }
    .Phone{
    background: rgb(238,235,235);
    
    }
    .Phone h1{
    font-weight: 900;
    }
    .Home{
    background: rgb(238,235,235);
   
    }
    .Home h1{
    font-weight: 700;
    }

                
button {
            background-color:yellow;
            color: black;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
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
	
   <div class="button-container">
        <button onclick="redirectToPage1()">Add Item</button>
        <button onclick="redirectToPage2()">View second hand Item</button>
    </div>
   <script>
        function redirectToPage1() {
            window.location.href = "SellerLogin.php";
        }

        function redirectToPage2() {
            window.location.href = "View phone page.php";
        }
    </script>
</div>
  <section class="main py-5">
   <div class="container py-5">
       <div class="row py-5">
           <div class="col-lg-10 py-5 mx-auto">
               <h1  class="text-white text-center"> EXPLORE OUR POCKET-SIZED WONDERS</h1>
               <p class="text-white text-center">"Experience Mobile Perfection - Where Style Meets Functionality"</p>
               <div class="card mt-4 ">
                <div class="card-body py-2">
                    <div class="row">
                        <div class="col-lg-3">
                          <button onclick="scrollToSection('section1')" class="btn2">Apple </button>
                      </div>
                      <div class="col-lg-3">
                          <button onclick="scrollToSection('section2')" class="btn2">Huawei</button>
                      </div>
                      <div class="col-lg-3">
                          <button onclick="scrollToSection('section3')" class="btn2">Samsung</button>
                      </div>
                      <div class="col-lg-3">
                          <button onclick="scrollToSection('section4')" class="btn2">Xiaomi</button>
                      </div>
                      
                      <div>
                        
                      
                            </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>  

</section>

<section class="part1">
       <div class="container py-5">
            <div class="row">
                 <div class="col-lg-6">
                     <h2 style="color:#107B07" class="font-weight-bold">A whole new way to work </h2>
                     <p style="color:#6BB365">connected life shop  </p>
                 </div>
                 <div class="offset-3 col-lg-2">
                 <button onclick="scrollToFooter()" class="btn2 mt-2">Contact</button>
                 </div>
            </div>
       </div>
    </section>
    <section id="section1" class="Phone py-1">
       <div class="container py-4">
            <h1 style="color:#1C5F17" class="text-center py-5" > Apple </h1>
          <div class="row">
             <div class="col-lg-4">
                   <div style="height: 500px;" class="card" >
                      <img style="height:300px; width: 300px;" src="images/Apple 1.jpg" class="img-fluid" alt="">
                      <h6 class="p-3 font-weight-bold" id="product_name1"> Apple iphone 14 pro max </h6>
                      <p class="px-3">128GB Storage, 48MP+12MP+12MP Camera,4323mAh Battery,6.7(17.02 cm)Display <br></p>
                      <p class="px-3" id="price1">384,030 LKR</p>
                      <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                 </div>
             <div class="col-lg-4">
                   <div style="height: 500px;" class="card ">
                      <img style="height:300px;" src="images/Apple 2.jpg" class="img-fluid" alt="">
                      <h6 class="p-3 font-weight-bold" id="product_name2">Apple iphone XS max   </h6>
                      <p class="px-3">64GB storage,12mp camera, 2658mAh Battery,5.8 Display<br></p>
                      <p class="px-3" id="price2">147,900 LKR<br></p>
                      <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                  <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/Apple 3.jpeg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name1">Apple iPhone 12 mini</h6>
                       <p class="px-3">128GB Storage,5.4 Display,12mp camera,4GB RAM,2227mAh Battery,</p>
                       <p class="px-3" id="price3">188,990 LKR<br></p>
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-lg-4">
                   <div style="height: 500px; margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;" src="images/Apple 4.jpeg" class="img-fluid" alt="">
                       <h7 class="p-3 font-weight-bold" id="product_name1">Apple iPhone XR</h7>
                       <p class="px-3"><br>128 GB Storage, 12MP camera, 3GB RAM, 2942mAh Battery</p>
                       <p class="px-3" id="price4">137,990LKR</p>
                       <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                    </div>
                  </div>
                  <div class="col-lg-4">
                   <div style="height: 500px; margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;" src="images/Apple 5.jpeg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name1">Apple iphone 11 </h6>
                       <p class="px-3"> 128GB storage,6.1 Display,12MP camera,4GB RAM,3110mAh Battery</p>
                       <p class="px-3" id="price5">169,990 LKR</p><br>
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                     </div>
                   </div>
                   <div class="col-lg-4">
                    <div style="height: 500px; margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;" src="images/Apple 6.jpeg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name1">Apple iphone 13</h6>
                       <p class="px-3"><br>128GB storage, 6.1 Display,12MP camera,4GB RAM,3240mAh Battery </p>
                       <p class="px-3" id="price6">2,890 LKR</p>
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                     </div>
                   </div>
                  </div>
                </div>
      </section>
      <section id="section2" class="Home py-1">
          <div class="container py-4">
            <h1 style="color:#1C5F17;" class="text-center py-5">Huawei</h1>
            <div class="row">
                 <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/Huawei 1.jpg" class="img-fluid" alt="">
                        <h6 class="p-3 font-weight-bold" id="product_name1">Huawei nova Y70</h6>
                        <p class="px-3"> 128GB storage,6.75"720x1600 pixels Display ,48MP Camera,4GB RAM,6000mAh Battery</p>
                        <p class="px-3" id="price7">69,990 LKR</p>
                        <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                       </div>
                   </div>
                   <div class="col-lg-4">
                   <div style="height: 500px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Huawei 2.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name8">Huawei nova Y61 </h6>
                       <p class="px-3">64GB storage,6.52"720x1600 pixels Display ,50MP Camera,6GB RAM,5000mAh Battery</p>
                         <p class="px-3" id="price8">53,490 LKR<br> </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                      </div>
                    </div>
                    <div class="col-lg-4">
                     <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/Huawei 3.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name9">Huawei nova 9 SE </h6>
                       <p class="px-3">128GB storage,6.78",1080x2388 pixels Display, 108MP Camera, 8GB RAM, 4000mAh Battery</p>
                       <p class="px-3" id="price9">107,990 LKR<br> </p> 
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                 
                  <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Huawei 4.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name10">Huawei Y9</h6>
                       <p class="px-3"> 128GB storage,1080x2340 pixels Display,16MP Camera,4GB RAM,4000mAh Battery</p>
                         <p class="px-3" id="price10"> 36,990 LKR</p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
                  <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Huawei 5.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name11">Huawei Y9s </h6>
                       <p class="px-3">128GB storage,1080x2340 pixels Display,48MP Camera,6GB RAM, 4000mAh Battery<br></p>
                         <p class="px-3" id="price11"> 46,990 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
                  <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Huawei 6.jpeg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name12">Huawei P60 pro</h6>
                       <p class="px-3"> 256GB storage,161 x 74.5 x 8.3mm Display,XMAGE Camera <br></p>
                         <p class="px-3" id="price12"> 306,000 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                </div>
              </div>
        </section>
        <section id="section3" class="Home py-1">
             <div class="container py-4">
            <h1 style="color:#1C5F17;" class="text-center py-5">Samsung</h1>
            <div class="row">
                 <div class="col-lg-4">
                   <div style="height: 500px;" class="card pb-3">
                   <img style="height:300px;" src="images/Samsung 1.jpg" class="img-fluid" alt="">
                        <h6 class="p-3 font-weight-bold" id="product_name13">Samsung Galaxy S23 Ultra</h6>
                        <p class="px-3">256GB storage,6.8",1440x3088 pixels Display,12GB RAM</p>
                        <p class="px-3" id="price13">439,990 LKR<br> </p>
                        <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                       </div>
                  </div>
                   <div class="col-lg-4">
                   <div style="height: 500px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Samsung 2.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name14">Samsung Galaxy S22 5G</h6>
                       <p class="px-3"> 256GB storage,6.1",1080x2340 pixels Display,50MP Camera</p>
                         <p class="px-3" id="price14">183,990 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                      </div>
                  </div>
                    <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/Samsung 3.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name15"> Samsung Galaxy S22 Ultra 5G </h6>
                       <p class="px-3"> 256GB storage,6.8",1440x3088 pixels Display,108MP Camera,5000mAh Battery</p>
                       <p class="px-3" id="price15"> 264,990LKR </p> 
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Samsung 4.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name16">Samsung Galaxy S21 FE 5G</h6>
                       <p class="px-3">256GB storage,6.4",1080x2400 pixels Display, 12MP Camera</p>
                         <p class="px-3" id="price16">139,990 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                    </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Samsung 5.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name17">Samsung Galaxy M33 5G</h6>
                       <p class="px-3"> 128GB storage,6.6",1080x2408 pixels Display,50MP Camera</p>
                         <p class="px-3" id="price17"> 66,490 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
            <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Samsung 6.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name18">Samsung Galaxy M32</h6>
                       <p class="px-3"> 128GB storage, 6.4",1080x2400 pixels Display, 64MP Camera, 6GB RAM, 6000mAh Battery</p>
                         <p class="px-3" id="price18"> 61,490 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
                </div>
               </div>
        </section>
        <section id="section4" class="Home py-1">
       <div class="container py-4">
            <h1 style="color:#1C5F17;" class="text-center py-5">Xiaomi</h1>
            <div class="row">
                 <div class="col-lg-4">
                   <div style="height: 500px;" class="card pb-3">
                       <img style="height:300px;" src="images/Xiaomi 1.jpg" class="img-fluid" alt="">
                        <h6 class="p-3 font-weight-bold" id="product_name19">Xiaomi Redmi Note 12 4G</h6>
                        <p class="px-3">128GB storage,6.67",1080x2400 pixels Display, 50MP Camera, 8GB RAM, 5000mAh Battery</p>
                        <p class="px-3" id="price19">67,999 LKR</p>
                        <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                       </div>
                  </div>
                   <div class="col-lg-4">
                   <div style="height: 500px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Xiaomi 2.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name20">Xiaomi Redmi Note 11S</h6>
                       <p class="px-3"> 128GB storage,6.43",1080x2400 pixels Display, 108MP Camera, 8GB RAM, 5000mAh Battery</p>
                         <p class="px-3" id="price20">60,990 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                       </div>
                  </div>
                    <div class="col-lg-4">
                   <div style="height: 500px;" class="card pb-3">
                       <img style="height:300px;" src="images/Xiaomi 3.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name21">Xiaomi Redmi Note 12 Pro+ </h6>
                       <p class="px-3">256GB storage,6.67",1080x2400 pixels Display, 200MP Camera, 8GB RAM, 5000mAh Battery<br></p>
                       <p class="px-3" id="price21"> 102,990 LKR </p> 
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Xiaomi 4.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name22">Xiaomi Redmi Note 11R</h6>
                       <p class="px-3">128GB storage,6.58",1080x2408 pixels Display, 13MP Camera, 6GB RAM, 5000mAh Battery</p>
                       <p class="px-3" id="price22"> 53,490 LKR </p>
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Xiaomi 5.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name23">Xiaomi Redmi Note 11 Pro+ 5G</h6>
                       <p class="px-3"> 256GB storage,6.67",1080x2400 pixels Display, 108MP Camera, 6GB RAM, 4500mAh Battery</p>
                         <p class="px-3" id="price23">92,990 LKR</p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                      </div>
                
                  <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Xiaomi 6.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name24">Xiaomi Redmi Note 11 China</h6>
                       <p class="px-3"> 128GB storage,6.6",1080x2400 pixels Display, 50MP Camera, 6GB RAM, 5000mAh Battery</p>
                         <p class="px-3" id="price24">53,490 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
              </div>
            </div>
        </section>
        <section  class="Home py-1">
       <div class="container py-4">
            <h1 style="color:#1C5F17;" class="text-center py-5">Nokia</h1>
            <div class="row">
                 <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/Nokia 1.jpg" class="img-fluid" alt="">
                        <h6 class="p-3 font-weight-bold" id="product_name25"> Nokia C21 Plus</h6>
                        <p class="px-3">128GB storage,6.52",720x1600 pixels Display, 13MP Camera, 3GB RAM, 5050mAh Battery<br></p>
                        <p class="px-3" id="price25">52,990</p>
                        <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                       </div>
                  </div>
                   <div class="col-lg-4">
                   <div style="height:500px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Nokia 2.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name26">Nokia C21</h6>
                       <p class="px-3">128GB storage, 6.52",720x1600 pixels Display, 8MP Camera, 2GB RAM, 3000mAh Battery<br></p>
                         <p class="px-3" id="price26"> 44,490 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                    <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/Nokia 3.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name27">Nokia C30</h6>
                       <p class="px-3">64GB storage,6.82",720x1600 pixels Display, 13MP Camera, 2GB RAM, 6000mAh Battery<br></p>
                       <p class="px-3" id="price27"> 29,490 LKR </p> 
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Nokia 4.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name28">Nokia 1.4</h6>
                       <p class="px-3"> 128GB storage,6.52",720x1600 pixels Display, 8MP Camera, 3GB RAM, 4000mAh Battery</p>
                         <p class="px-3" id="price28">  47,990 LKR </p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Nokia 5.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name29">Nokia G10</h6>
                       <p class="px-3">128GB storage,6.52"720x1600 pixels Display, 13MP Camera, 4GB RAM, 5050mAh Battery<br></p>
                       <p class="px-3" id="price29">52,990 LKR</p>
                       <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                        </div>
                  </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card pb-3">
                       <img style="height:300px;"  src="images/Nokia 6.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name30">Nokia G11 Plus</h6>
                       <p class="px-3">128GB storage,6.52",720x1600 pixels Display, 50MP Camera,5000mAh Battery</p>
                         <p class="px-3" id="price30">63,990 LKR</p>
                         <button type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                   </div>
                  </div>
                </div>
              </div>
      </section>
    
      <footer class="mt-5 text-center">
        <div id="footerContact">
      
   
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
  </body>
 
  </div>
</footer>

<script>
  function scrollToFooter() {
    var footerContact = document.getElementById("footerContact");
    footerContact.scrollIntoView({ behavior: "smooth" });
  }
  </script>
 
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text"> All Right Reserved.</p>
    </div>
  </div>
  
  <script src="script.js">
</script>
<script>
  function scrollToSection(sectionId) {
      const section = document.getElementById(sectionId);
      if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
      }
  }
  </script>
</body>
</html>