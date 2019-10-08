<?php
    session_start();
   require_once("Dev/autoload.php");
   require("Dev/general/all_purpose_class.php");
   require_once 'Dev/registration/customer_registration.php';
   include_once("connection/connection.php");
	require('Dev/Database.php');
   
   $register = new newCustomerRegistration($db);
	$all_purpose = new all_purpose($db);
	$categories = new Categories();
   $user = new User();
   $driver = new Driver();
   $brand = new Brand();
   $car = new Car();
    ?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="gauto | Car Rental HTML Template from Themescare">
      <meta name="keyword" content="taxi,car,rent,hire,transport">
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>Car Bookings</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Datepicker css-->
      <link rel="stylesheet" href="assets/css/jquery.datepicker.css">
      <!--Nice Select css-->
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <!-- Lightgallery css -->
      <link rel="stylesheet" href="assets/css/lightgallery.min.css">
      <!--ClockPicker css-->
      <link rel="stylesheet" href="assets/css/jquery-clockpicker.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" type="text/css" href="administrator/dashboard/Toast/css/Toast.min.css">
   </head>
   <body>
       
       
      <!-- Header Top Area Start -->
      <section class="gauto-header-top-area">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="header-top-left">
                     <p>Need Help?: <i class="fa fa-phone"></i> Call: +234 81 381 393 33</p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="header-top-right"><?php
                     if(isset($_SESSION['reg_number'])){ 
                        $reg_number = $_SESSION['reg_number'];
                         ?>
                        <a href="logout">
                        <i class="fa fa-key"></i>
                        Logout
                        </a>
                        
                        <a href="dashboard">
                        <i class="fa fa-user"></i>
                        dashboard
                        </a><?php 
                     }else{ ?>
                        <a href="login">
                        <i class="fa fa-key"></i>
                        Login
                        </a>
                        <a href="register">
                        <i class="fa fa-user"></i>
                        register
                        </a> 
                        <!-- <a href="#">
                        <i class="fa fa-user"></i>
                        dashboard
                        </a> --><?php
                     } ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Header Top Area End -->
       
       
      <!-- Main Header Area Start -->
      <header class="gauto-main-header-area">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="site-logo">
                     <a href="./">
                     <img src="assets/img/logo.png" alt="gauto" />
                     </a>
                  </div>
               </div>
               <div class="col-lg-6 col-sm-9">
                  <div class="header-promo">
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="assets/img/globe.png" alt="globe" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Ladoke Akintola</h3>
                           <p>Bodija, Ibadan</p>
                        </div>
                     </div>
                     <div class="single-header-promo">
                        <div class="header-promo-icon">
                           <img src="assets/img/clock.png" alt="clock" />
                        </div>
                        <div class="header-promo-info">
                           <h3>Monday to Friday</h3>
                           <p>9:00am - 6:00pm</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="header-action">
                     <a href="#"><i class="fa fa-phone"></i> Request a call</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Main Header Area End -->
       
       
      <!-- Mainmenu Area Start -->
      <section class="gauto-mainmenu-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-9">
                  <div class="mainmenu">
                     <nav>
                        <ul id="gauto_navigation">
                           <li class=""><a href="./">home</a></li>
                           <li class=""><a href="aboutus">About</a></li>
                           
                           <li class=""><a href="services.php">services</a></li>
                           <li class=""><a href="cars">cars</a></li>
                           <li class=""><a href="gallery">gallery</a></li>
                           <li class=""><a href="team"> Our Team</a></li>
                           
                           <li>
                              <a href="">Brands</a>
                              <ul><?php
                                 foreach($brand->getAllBrand() as $listBrand) { ?>
                                    <li><a href="brand?brand_name=<?php echo $listBrand['brand_name'] ?>"><?php echo $listBrand['brand_name'] ?></a></li><?php 
                                 } ?>
                                 
                              </ul>
                           </li>
                           <li>
                              <a href="">Categories</a>
                              <ul><?php
                                 foreach($categories->getAllCategory() as $listCa) { ?>
                                    <li><a href="categories?category_name=<?php echo $listCa['category_name'] ?>"><?php echo $listCa['category_name'] ?></a></li><?php 
                                 } ?>
                                 
                              </ul>
                           </li>

                           <li class=""><a href="contactus">contact us</a></li>
                           
                           
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-12">
                  <div class="main-search-right">
                     <!-- Responsive Menu Start -->
                     <div class="gauto-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                      
                     <!-- Cart Box Start -->
                     <div class="header-cart-box">
                        <div class="login dropdown"> <?php
                           if(isset($_SESSION['cart'])){?>
                              <button class="dropdown-toggle cart-icon" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span><?php
                                    echo count($_SESSION['cart']);?></span>
                              </button><?php 
                              
                              $cart = $_SESSION['cart'];
                              $count = count($cart);
                              if($count > 0){
                                 $total = array(); ?>
                                 <div class="dropdown-menu cart-dropdown" aria-labelledby="dropdownMenu1">
                                    <ul class="product_list">
                                       <?php
                                       foreach($cart as $item){  
                                          $slugO = $item['slug'];
                                          $show = $car->getSingleCar($item['slug']); ?>
                                          <li>
                                             <div class="cart-btn-product">
                                                <a class="product-remove" href="handlers/cart/removeFromCart.php?slug=<?php echo $item['slug'] ?>">
                                                <i class="fa fa-times"></i>
                                                </a>
                                                <div class="cart-btn-pro-img">
                                                   <a href="car_details?slug=<?php echo $item['slug'] ?>">
                                                   <img src="<?php echo 'assets/cars/'. $show['car_image'] ?>" alt="product" />
                                                   </a>
                                                </div>
                                                <div class="cart-btn-pro-cont">
                                                   <h4><a href="#"><?php $show['name']; ?> </a></h4>
                                                   <p>Quantity 1</p>
                                                   <span class="price">
                                                   &#8358;<?php echo number_format($show['price']) ?><span>/ Day</span>
                                                   </span>
                                                </div>
                                             </div>
                                          </li><?php 
                                          $price =$item['amount'];
                                          $cal = $price * $item['quantity'];
                                          array_push($total, $price); 
                                       } ?>
                                    
                                    </ul>
                                    <div class="cart-subtotal">
                                       
                                       <p>
                                          Subtotal :
                                          <span class="drop-total">&#8358;<?php echo number_format(array_sum($total));?></span>
                                       </p>
                                    </div>
                                    <div class="cart-btn">
                                       <a href="shopping-cart" class="cart-btn-1">View Cart</a>
                                       <a href="checkout" class="cart-btn-2">Checkout</a>
                                    </div>
                                 </div><?php
                              } 
                           } else{ ?>
                               <button class="dropdown-toggle cart-icon" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span>0</span><?php
                           } ?>
                        </div>
                     </div>
                     <!-- Cart Box End -->
                      
                     <!-- Search Box Start -->
                     <div class="search-box">
                        <form>
                           <input type="search" placeholder="Search">
                           <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- Search Box End -->
                      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Mainmenu Area End -->