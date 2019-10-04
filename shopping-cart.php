<?php 
    include("header.php");
    
?>
  <!-- Breadcromb Area Start -->
  <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Shopping Cart</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
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
            <div class="row">
               <div class="col-lg-8">
                  <div class="cart-table-left">
                     <h3>Shopping Cart</h3>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Preview</th>
                                 <th>Product</th>
                                 <th>Price</th>
                                 <th>Quantity</th>
                                 <th>Total</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="shop-cart-item">
                                 <td class="gauto-cart-preview">
                                    <a href="#">
                                    <img src="assets/img/cart-1.png" alt="cart-1">
                                    </a>
                                 </td>
                                 <td class="gauto-cart-product">
                                    <a href="#">
                                       <p>car disk break</p>
                                    </a>
                                 </td>
                                 <td class="gauto-cart-price">
                                    <p>$180</p>
                                 </td>
                                 <td class="gauto-cart-quantity">
                                    <input type="number" value="1">
                                 </td>
                                 <td class="gauto-cart-total">
                                    <p>$180</p>
                                 </td>
                                 <td class="gauto-cart-close">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                              <tr class="shop-cart-item">
                                 <td class="gauto-cart-preview">
                                    <a href="#">
                                    <img src="assets/img/cart-2.jpg" alt="cart-1">
                                    </a>
                                 </td>
                                 <td class="gauto-cart-product">
                                    <a href="#">
                                       <p>shock absorber</p>
                                    </a>
                                 </td>
                                 <td class="gauto-cart-price">
                                    <p>$90</p>
                                 </td>
                                 <td class="gauto-cart-quantity">
                                    <input type="number" value="1">
                                 </td>
                                 <td class="gauto-cart-total">
                                    <p>$90</p>
                                 </td>
                                 <td class="gauto-cart-close">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <div class="cart-clear">
                        <a href="#">clear cart</a>
                        <a href="#">update cart</a>
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
                  <div class="checkout-action">
                     <a href="#" class="gauto-btn">Proceed to checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Cart Page End -->
<?php 
    include("footer.php");
?>