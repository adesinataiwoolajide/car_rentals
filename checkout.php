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
                     <li><a href="./">Home</a></li>
                     <li><i class="fa fa-angle-right"></i></li>
                     <li><i class="fa fa-list"></i></li>
                     <li><a href="checkout">Check Out</a></li>
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
                           <form action="handlers/shipping/update-shipping-address.php" method="POST">
                              <div class="row checkout-form">
                                 <div class="col-md-6">
                                    <label for="name23">First Name</label>
                                    <input type="text" name="name" id="name23" value="<?php echo $_SESSION['name'] ?>" readonly>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="cntr2">Country</label>
                                    <input type="text" name="country" id="cntr2" value="Nigeria" readonly>
                                 </div>
                                 
                              </div>
                              <input type="hidden" name="customer_id" value="<?php echo $getAddress['customer_id'] ?>">
                              <div class="row checkout-form">
                                 <div class="col-md-6">
                                    <label for="info2">Email Address *</label>
                                    <input type="email" name="info2" id="info2" value="<?php echo $_SESSION['user_name'] ?>" readonly>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="info2">Mobile Number *</label>
                                    <input type="text" name="phone" id="info12" value="<?php echo $getAddress['phone'] ?>">
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
                                    <!-- <label for="Town2">Town / City *</label> -->
                                   
                                    <select name="state" required id="Town2">
                                    <option value="<?php echo $getAddress['state'] ?>"><?php echo $getAddress['state'] ?> </option>
                                        <option value=""> </option><?php 
                                        $zone = $db->prepare("SELECT * FROM shipping_location_charge ORDER BY location ASC");
                                        $zone->execute(); 
                                        while($see_state = $zone->fetch()){ ?>
                                            <option value="<?php echo $see_state['location']; ?>"><?php echo $see_state['location']; ?></option><?php  
                                        } ?>

                                    </select>
                                 </div>
                              </div> <br>
                             
                              <!-- <div class="row checkout-form">
                                 <div class="col-md-12">
                                    <label for="info2">Order Note *</label>
                                    <textarea name="ordernote"></textarea>
                                 </div>
                              </div> -->
                              <p>
                                <button type="submit" class="gauto-theme-btn" name="update-address">Update shipping Address</button>
                                </p>
                           </form><?php 
                        } 
                     }else{ ?>
                        <script type="text/javascript"> window.location=('shipping-address');</script>
                        <?php
                     } ?>
                  </div>
               </div> <?php
               if(!empty($_SESSION['cart'])){ 
                  $cart = $_SESSION['cart'];
                  $count = count($cart);
                  $reg_number = $_SESSION['reg_number'];
                  $shipLocation = $register->getShippinCusgAddress($reg_number); 
                  $state = $shipLocation['state']; 
                  $shipAmount = $register->getShippinLocationMoney($state); 
                  $shippingFee = $shipAmount['charge']; 
                  $total = array();
                  foreach($_SESSION['cart'] as $item){
                     $slug = $item['slug'];
                     $details = $car->getSingleCar($item['slug']); 
                     $cal = $item['amount'] * $item['quantity'];

                     array_push($total, $cal);
                  } ?>
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
                     <div class="booking-right">
                        <div class="gauto-payment clearfix">
                           <div class="payment">
                              <input type="radio" id="ss-option" name="selector">
                              <label for="ss-option">Direct Bank Transfer</label>
                              <div class="check">
                                 <div class="inside"></div>
                              </div>
                              <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference..</p>
                           </div>
                           
                        </div>
                        <div class="action-btn">
                           <form action="handlers/orders/saveOrder.php" method="post" id="self">
                              <script src='https://js.paystack.co/v1/inline.js'></script>
                              <input type="hidden" name="total" value="<?php echo  array_sum($total); ?>"  >
                              <input type="hidden" name="email" id="email" value="<?php echo $_SESSION['user_name']; ?>">
                              
                              <?php 
                              if($counting ==0){ ?>
                                 <a href="shipping-address" class="gauto-btn">Make Payment</a> <?php 
                              }else{ ?>
                                 <button class="gauto-theme-btn" type="submit" name="submit">
                                 Proceed to Payment</button> <?php 
                              } ?>
                              
                              </div>
                           </form>
                           <script> 
                              // function payWithPaystack(){

                              //    var handler = PaystackPop.setup({
                              //       key: 'sk_test_3ab911f611cb52cd9ac47d872263f96536b6cb2b',
                              //       email: '<?php echo $_SESSION['user_name']; ?>',
                              //       amount: <?php echo  array_sum($total); ?>,
                              //       re: ''+Math.floor((Math.random() * 1000000000) +1)
                              //       metadata: {
                              //          custome_fields : [
                              //             {
                              //                display_name: "08138139333",
                              //                variable_name: "09072281204",
                              //                value: ""
                              //             }
                              //          ]
                              //       },
                              //       callback: function(response){
                              //          alert('window closed');
                              //       }
                              //    });
                              //    handler.openIframe();
                              // }
                           </script>
                           
                        </div>
                     </div>
                  </div><?php 
               } ?>
            </div>
         </div>
      </section>
      <!-- Checkout Page Area End -->
<?php 
    include("footer.php");
?>