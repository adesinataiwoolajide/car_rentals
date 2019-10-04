<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Area -->
                        <footer class="footer-area">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text text-center">
                                <p>Car Rentals &copy; <?php echo date('Y') ?> powered by <a href="./">Glorious Empire Technologies</a></p>
                            </div>
                        </footer>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>

    <!-- Active JS -->
    <script src="js/default-assets/fullscreen.js"></script>
    <script src="js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="js/default-assets/jquery.flot.js"></script>
    <script src="js/default-assets/jquery.flot.resize.js"></script>
    <script src="js/default-assets/chart.min.js"></script>
    <script src="js/default-assets/sparkline.min.js"></script>
    <script src="js/default-assets/component-todo.js"></script>
    <script src="js/default-assets/apexchart.min.js"></script>
    <script src="js/default-assets/dashboard-active.js"></script>
    <script src="js/default-assets/dashboard-active-2.js"></script>
    <script src="js/default-assets/custom-sparkline.js"></script>
    <script src="js/default-assets/dashboard-chat.js"></script>
    <script src="js/default-assets/jquery.datatables.min.js"></script>
    <script src="js/default-assets/datatables.bootstrap4.js"></script>
    <script src="js/default-assets/datatable-responsive.min.js"></script>
    <script src="js/default-assets/responsive.bootstrap4.min.js"></script>
    <script src="js/default-assets/demo.datatable-init.js"></script>
    <script src="Toast/js/Toast.min.js"></script>
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