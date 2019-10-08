<?php 
    include("header.php");
    if(!isset($_SESSION['id'])){ ?>
      <script type="text/javascript"> window.location=('login');</script><?php 
     $_SESSION['error'] = "Please Register Or Login into Your Account"; 
   }

   if(!isset($_SESSION['cart'])){ ?>
      <script type="text/javascript"> window.location=('cars');</script><?php
      $_SESSION['error'] = "Your Shopping Cart is Empty"; 

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
                  <h3>Checkout</h3>
                  <ul>
                     <li><i class="fa fa-home"></i></li>
                     <li><a href="index.html">Home</a></li>
                     <li><i class="fa fa-angle-right"></i></li>
                     <li>Checkout</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Checkout Page Area Start -->
      <section class="checkout-page-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="checkout-left-box">
                     <h3>Billing Details</h3> <?php 
                     if($counting > 0){
                        foreach ($shippingDetails as$getAddress ){ ?>
                           <form>
                              <div class="row checkout-form">
                                 <div class="col-md-6">
                                    <label for="name23">First Name</label>
                                    <input type="text" name="firstname" id="name23" value="<?php echo $_SESSION['name'] ?>" readonly>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="cntr2">Country</label>
                                    <input type="text" name="country" id="cntr2" value="Nigeria">
                                 </div>
                                 
                              </div>
                              <div class="row checkout-form">
                                 <div class="col-md-6">
                                    <label for="info2">Email Address *</label>
                                    <input type="email" name="info2" id="info2" value="<?php echo $_SESSION['user_name'] ?>" readonly>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="info2">Mobile Number *</label>
                                    <input type="text" name="info2" id="info12" value="<?php echo $getAddress['phone'] ?>">
                                 </div>
                              </div>
                              
                              <div class="row checkout-form">
                                 <div class="col-md-12">
                                    <label for="addr2">Address</label>
                                    <input type="text" name="address" id="addr2" value="<?php echo $getAddress['address'] ?>">
                                 </div>
                              </div>
                              <div class="row checkout-form">
                                 <div class="col-md-12">
                                    <label for="Town2">Town / City *</label>
                                    <input type="text" name="town" id="Town2" value="<?php echo $getAddress['state'] ?>">
                                 </div>
                              </div>
                             
                              <div class="row checkout-form">
                                 <div class="col-md-12">
                                    <label for="info2">Order Note *</label>
                                    <textarea name="ordernote"></textarea>
                                 </div>
                              </div>
                           </form><?php 
                        } 
                     }else{ ?>
                        <script type="text/javascript"> window.location=('shipping-address');</script>
                        <?php
                     } ?>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="order-summury-box">
                     <h3>Order Summury</h3>
                     <table>
                        <tbody>
                           <tr>
                              <td>Cart Subtotal</td>
                              <td>$270</td>
                           </tr>
                           <tr>
                              <td>Shipping and Handling</td>
                              <td>Free Shipping</td>
                           </tr>
                           <tr>
                              <td>Order Total</td>
                              <td>$270</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="booking-right">
                     <div class="gauto-payment clearfix">
                        <div class="payment">
                           <input type="radio" id="ss-option" name="selector">
                           <label for="ss-option">Direct Bank Transfer</label>
                           <div class="check">
                              <div class="inside"></div>
                           </div>
                           <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference.order won’t be shipped until the funds have cleared.</p>
                        </div>
                        <div class="payment">
                           <input type="radio" id="f-option" name="selector">
                           <label for="f-option">Cheque Payment</label>
                           <div class="check">
                              <div class="inside"></div>
                           </div>
                        </div>
                        <div class="payment">
                           <input type="radio" id="s-option" name="selector">
                           <label for="s-option">Credit Card</label>
                           <div class="check">
                              <div class="inside"></div>
                           </div>
                           <img src="assets/img/master-card.jpg" alt="credit card">
                        </div>
                        <div class="payment">
                           <input type="radio" id="t-option" name="selector">
                           <label for="t-option">Paypal</label>
                           <div class="check">
                              <div class="inside"></div>
                           </div>
                           <img src="assets/img/paypal.jpg" alt="credit card">
                        </div>
                     </div>
                     <div class="action-btn">
                        <a href="#" class="gauto-btn">place order</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Checkout Page Area End -->
<?php 
    include("footer.php");
?>