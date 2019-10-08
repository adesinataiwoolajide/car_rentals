<?php 
    require_once("header.php");
    require_once("sidebar.php");
?>


    <div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="./"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="cars"><i class="fa fa-car"></i> CARS</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <!-- Main Content Area -->
    <div class="main-content dashboard-pt">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <p>Please fill the below form to add a new car  </p>
                            <form action="process_car.php" method="POST" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label> Car Image </label>
                                        <input type="file" class="form-control form-control-rounded" id=""
                                        required name="file">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> Car Name </label>
                                        <input type="text" class="form-control form-control-rounded" id="" placeholder="Enter The Car Name" 
                                        required name="name">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> Price Per Day </label>
                                        <input type="number" class="form-control form-control-rounded" id="" placeholder="Enter The Price Per Day" 
                                        required name="price">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label> Car Brand </label>
                                        <select class="form-control form-control-rounded" name="brand_id" required>
                                            <option value="">-- Select The Brand --</option>
                                            <option value=""></option><?php
                                            foreach ($brand->getAllBrand() as $list) { ?>
                                                <option value="<?php echo $list['brand_id'] ?>">
                                                    <?php echo $list['brand_name'] ?>	
                                                </option><?php
                                            } ?>
                                        </select>

                                    </div>
                                    <div class="form-group col-md-2">
                                        <label> Car Category </label>
                                        <select class="form-control form-control-rounded" name="category_id" required>
                                            <option value="">-- Select The Category --</option>
                                            <option value=""></option><?php
                                            foreach ($categories->getAllCategory() as $cat) { ?>
                                                <option value="<?php echo $cat['category_id'] ?>">
                                                    <?php echo $cat['category_name'] ?>	
                                                </option><?php
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> Car Color </label>
                                        <select class="form-control form-control-rounded" name="color" required>
                                            <option value="">-- Select The Color --</option>
                                            <option value=""></option>
                                            <option value="Black">Black</option>
                                            <option value="Gray" >Gray</option>
                                            <option value="Dark Gray" >Dark Gray</option>
                                            <option value="Light Gray">Light Gray</option>
                                            <option value="White">White</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Navy" >Navy</option>
                                            <option value="Purple">Purple</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> Car Capacity </label>
                                        <input type="number" class="form-control form-control-rounded" id="" 
                                        placeholder="Enter The Car Capacity" required name="capacity">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> Car Facilities </label>
                                        <input type="text" class="form-control form-control-rounded" id="" placeholder="Enter The Car Facilities" 
                                        required name="facilities">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label> Car Description </label>
                                        <input type="text" class="form-control form-control-rounded" id="" placeholder="Enter The Car Description" required name="description">
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" name="add_car">ADD THE CAR</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="basic-datatable" class="table-bordered table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Image</th>
                                        <th> Name</th>
                                        <th> Amount Per Day</th>
                                        <th> Brand</th>
                                        <th> Category</th>
                                        <th> Capacity</th>
                                        <th> Status</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Image</th>
                                        <th> Name</th>
                                        <th> Amount Per Day</th>
                                        <th> Brand</th>
                                        <th> Category</th>
                                        <th> Capacity</th>
                                        <th> Status</th>
                                        
                                    </tr>
                                </tfoot>

                                <tbody>
                                <?php
                                    $num =1;
                                    foreach($car->getAllCar() as $cars){ 
                                        $brand_id = $cars['brand_id']; ?>
                                        <tr>
                                            <td><?php echo $num; ?>
                                                <a href="edit_car?slug=<?php echo $cars['slug']?>" class="btn btn-circle btn-success"><i class="fa fa-edit"></i> </a>
                                                <a href="delete_car?slug=<?php echo $cars['slug']?>" class="btn btn-circle btn-danger"><i class="fa fa-trash-o"></i> </a>
                                                <a href="delete_car?slug=<?php echo $cars['slug']?>" class="btn btn-circle btn-primary"><i class="fa fa-list"></i> </a>
                                            </td>
                                            <td><img src="<?php echo '../../assets/cars/'. $cars['car_image'] ?>" style="width:50px; height:50px" ></td>
                                            <td><?php echo $cars['name'] ?></td>
                                            <td>&#8358;<?php echo number_format($cars['price']) ?></td>
                                            <td><?php 
                                                $seeBrand = $brand->getSingleBrandList($brand_id);
                                                echo $seeBrand['brand_name']; ?>
                                            </td>
                                            <td><?php 
                                                $seeCat = $categories->getSingleCategoryList($cars['category_id']);
                                                echo $seeCat['category_name']; ?>
                                            </td>
                                            <td><?php echo $cars['capacity'] ?></td>
                                            <td><?php
                                                $status = $cars['status'];
                                                if($status ==1){ ?>
                                                    <p style="color: green">Available</p><?php
                                                }elseif($status ==2 ){ ?>
                                                    
                                                    <p style="color: red">Booked</p><?php
                                                }else{
                                                    echo 'Not Available';
                                                } ?>
                                        
                                            </td>
                                        </tr><?php
                                        $num++; 
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            
        </div>
<?php
    require_once("footer.php");

?>