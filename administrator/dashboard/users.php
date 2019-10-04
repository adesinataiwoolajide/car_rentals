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
                        <li class="nav-item"><a class="nav-link" href="users"><i class="fa fa-users"></i> USERS</a></li>
                        
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
                                <p>Please fill the below form to add a new user </p>
                                <form action="process_user.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <input type="text" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The Full Name" required name="name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="email" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The E-Mail" required name="email">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="password" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The Passwword" required name="password">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <input type="password" class="form-control form-control-rounded" id="" 
                                            placeholder="Repeat The Password" required name="repeat">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" name="add_user">ADD THE USER</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <table  id="basic-datatable" class="table-bordered table dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        <?php 
                                        $num =1;
                                        foreach($user->getAllUser() as $users){?>
                                            <tr>
                                                <td><?php echo $num; ?>
                                                
                                                    <a href="delete-user.php?email=<?php echo $users['email'] ?>" class="btn btn-circle btn-danger" ><i class="fa fa-trash-o"></i></a>
                                                    <a href="edit_user.php?user_id=<?php echo $users['user_id'] ?>" class="btn btn-circle btn-success" ><i class="fa fa-pencil"></i></a>
                                        
                                                </td>
                                                <td><?php echo $users['name'] ?></td>
                                                <td><?php echo $users['email'] ?></td>
                                                <td><?php echo $users['role'] ?></td>
                                                
                                            </tr>
                                        <?php
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