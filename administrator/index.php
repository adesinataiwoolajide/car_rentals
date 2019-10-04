<?php 
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>CAR RENTALS</title>

    <!-- Favicon -->
    <link rel="icon" href="dashboard/img/rent.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="dashboard/style.css">
    <link rel="stylesheet" type="text/css" href="dashboard/Toast/css/Toast.min.css">

</head>

<body class="dark-color-overlay bg-img" style="background-image: url(dashboard/img/bg-img/8.jpg);">


    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-sm-10 col-lg-8">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="xs-d-none">
                                            <img src="dashboard/img/bg-img/6.png" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <!-- Logo -->
                                        <div class="card-body-login mb-30">
                                            <img src="dashboard/img/core-img/logo.png" alt="">
                                        </div>

                                        <h4 class="font-22 mb-30">Sign In</h4>

                                        <form action="process-login.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="float-left" for="emailaddress">Email address</label>
                                                <input class="form-control" type="email" name="email" required="" placeholder="Enter your email">
                                            </div>

                                            <div class="form-group">
                                                <a href="forget-password" class="text-dark float-right"><span class="font-12 text-primary">Forgot your password?</span></a>
                                                <label class="float-left" for="password">Password</label>
                                                <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                            </div>

                                            <div class="form-group mb-3">
                                                <div class="custom-control custom-checkbox pl-0">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"><span class="font-16">Remember me</span></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit" name="login"> Log In </button>
                                            </div>

                                        </form>
                                    </div> <!-- end card-body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="dashboard/js/jquery.min.js"></script>
    <script src="dashboard/js/popper.min.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/bundle.js"></script>

    <!-- Active JS -->
    <script src="dashboard/js/default-assets/active.js"></script>
    <script src="dashboard/Toast/js/Toast.min.js"></script>
    <?php 
    if(isset($_SESSION['success'])){
        $message = $_SESSION['success']; ?>
        <script type="text/javascript">
            new Toast({ message: '<p style="color:white"><b><?php echo $message; ?></p></b>', type: 'success' });
        </script><?php 
        unset($_SESSION['success']);
    }
    if(isset($_SESSION['error'])){
        $message = $_SESSION['error'];?>

        <script type="text/javascript">
            new Toast({ message: '<p style="color:white"><b><?php echo $message; ?> </b></p>', type: 'danger' });
        </script><?php 
        unset($_SESSION['error']);
    }  ?>

</body>

</html>