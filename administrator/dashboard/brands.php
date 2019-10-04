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
                            <li class="nav-item"><a class="nav-link" href="brands"><i class="fa fa-cogs"></i> BRANDS</a></li>
                           
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
                                <p>Please fill the below form to add a new car brand </p>
                                <form action="process_brand.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-9">
                            
                                            <input type="text" class="form-control form-control-rounded" id="" placeholder="Enter The Brand Name" required name="brand_name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" 
                                            name="add_brand">ADD THE BRAND </button>
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
                                            <th>Brand Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Brand Name</th>
                                            
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <?php
                                        $num =1;
                                        foreach($brand->getAllBrand() as $brands){?>
                                            <tr>
                                                <td>1
                                                    <a href="edit_brand?brand_id=<?php echo $brands['brand_id']?>" class="btn btn-circle btn-success"><i class="fa fa-edit"></i> </a>
                                                    <a href="delete_brand?brand_id=<?php echo $brands['brand_id']?>" class="btn btn-circle btn-danger"><i class="fa fa-trash-o"></i> </a>
                                                </td>
                                                <td><?php echo $brands['brand_name'] ?></td>
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