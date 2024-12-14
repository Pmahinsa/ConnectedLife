
<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Laptops</title>
    <!-- bootstrap css -->
     <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    body{
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("images/image1.jpg")no-repeat; background-size:100%;
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
    padding:0 10px;
    }
    span{ 
    color: gray;
    font-weight: 600;
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
    .part2{
    background: #fff;
    }
    .btn2{
    background: #24ac17;
    color: white;
    height: 45px;
    width: 200px;
    outline: none;
    border: none;
    } 
   .btn2:hover{
    background-color: #276E22;
    transition: 0.5s;
    }
    .laptops{
    background: rgb(238,235,235);
    }
    .laptops h1{
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
    button1 {
    background-color:yellow;
    color: black;
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
   .d-flex.justify-content-center {
    margin-top: 20px;
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
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CATEGORIES
                </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Laptop.html">Laptop</a>
                   <a class="dropdown-item" href="Phone.html">Smart Phone</a>
                 <li class="nav-item">
                  <a class="nav-link" href="Registration.html">REGISTER</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Login.html">LOGIN</a> 
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="search">
                  <input class="srch" type="search" placeholder="Search"size = "30">
                <a href="#"> <button class="btn">Search</button></a>
                </li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item">
                    <a class="nav-link" href="Payment.html">CART & PAYMENT<img src="images/cart.jpg" height="40" width="40"></a>
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

<section class="part1 py-5">
   <div class="container py-5">
       <div class="row py-5">
           <div class="col-lg-10 py-5 mx-auto">
              <h1  class="text-white text-center">FIND YOUR DREAM LAPTOPS</h1>
              <p class="text-white text-center">"It’s more than a laptop – it’s a way of life"</p>
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                              <span> All Brands</span>
                              <select class="mt-2" name="" id="">
                                <option value=""> All Brands</option>
                                <option value="">HP</option>
                                <option value="">Asus</option>
                                <option value="">Dell</option>
                                <option value="">Lenovo</option>
                                <option value=""> Apple</option>
                              </select>
                            </div>
                            <div class="col-lg-3">
                              <span>Prices<br></span>
                              <select class="mt-2" name="" id="">
                                <option value="">Prices</option>
                                <option value="">125,000 - 200,000</option>
                                <option value="">200,000 - 275,000</option>
                                <option value="">275,000 - 330,000</option>
                                <option value="">330,000 -430,000</option>
                                <option value=""> above 430,000 </option>
                              </select>
                            </div>
                            <div class="col-lg-3">
                            <input type="button" class="btn1" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>  
    </div>
</section>
<section class="part2">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 style="color:#107B07" class="font-weight-bold">A whole new way to work </h2>
                <p style="color:#6BB365">Connected Life</p>
            </div>
            <div class="offset-3 col-lg-2">
            <button onclick="scrollToFooter()" class="btn2 mt-2">Contact</button>
            </div>
        </div>
    </div>
</section>
<section class="laptops py-1">
    <div class="container py-4">
       <h1 style="color:#1C5F17" class="text-center py-5">HP</h1>
           <div class="row">
                <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/HP02.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name31">HP 15S-FQ5020NIA</h6>
                       <p class="px-3">HP i7 12th Gen / 8GB Ram / 512GB SSDRs<br></p>
                       <p class="px-3" id="price31">235,000 LKR<br><br></p>
                       <button  type="button" class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/HP03.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name32">HP VICTUS 15-FA0028NE</h6>
                       <p class="px-3">HP RYZEN 7 / 16GB Ram / 512GB SSD / RTX 3050 TIRs<br></p>
                       <p class="px-3" id="price32">320,000 LKR<br></p>
                       <button type="button" class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;" class="card ">
                       <img style="height:300px;" src="images/HP01.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name33">HP VICTUS 15-FA0004NE</h6>
                       <p class="px-3">HP i5 12th Gen/8GB/512GB SSD/RTX 3050Rs<br></p>
                       <p class="px-3"id="price33">285,000 LKR<br><br></p>
                       <button  type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px" class="card">
                       <img style="height:300px;" src="images/HP04.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name34">HP 15-DW1495NIA</h6>
                       <p class="px-3"> HP Celeron N4120 / 4GB Ram / 256GB SSDRs<br></p>
                       <p class="px-3" id="price34"> 187,500 LKR<br><br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                   </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px; margin-top: 30px;" class="card">
                       <img style="height:300px;" src="images/HP05.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name35">HP 15-DW4000NIA</h6>
                       <p class="px-3">HP i5 12th Gen / 8GB Ram / 512GB SSD / MX 330 2GBRs<br></p>
                       <p class="px-3" id="price35">235,000 LKR<br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
              <div class="col-lg-4">
                   <div style="height: 500px; margin-top: 30px;" class="card">
                       <img style="height:300px;" src="images/HP06.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name36">HP 15S-FQ5004NIA</h6>
                       <p class="px-3">HP i3 12th Gen / 4GB Ram / 256GB SSDRs LKR<br></p>
                       <p class="px-3" id="price36">125,000 LKR<br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                   </div>
               </div>
            </div>
       </div>
 </section>
<section class="laptops py-1">
       <div class="container py-4">
          <h1 style="color:#1C5F17;" class="text-center py-5">ASUS</h1>
            <div class="row">
                <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/asus1.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name37">ASUS TUF F15FX506HC</h6>
                       <p class="px-3">ASUS i5 11th Gen / 8GB / 512GB SSDRs<br></p>
                       <p class="px-3" id="price37">310,000 LKR<br><br></p>
                       <button type="button" class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div style="height: 500px;" class="card ">
                       <img style="height:300px;"  src="images/asus2.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name38">ASUS DASH F15 FX517ZE</h6>
                       <p class="px-3">ASUS intel i7 12th gen / 8GB Ram / 512GB SSD / RTX3050TIRs<br></p>
                       <p class="px-3" id="price38">370,000 LKR<br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;" class="card">
                       <img style="height:300px;" src="images/asus3.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name39">ASUS DASH F15 FX517ZCASUS</h6>
                       <p class="px-3">intel i7 12th Gen / 16GB Ram / 1 TB SSD / RTX3050<br></p>
                       <p class="px-3" id="price39">360,000 LKR<br></p> 
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card ">
                       <img style="height:300px;"  src="images/asus4.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name40">ASUS VivoBook X1500EP</h6>
                       <p class="px-3">ASUS i5 11th Gen / 8GB Ram / 512GB SSDRs <br></p>
                       <p class="px-3"id="price40">195,000 LKR<br><br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card">
                       <img style="height:300px;"  src="images/asus5.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name41">ASUS ExpertBook B2402CBA</h6>
                       <p class="px-3">ASUS i7 12th Gen / 32GB Ram / 1TB HDD / 512GB SSD NvmeRs<br></p>
                       <p class="px-3" id="price41">270,000 LKR<br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
                <div class="col-lg-4">
                   <div style="height: 500px;margin-top: 30px;" class="card">
                       <img style="height:300px;"  src="images/asus6.jpg" class="img-fluid" alt="">
                       <h6 class="p-3 font-weight-bold" id="product_name42">ASUS F17 FX706HF</h6>
                       <p class="px-3">ASUS intel i5 11th gen / 8GB Ram / 512GB SSD / RTX2050Rs<br></p>
                       <p class="px-3"id="price42">295,000 LKR<br></p>
                       <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="laptops py-1">
    <div class="container py-4">
      <h1 style="color:#1C5F17;" class="text-center py-5">Dell</h1>
        <div class="row">
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;" src="images/dell1.png" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name43">Dell XPS 9315 Touch</h6>
                    <p class="px-3"> i5 11th Gen / 8GB / 512GB SSDRs<br></p>
                    <p class="px-3"id="price43">310,000 LKR<br><br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;" class="card pb-3">
                    <img style="height:300px;"  src="images/dell2.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name44">Dell XPS 9315 Touch</h6>
                    <p class="px-3"> i7-1250U 12th Gen Processor /16GB LPDDR5 RAM /512GB PCIe NVMe x2 SSD<br></p>
                    <p class="px-3"id="price44">589,000 LKR<br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;" src="images/dell3.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name45">Dell Latitude 7430</h6>
                    <p class="px-3"> i7 12th Gen/Intel Core i5-1235U Processor/8GB DDR4 3200MHz RAM<br></p>
                    <p class="px-3"id="price45">520,000 LKR<br></p> 
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/dell4.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name46">Dell XPS 9310 – i5</h6>
                    <p class="px-3">Dell XPS 9310 Model/ Intel Core i5-1135G7 Processor /8GB LPDDR4x RAM<br></p>
                    <p class="px-3"id="price46">376,000 LKR<br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/dell5.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name47">Dell Inspiron 5420 – i5</h6>
                    <p class="px-3">Intel Core i5–1235U Processor/8GB 320MHz RAM/512GB PCIe NVMe SSD<br></p>
                    <p class="px-3"id="price47">335,000 LKR<br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
             </div>
             <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/dell6.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name48">Dell Inspiron 3525 (R5)</h6>
                    <p class="px-3"> AMD Ryzen 5 5625U Processor /8GB DDR4 3200MHz RAM <br></p>
                    <p class="px-3"id="price48">229,500 LKR<br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="laptops py-1">
    <div class="container py-4">
      <h1 style="color:#1C5F17;" class="text-center py-5">Lenovo</h1>
        <div class="row">
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;" src="images/lenovo1.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold"id="product_name49">Lenovo IdeaPad 5 15ABA7</h6>
                    <p class="px-3">AMD Ryzen 75825U Processor/16GB Soldered DDR4RAM/512GB M.2SSD<br></p>
                    <p class="px-3"id="price49">327,000 LKR<br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;"  src="images/lenovo2.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name50">Lenovo IdeaPad 5 Pro – 14ACN6 (R5)</h6>
                    <p class="px-3">AMD Ryzen 5 5600U Processor/ 16GB DDR4 3200 RAM /512GB M.2 NVMe SSD<br></p>
                    <p class="px-3"id="price50">329,000 LKR<br></p>
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;" src="images/lenovo3.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name51">Lenovo Ideapad 5 Pro–16ACH6(R5)</h6>
                    <p class="px-3">AMD Ryzen 5–5600H Processor/512GB M.2 PCIe SSD/16GB DDR4-3200RAM<br></p>
                    <p class="px-3"id="price51">339,000 LKR<br></p> 
                    <button type="button"class="AddtoCart"onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/lenovo4.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name52">Lenovo IdeaPad 3–15ACH6 (R5)</h6>
                    <p class="px-3">AMD Ryzen5–5600H Processor/512GB M.2NVMeSSD/16GB DDR4-3200RAM<br></p>
                    <p class="px-3"id="price52"> 349,000 LKR</p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/lenovo5.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name53">Lenovo IdeaPad 5 Pro – 14ACN6 (R7)</h6>
                    <p class="px-3"> AMD Ryzen 7 5800U Processor /16GB DDR4 3200 RAM /512GB M.2 NVMe SSD<br></p>
                    <p class="px-3"id="price53">375,000 LKR<br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card">
                    <img style="height:300px;"  src="images/lenovo6.png" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name54">Lenovo IdeaPad 5 Pro 16ARH7 – R5</h6>
                    <p class="px-3">AMD 5–6600HS Processor/512GB M.2 2280NVMe SSD/16GB 6400MHzRAM<br></p>
                    <p class="px-3"id="price54">275,000 LKR<br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
         </div>
    </div>
</section>
<section class="laptops py-1">
    <div class="container py-4">
      <h1 style="color:#1C5F17;" class="text-center py-5">Apple</h1>
        <div class="row">
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;" src="images/a1.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name55">Macbook Air 13 inch 2022</h6>
                    <p class="px-3">Apple M2 8-Core CPU /8GB Unified RAM | 256GB SSD<br></p>
                    <p class="px-3"id="price55">375,000 LKR<br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height:500px;" class="card ">
                    <img style="height:300px;"  src="images/a2.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name56">Macbook Pro13 16GB/256GB(2020)</h6>
                    <p class="px-3">Apple M18/16GBRAM|256GB SSD<br></p>
                    <p class="px-3"id="price56">412,000LKR<br><br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;" class="card">
                    <img style="height:300px;" src="images/a3.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name57">MacBook Pro intel i7 16 inch 16/512GB</h6>
                    <p class="px-3">2.6GHz 9th-gen Intel Core i7 processor/Turbo Boost up to 4.5GHz<br></p>
                    <p class="px-3"id="price57">582,000 LKR<br></p> 
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/a4.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name58">Macbook Pro 16 inch 2023</h6>
                    <p class="px-3">32GB Unified Memory /1TB SSD Storage<br></p>
                    <p class="px-3"id="price58"> 1,253,000 LKR<br><br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card">
                    <img style="height:300px;"  src="images/a5.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name59">Macbook M2 Chip 13inch 8GB/256GB</h6>
                    <p class="px-3">10‑core GPU, 16‑core Neural Engine/8GB unified memory/256GB SSD storage<br></p>
                    <p class="px-3"id="price59">388,000 LKR<br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="height: 500px;margin-top: 30px;" class="card ">
                    <img style="height:300px;"  src="images/a6.jpg" class="img-fluid" alt="">
                    <h6 class="p-3 font-weight-bold" id="product_name60">MacBook M1 Chip 13.3inch 8/512GB</h6>
                    <p class="px-3">Apple M18-Core CPU/8GB Unified RAM|512GB SSD<br></p>
                    <p class="px-3"id="price60">468,000 LKR<br></p>
                    <button type="button"class="AddtoCart" onclick="addToCart();">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>

 <footer class="mt-5 text-center">
  <div id="footerContact">
             <!-- footer section start -->
    <div id="footer" class="section_footer"></div>
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
           <a href="index.html" text-ailng>Home</a><br>
            <a href="Registration.html">Register</a><br>
            <a href="Login.html">Login<br>
            <a href="about.html">About </a>
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
 </div>
</footer>

 <script>
function scrollToFooter() {
  var footerContact = document.getElementById("footerContact");
  footerContact.scrollIntoView({ behavior: "smooth" });
}
</script>
   <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text"> All Right Reserved.</p>
    </div>
  </div>
   <!-- copyright section end -->
  <script src="script.js">
</script>
</body>
</html>