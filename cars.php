<?php 
    include("header.php");
    
?>
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcromb-box">
                     <h3>Car Listing</h3>
                     <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="./">Home</a></li>
                        <li><i class="fa fa-car"></i></li>
                        <li><a href="cars">Cars</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Car Listing</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Car Listing Area Start -->
      <section class="gauto-car-listing section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="car-list-left">
                     <div class="sidebar-widget">
                        <ul class="service-menu">
                           <li class="active">
                              <a href="cars">All Brands<span><?php echo $car->countCar() ?></span></a>
                           </li><?php
                           foreach($brand->getAllBrand() as $listBrand) { ?>
                              <li>
                                 <a href="brand?brand_name=<?php echo $listBrand['brand_name'] ?>"><?php echo $listBrand['brand_name'] ?><span><?php echo $car->countBrand($listBrand['brand_id']) ?></span></a>
                              </li><?php
                           } ?>
                           
                        </ul>
                     </div>
                     <div class="sidebar-widget">
                        <ul class="service-menu">
                           <li class="active">
                              <a href="cars">All Categories<span><?php echo $car->countCar() ?></span></a>
                           </li><?php
                           foreach($categories->getAllCategory() as $listCat) { ?>
                              <li>
                                 <a href="categories?category_name=<?php echo $listCat['category_name'] ?>"><?php echo $listCat['category_name'] ?>
                                 <span><?php echo $car->countCategory($listCat['category_id']) ?></span></a>
                              </li><?php
                           } ?>
                           
                        </ul>
                     </div>
                     <div class="sidebar-widget">
                        <form>
                           <p>
                              <input type="text" placeholder="From Address" />
                           </p>
                           <p>
                              <input type="text" placeholder="To Address" />
                           </p>
                           <p>
                              <select>
                                 <option data-display="Select">AC Car</option>
                                 <option>Non-AC Car</option>
                              </select>
                           </p>
                           <p>
                              <input id="reservation_date" name="reservation_date" placeholder="Journey Date" data-select="datepicker" type="text">
                           </p>
                           <p class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                              <input type="text" class="form-control" placeholder="Journey Time" />
                           </p>
                           <p>
                              <button type="submit" class="gauto-theme-btn">Find Car</button>
                           </p>
                        </form>
                     </div>
                     
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="car-listing-right">
                     
                     <div class="car-grid-list">
                        <div class="row"><?php 
                           foreach($car->getAllCar() as $listCars){ ?>
                              <div class="col-md-6">
                                 <div class="single-offers">
                                    <div class="offer-image">
                                       <a href="car_details?slug=<?php echo $listCars['slug'] ?>">
                                       <img src="<?php echo 'assets/cars/'. $listCars['car_image'] ?>" style="width:250px; height:180px"  alt="offer 1" />
                                       </a>
                                    </div>
                                    <div class="offer-text">
                                       <a href="car_details?slug=<?php echo $listCars['slug'] ?>">
                                          <h3><?php echo $listCars['name'] ?></h3>
                                       </a>
                                       <h4>&#8358;<?php echo number_format($listCars['price']) ?><span>/ Day</span></h4>
                                       <ul>
                                          <li><i class="fa fa-car"></i>Brand:<?php 
                                                $seeBrand = $brand->getSingleBrandList($listCars['brand_id']);
                                                echo $seeBrand['brand_name']; ?></li>
                                          <li><i class="fa fa-cogs"></i><?php 
                                                $seeCat = $categories->getSingleCategoryList($listCars['category_id']);
                                                echo $seeCat['category_name']; ?></li>
                                          <li><i class="fa fa-user"></i><?php echo $listCars['capacity'] ?></li>
                                       </ul>
                                       <div class="offer-action">
                                          <a href="car_details?slug=<?php echo $listCars['slug'] ?>" class="offer-btn-1">Rent Car</a>
                                          <a href="car_details?slug=<?php echo $listCars['slug'] ?>" class="offer-btn-2">Details</a>
                                       </div>
                                    </div>
                                 </div>
                              </div><?php 
                           } ?>
                           
                        </div>
                       
                     </div>
                     <!-- <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                           <li class="active"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li>...</li>
                           <li><a href="#">6</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Car Listing Area End -->
<?php 
    include("footer.php");
?>