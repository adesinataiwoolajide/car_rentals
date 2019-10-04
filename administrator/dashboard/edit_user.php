<?php 
    require_once("header.php");
    require_once("sidebar.php");
    $user_id = $_GET['user_id'];
    $deta = $user->getSingleUserId($user_id);
?>


    <div class="row">
        <div class="col-12">
            <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                <div class="dahsboard-header-link">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="./"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
                        <li class="nav-item"><a class="nav-link" href="edit_user?user_id=<?php $user_id; ?>"><i class="fa fa-pencil"></i>EDIT USER</a></li>
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
                                <p>Please fill the below form to edit the user details </p>
                                <form action="update_user.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input type="text" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The Full Name" required name="name" value="<?php echo $deta['name'] ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="email" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The E-Mail" required name="email" value="<?php echo $deta['email'] ?>">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <input type="password" class="form-control form-control-rounded" id="" 
                                            placeholder="Enter The Passwword" name="password">
                                        </div>
                                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                        <input type="hidden" name="former" value="<?php echo $deta['email'] ?>">
                                       
                                        <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-rounded btn-outline-primary btn-block" name="update_user">
                                                UPDATE THE USER</button>
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
                                                    <a href="edit_user.php?email=<?php echo $users['email'] ?>" class="btn btn-circle btn-success" ><i class="fa fa-pencil"></i></a>
                                        
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