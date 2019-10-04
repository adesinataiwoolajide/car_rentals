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
                            <li class="nav-item"><a class="nav-link" href="drivers"><i class="fa fa-users"></i> DRIVERS</a></li>
                           
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
                                <p>Please fill the below form to add a new driver </p>
                                <form action="process_driver.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <input type="file" class="form-control form-control-rounded" id=""
                                            placeholder="Enter The Driver Name" required name="file">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control form-control-rounded" id=""
                                            placeholder="Enter The Driver Name" required name="staff_name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="email" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The Driver E-Mail" required name="staff_email">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="number" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The Driver Phone Number" required name="phone_number">
                                        </div>
                                       
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" name="add_driver">ADD THE DRIVER</button>
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
                                            <th> Passport</th>
                                            <th> Name</th>
                                            <th> Staff Number</th>
                                            <th> Email</th>
                                            <th> Phone Number</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th> Passport</th>
                                            <th> Name</th>
                                            <th> Staff Number</th>
                                            <th> Email</th>
                                            <th> Phone Number</th>
                                            
                                        </tr>
                                    </tfoot>

                                    <tbody>

                                        <?php
                                        $num =1;
                                        foreach($driver-> getAlldrivers() as $drivers){?>
                                            <tr>
                                                <td><?php echo $num ?>
                                                    <a href="edit_driver?staff_number=<?php echo $drivers['staff_number']?>" class="btn btn-circle btn-success"><i class="fa fa-edit"></i> </a>
                                                    <a href="delete_driver?staff_number=<?php echo $drivers['staff_number']?>" class="btn btn-circle btn-danger"><i class="fa fa-trash-o"></i> </a>
                                                </td>
                                                <td><img src="<?php echo '../../assets/driver/'. $drivers['passport'] ?>" style="width:50px; height:50px" ></td>
                                                <td><?php echo $drivers['staff_name'] ?></td>
                                                <td><?php echo $drivers['staff_number'] ?></td>
                                                <td><?php echo $drivers['staff_email'] ?></td>
                                                <td><?php echo $drivers['phone_number'] ?></td>
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