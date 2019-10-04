<?php 
    include("header.php");
    
?>
       
      <!-- Breadcromb Area Start -->
      <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Car Booking</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>car Booking</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Car Booking Area Start -->
      <section class="gauto-car-booking section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="car-booking-image">
                     <img src="assets/img/booking.jpg" alt="car" />
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="car-booking-right">
                     <p class="rental-tag">rental</p>
                     <h3>mercedes S-class</h3>
                     <div class="price-rating">
                        <div class="price-rent">
                           <h4>$50.00<span>/ Day</span></h4>
                        </div>
                        <div class="car-rating">
                           <ul>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                           </ul>
                           <p>(123 rating)</p>
                        </div>
                     </div>
                     <p> consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel,dapibus tempus nulla. Donec vel nulla dui.</p>
                     <div class="car-features clearfix">
                        <ul>
                           <li><i class="fa fa-car"></i> Model:2017</li>
                           <li><i class="fa fa-cogs"></i> Automatic</li>
                           <li><i class="fa fa-dashboard"></i> 20kmpl</li>
                           <li><i class="fa fa-empire"></i> V-6 Cylinder</li>
                        </ul>
                        <ul>
                           <li><i class="fa fa-eye"></i> GPS Navigation</li>
                           <li><i class="fa fa-lock"></i> Anti-Lock Brakes</li>
                           <li><i class="fa fa-key"></i> Remote Keyless</li>
                           <li><i class="fa fa-desktop"></i> Rear-Seat DVD</li>
                        </ul>
                        <ul>
                           <li><i class="fa fa-car"></i> Model:2017</li>
                           <li><i class="fa fa-cogs"></i> Automatic</li>
                           <li><i class="fa fa-dashboard"></i> 20kmpl</li>
                           <li><i class="fa fa-empire"></i> V-6 Cylinder</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Car Booking Area End -->
       
       
      <!-- Booking Form Area Start -->
      <section class="gauto-booking-form section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="booking-form-left">
                     <div class="single-booking">
                        <h3>Personal Information</h3>
                        <form>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="Your Full Name" />
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="Your Last Name" />
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="email" placeholder="Your Email Address" />
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="tel" placeholder="Your Phone Number" />
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="single-booking">
                        <h3>Booking Detail</h3>
                        <form>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="From Address">
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <input type="text" placeholder="To Address">
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <select>
                                       <option data-display="Select">1 person</option>
                                       <option>2 person</option>
                                       <option>3 person</option>
                                       <option>4 person</option>
                                       <option>5-10 person</option>
                                    </select>
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p>
                                    <select>
                                       <option data-display="Select">1 luggage</option>
                                       <option>2 luggage</option>
                                       <option>3 luggage</option>
                                       <option>4(+) luggage</option>
                                    </select>
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <p>
                                    <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text">
                                 </p>
                              </div>
                              <div class="col-md-6">
                                 <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                    <input type="text" class="form-control" placeholder="Journey Time" />
                                 </p>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <p>
                                    <textarea placeholder="Write Here..."></textarea>
                                 </p>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="booking-right">
                     <h3>payment Method</h3>
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
                        <a href="#" class="gauto-btn">Reserve Now!</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Booking Form Area End -->
       
<?php 
    include("footer.php");
?>