<?php 
    include("header.php");
   $slug = $_GET['slug'];
   $details = $car->getSingleCar($slug);
   $cate = $car->getSingleCategoryList($details['category_id']);
  
    
?>
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Product Details</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="./">Home</a></li>
                        <li><i class="fa fa-table"></i></li>
                        <li><a href="car_details?slug=<?php echo $slug ?>"><?php echo $details['name'] ?> Details</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Product Details Page Start -->
      <section class="gauto-product-details section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="product-details-image">
                     <img src="<?php echo 'assets/cars/'. $details['car_image'] ?>" alt="product" />
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="product-details-text">
                     <h3><?php echo $details['name'] ?></h3>
                     <div class="car-rating">
                        <ul>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star"></i></li>
                           <li><i class="fa fa-star-half-o"></i></li>
                        </ul>
                       
                     </div>
                     <div class="single-pro-page-para">
                        <p>Description: <?php echo $details['name'] ?></p>
                        <p>Capacity: <?php echo $details['capacity'] ?> Person</p>
                        <p>Facilities: <?php echo $details['facilities'] ?></p>

                        <p>Color: <?php echo $details['color'] ?></p>
                            <?php 
                            $status = $details['status'];
                            if($status ==1){ ?>
                                <p style="color: green">Status: Available</p><?php
                            }elseif($status ==2 ){ ?>
                                
                                <p style="color: red">Status: Booked</p><?php
                            }else{
                                echo 'STatus: Not Available';
                            } ?> 
                        <p><?php echo $details['name'] ?></p>
                     </div>
                     <div class="single-shop-price">
                        <p>Price: &#8358;<?php echo number_format($details['price']) ?><span>/ Day</span></p>
                        <!-- <p class="qnt">Quantity:<input value="1" type="number"></p> -->
                     </div>
                     <div class="single-shop-page-btn">
                        <?php 
                        $status = $details['status'];
                        if($status ==1){ ?>
                           <form action="handlers/cart/addToCart.php" method="get">
                              <input type="hidden" name="amount" value="<?php echo $details['price'] ?>">
                              <input type="hidden" name="slug" value="<?php echo $slug; ?>">
                              <input type="hidden" name="name" value="<?php echo $details['name']; ?>">
                              <input type="hidden" name="quantity" value="<?php echo 1 ?>">
                              <input type="hidden" name="return" value="<?php $_SERVER['REQUEST_URI'] ?>">
                              <button type="submit" class="gauto-btn"><i class="fa fa-shopping-cart"></i> book the car</button>
                           <form><?php 
                        }else{?>
                            <a href="" class="gauto-btn"><i class="fa fa-cancel"></i> Not available for bookings</a><?php 
                        } ?>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Product Details Page End -->
       
       
      <!-- Related Products Area Start -->
      <section class="gauto-related-products section_b_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="site-heading">
                     <h4>Related Cars</h4>
                     <h2>Cars in the same categories</h2>
                  </div>
               </div>
            </div>
            <div class="row"><?php 
               foreach($car->getSinglePaginate($details['category_id']) as $listCars){ ?>   

                  <div class="col-lg-3 col-sm-6">
                     <div class="product-item">
                        <div class="product-image">
                           <a href="car_details?slug=<?php echo $listCars['slug'] ?>">
                           <img src="<?php echo 'assets/cars/'. $listCars['car_image'] ?>" style="width:250px; height:180px"  alt="offer 1" />
                           </a>
                        </div>
                        <div class="product-text">
                           <div class="product-title">
                              <h3><a href="car_details?slug=<?php echo $listCars['slug'] ?>"><?php echo $listCars['name'] ?></a></h3>
                              <p>&#8358;<?php echo number_format($listCars['price']) ?><span>/ Day</span></p>
                           </div>
                           <div class="product-action">
                              <a href="car_details?slug=<?php echo $listCars['slug'] ?>"><i class="fa fa-shopping-cart"></i></a>
                           </div>
                        </div>
                     </div>
                  </div><?php
               } ?>
               
            </div>
         </div>
      </section>
      <!-- Related Products Area End -->

<?php 
    include("footer.php");
?>c