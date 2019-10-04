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
                            <li class="nav-item"><a class="nav-link" href="orders"><i class="fa fa-bank"></i> PAYMENTS</a></li>
                           
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
                                <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <tr>
                                            <td>1
                                                <a href="" class="btn btn-circle btn-success"><i class="fa fa-edit"></i> </a>
                                                <a href="" class="btn btn-circle btn-danger"><i class="fa fa-trash-o"></i> </a>
                                                <a href="" class="btn btn-circle btn-danger"><i class="fa fa-list"></i> </a>
                                            </td>
                                            <td>Tiger Nixon</td>
                                            <td>t@gmail.com</td>
                                            <td>Tiger Nixon</td>
                                            <td>t@gmail.com</td>
                                        </tr>
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