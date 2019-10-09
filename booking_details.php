<?php 
    include("header.php");
    if(!isset($_SESSION['id'])){ ?>
      <script type="text/javascript"> window.location=('login');</script><?php 
     $_SESSION['error'] = "Please Register Or Login into Your Account"; 
 }
 $reg_number = $_GET['registration_number'];
$orderId = $_GET['order_number'];
$buy = $order->getOrderId($orderId);  
    
?>
  <!-- Breadcromb Area Start -->
  <section class="gauto-breadcromb-area section_70">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>My Booking Details </h3>
                    <ul>
                    <li><i class="fa fa-home"></i></li>
                    <li><a href="./">Home</a></li>
                    <li><i class="fa fa-cogs"></i></li>
                    <li><a href="booking_details?order_number=<?php echo $order_id ?>&&registration_number=<?php echo $customer_id ?>">
                    Booking Details</a></li>
                    <li><i class="fa fa-shopping-cart"></i></li>
                    <li><a href="my_bookings?registration_number=<?php echo $reg_number ?>">My Booking </a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>My Booking List</li>
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table-left">
                        <h3> <?php echo $_SESSION['name'] ?> Booking Breakdown</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Product </th>
                                    <th> Quantity</th>
                                    
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody><?php
                                $number =1; 
                                foreach($order->singleCustomerOrder($orderId) as $listOrder) {
                                    $buy = $order->getOrderId($orderId);
                                    $slug = $listOrder['slug'];
                                    $see = $car->getSingleCar($slug);
                                    $customer_id = $buy['customer_id'];
                                    $level = $customer->getAllSingleCustomer($customer_id);
                                    ?>
                                    <tr>
                                        <td><?php echo $number; ?>
                                        </td>
                                        <td><?php echo $see['name'] ?></td>
                                        <td><?php echo $listOrder['quantity'] ?></td>
                                        
                                        <td>&#8358;<?php echo number_format($listOrder['amount']) ?></td>
                                    </tr><?php
                                    $number++; 
                                }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-clear">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cart-table-left">
                        <h3>  Payment Breakdown</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <?php
                                $buy = $order->getCustomerOrderDetails($orderId);
                                $customer_id = $buy['customer_id'];
                                $level = $customer->getAllSingleCustomer($customer_id);
                                $tot = $order->singleOrder($customer_id, $orderId); ?>
                                <tbody>
                                    <tr>
                                        <td>Order Number: <?php echo $orderId; ?></td>
                                    </tr>
                                </tbody>  
                                <tbody>
                                    <tr>
                                        <td>Payment Id: <?php echo ($tot['paystack_reference']); ?></td>
                                    </tr>
                                </tbody>   
                                
                                <tbody>
                                    <tr>
                                        <td>Total Charges: &#8358;<?php echo number_format($tot['amount']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-clear">
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cart-table-left">
                        <h3> <?php echo $_SESSION['name'] ?> Shipping Address</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <?php
                                $buy = $order->getCustomerOrderDetails($orderId);
                                $customer_id = $buy['customer_id'];
                                $level = $customer->getAllSingleCustomer($customer_id);
                                $reg_number = $level['reg_number'];
                                foreach($register->gettingShippinCustomerAddress($reg_number) as $shippingDetails){ ?>
                                    <tbody>
                                        <tr>
                                            
                                            <td>Full Name: <?php echo $level['full_name'] ?></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            
                                            <td>E-Mail: <?php echo $level['user_name'] ?></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            
                                            <td>Phone: <?php echo $shippingDetails['phone'] ?></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            
                                            <td>Opposite: <?php echo $shippingDetails['landmark'] ?></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            
                                            <td>Address: <?php echo $shippingDetails['address']; ?></td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            
                                            <td>State: <?php echo $shippingDetails['state'] ?></td>
                                        </tr>
                                    </tbody><?php 
                                } ?>
                            </table>
                        </div>
                        
                    </div>
                </div>
                    
            </div>
        </div>
    </section>
      <!-- Cart Page End -->
<?php 
    include("footer.php");
?>