<?php 
    include("header.php");
    if(!isset($_SESSION['id'])){ ?>
      <script type="text/javascript"> window.location=('login');</script><?php 
     $_SESSION['error'] = "Please Register Or Login into Your Account"; 
 }
 $reg_number = $_GET['registration_number'];
    
?>
  <!-- Breadcromb Area Start -->
  <section class="gauto-breadcromb-area section_70">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>My Bookings </h3>
                    <ul>
                    <li><i class="fa fa-home"></i></li>
                    <li><a href="./">Home</a></li>
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
            <div class="row"><?php 
                $reg_number = $_SESSION['reg_number'];
                $shipLocation = $register->getShippinCusgAddress($reg_number); 
                $state = $shipLocation['state']; 
                $shipAmount = $register->getShippinLocationMoney($state); 
                $shippingFee = $shipAmount['charge']; 
                $customer_id = $reg_number; ?>
                <div class="col-lg-12">
                    <div class="cart-table-left">
                        <h3> <?php echo $_SESSION['name'] ?> Booking List</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Customer</th>
                                    <th>E-Mail</th>
                                    <th> Order Number</th>
                                    <th>Transaction Number </th>
                                    <th>Payment Status</th>
                                    <th>Shipping Status</th>
                                    <th>Delivery Status</th>
                                    <th>Total Order</th>
                                </tr>
                                </thead>
                                <tbody><?php
                                $number =1; 
                                    foreach($customer->getAllSingleCustomerOrder($customer_id) as $listOrder) {
                                        $customer_id = $listOrder['customer_id'];
                                        $level = $customer->getAllSingleCustomer($customer_id);
                                        $order_id=$listOrder['order_id'] ?>
                                        <tr>
                                            <td><?php echo $number; ?>
                                                <a href="booking_details?order_number=<?php echo $order_id ?>&&registration_number=<?php echo $customer_id ?>" 
                                                class=""><i class="fa fa-list"></i></a>
                                            </td>
                                            <td><?php echo $level['full_name'] ?></td>
                                            <td><?php echo $level['user_name'] ?></td>
                                            <td><?php echo $order_id ?></td>
                                            <td><?php echo $listOrder['paystack_reference'] ?></td> 
                                            <td><?php 
                                                if($listOrder['paid_status'] ==0){ ?>
                                                    <p style="color: red"> Failed</p><?php 
                                            
                                                }else{ ?>
                                                    <p style="color: green"> Success</p><?php
                                                } ?>
                                                
                                            </td>
                                            <td>
                                                <?php 
                                                if($listOrder['shipping'] ==0){ ?>
                                                    <p style="color: red"> Pending</p><?php
                                                }else{ ?>
                                                    <p style="color: green"> Shipped</p><?php
                                                } ?></td>
                                            <td>
                                                <?php 
                                                if($listOrder['delivery'] ==0){ ?>
                                                    <p style="color: red"> Pending</p><?php
                                                
                                                }else{ ?>
                                                    <p style="color: green"> Delivered</p><?php
                                                } ?></td>
                                            <td>&#8358;<?php echo number_format($listOrder['amount']) ?></td>
                                        </tr><?php
                                        $number++; 
                                    }?>
                                </tbody>
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