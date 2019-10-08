<?php 
    include("header.php");
    if(!isset($_SESSION['id'])){ ?>
      <script type="text/javascript"> window.location=('login');</script><?php 
     $_SESSION['error'] = "Please Register Or Login into Your Account"; 
 }

 if(!isset($_SESSION['cart'])){ 
     $_SESSION['error'] = "Your Shopping Cart is Empty"; ?>
    <script type="text/javascript"> window.location=('cars');</script><?php

 } 
 $reg_number = $_SESSION['reg_number'];
 $shippingDetails = $register->gettingShippinCustomerAddress($reg_number);
 $counting = count($shippingDetails);
    
?>
  <!-- Breadcromb Area Start -->
  <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Booking Cart</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="./">Home</a></li>
                        <li><i class="fa fa-shopping-cart"></i></li>
                        <li><a href="./">Booking cart </a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Shopping Cart</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Cart Page Start -->
      <section class="gauto-cart-page-area section_70">
         <div class="container">
            <div class="row"><?php 
               if(!empty($_SESSION['cart'])){ 
                  $cart = $_SESSION['cart'];
                  $count = count($cart);
                  $reg_number = $_SESSION['reg_number'];
                  $shipLocation = $register->getShippinCusgAddress($reg_number); 
                  $state = $shipLocation['state']; 
                  $shipAmount = $register->getShippinLocationMoney($state); 
                  $shippingFee = $shipAmount['charge']; 
                  $total = array();
                  $wey = array(); ?>
                  <div class="col-lg-8">
                     <div class="cart-table-left">
                        <h3>Booking Cart</h3>
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th>Preview</th>
                                    <th>Car</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody><?php
                                 $num =1;
                                 foreach($_SESSION['cart'] as $item){
                                    $slug = $item['slug'];
                                    $details = $car->getSingleCar($item['slug']); 
                                    $cal = $item['amount'] * $item['quantity'];

                                    array_push($total, $cal); ?>
                                    <tr class="shop-cart-item">
                                       <td class="gauto-cart-preview">
                                          <img src="<?php echo 'assets/cars/'. $details['car_image'] ?>" alt="">
                                          
                                       </td>
                                       <td class="gauto-cart-product">
                                          <a href="#">
                                             <p><?php echo $details['name'] ?></p>
                                          </a>
                                       </td>
                                       <td class="gauto-cart-price">
                                          <p>&#8358;<?php echo number_format($details['price']) ?><span>/ Day</span></p>
                                       </td>
                                       <td class="gauto-cart-quantity">
                                          <input type="number" value="1" readonly>
                                       </td>
                                       <td class="gauto-cart-total">
                                          <p>&#8358;<?php echo number_format($cal) ?> </p>
                                       </td>
                                       <td class="gauto-cart-close">
                                          <a href="handlers/cart/removeFromCart.php?slug=<?php echo $item['slug'] ?>"><i class="fa fa-times"></i></a>
                                       </td>
                                    </tr> <?php 

                                    // $price =$item['amount'];
                                    // $cal = $price * $item['quantity'];
                                    // array_push($total, $price); 
                                 } ?>
                                 
                              </tbody>
                           </table>
                        </div>
                        <div class="cart-clear">
                           <!-- <a href="#">clear cart</a> -->
                           <a href="cars">update cart</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="order-summury-box">
                        <h3>Order Summury</h3>
                        <table>
                           <tbody>
                              <tr>
                                 <td>Cart Subtotal</td>
                                 <td>&#8358;<?php echo number_format(array_sum($total)); ?></td>
                              </tr>
                              <tr>
                                 <td>Shipping and Handling</td>
                                 <td>Free Shipping</td>
                              </tr>
                              <tr>
                                 <td>Order Total</td>
                                 <td>&#8358;<?php echo number_format(array_sum($total)); ?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="checkout-action">
                        <a href="checkout" class="gauto-btn">Proceed to checkout</a>
                     </div>
                  </div><?php
               }else{ ?>
                <div class="page-title" align="center">
                    <h2 style="color: red">Your Booking Cart is Empty</h2>
                </div>  <?php 
                            
            } ?>
            </div>
         </div>
      </section>
      <!-- Cart Page End -->
<?php 
    include("footer.php");
?>