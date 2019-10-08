<?php 
    include("header.php");
    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
        $count = count($cart);
    }else{
        $count = 0;
    }
    if(!isset($_SESSION['id'])){ ?>
       
       <script type="text/javascript"> window.location=('login');</script><?php 
        $_SESSION['error'] = "Please Register Or Login into Your Account"; 
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
                  <h3>Customer Shipping Page</h3>
                  <ul>
                     <li><i class="fa fa-home"></i></li>
                     <li><a href="./">Home</a></li>
                     <li><i class="fa fa-building"></i></li>
                     <li><a href="shipping-address">Delivery Form</a></li>
                     <li><i class="fa fa-angle-right"></i></li>
                     <li>Login</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="gauto-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box">
                     <div class="login-page-heading">
                        <i class="fa fa-key"></i>
                        <h3>DELIVERY FORM</h3>
                     </div>
                     <p class="" align="center">Please Add Your Shipping Address Below</p>
                    <?php 
                    if($counting > 0){
                        foreach ($shippingDetails as$getAddress ){ ?>
                           <form action="handlers/shipping/update-shipping-address.php" method="POST">
                                <div class="account-form-group">
                                    
                                    <input type="number" placeholder="Enter Phone Number" name="phone" required value="<?php echo $getAddress['phone'] ?>">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="account-form-group">
                                    
		                            <input type="text" name="landmark" class="form-control" required value="<?php echo $getAddress['landmark'] ?>">
                                    <i class="fa fa-building"></i>
                                </div>
                                <div class="account-form-group">
                                   
                                    <select class="form-control" name="state" required >
                                    <option value="<?php echo $getAddress['state'] ?>"><?php echo $getAddress['state'] ?> </option>
                                        <option value=""> </option><?php 
                                        $zone = $db->prepare("SELECT * FROM shipping_location_charge ORDER BY location ASC");
                                        $zone->execute(); 
                                        while($see_state = $zone->fetch()){ ?>
                                            <option value="<?php echo $see_state['location']; ?>"><?php echo $see_state['location']; ?></option><?php  
                                        } ?>

                                    </select>
                                    
                                </div>
                                <div class="account-form-group">
                                    
                                    <textarea class="form-control" name="address" required> <?php echo $getAddress['address'] ?></textarea>
                                    
                                </div>
                                <input type="hidden" name="customer_id" value="<?php echo $getAddress['customer_id'] ?>">
                                
                                <p>
                                <button type="submit" class="gauto-theme-btn" name="update-address">Update shipping Address</button>
                                </p>
                            </form><?php 
                        }
                    }else{ ?>
                        <form action="handlers/shipping/add-shipping-address.php" method="POST"> 
                            <div class="account-form-group">
                               
                                <input type="number" placeholder="Enter Phone Number" name="phone" required>
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="account-form-group">
                                
                                <input type="text" name="landmark" placeholder="Enter Landmark" class="form-control" required>
                                <i class="fa fa-building"></i>
                            </div>
                            <div class="account-form-group">
                                
                                <select class="" name="state" required>
                                    <option value="">-- Select Your City or State --</option>
                                    <option value=""> </option><?php 
                                    $zone = $db->prepare("SELECT * FROM shipping_location_charge ORDER BY location ASC");
                                    $zone->execute(); 
                                    while($see_state = $zone->fetch()){ ?>
                                        <option value="<?php echo $see_state['location']; ?>"><?php echo $see_state['location']; ?></option><?php  
                                    } ?>

                                </select>
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="account-form-group">
                                
                                <textarea type="text" class="form-control" name="address" required placeholder="Enter Your Address"> </textarea>
                                <i class="fa fa-map"></i>
                            </div>
                            
                            <p>
                            <button type="submit" class="gauto-theme-btn" name="add-address">Add shipping Address</button>
                            </p>


                        </form><?php
                    } ?>
                     <div class="login-sign-up">
                        <a href="register">Do you need an account?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
       
<?php 
    include("footer.php");
?>