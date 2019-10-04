<?php 
    require_once("header.php");
    require_once("sidebar.php");
?>


        <div class="row">
            <div class="col-12">
                <div class="dahboard-header-area d-sm-flex align-items-center justify-content-between">

                    <div class="dahsboard-header-link">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="./"><i class="fa fa-dashboard"></i> Dashbaord</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>

            <!-- Main Content Area -->
        <div class="main-content dashboard-pt">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <h4 class="card-title">Customers</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="text-dark font-18 mb-0">3323</h2>
                                    <div class="text-danger font-weight-bold d-flex justify-content-between align-items-center">
                                        <i class="fa fa-arrow-down mr-1"></i> <span>40.8%</span>
                                    </div>
                                </div>
                                <canvas id="customer" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <h4 class="card-title">Orders</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="text-dark font-18 mb-0">53,981</h2>
                                    <div class="text-success font-weight-bold d-flex justify-content-between align-items-center">
                                        <i class="fa fa-arrow-up mr-1"></i> <span class=" text-extra-small">130.5%</span>
                                    </div>
                                </div>
                                <canvas id="orders" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <h4 class="card-title">Growth</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="text-dark font-18 mb-0">56%</h2>
                                    <div class="text-success font-weight-bold d-flex justify-content-between align-items-center">
                                        <i class="mdi mdi-chevron-up mdi-24px"></i> <span class="text-extra-small">120.3%</span>
                                    </div>
                                </div>
                                <canvas id="growth" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <h4 class="card-title">Revenue</h4>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="text-dark font-18 mb-0">$ 53,981</h2>
                                </div>
                                <canvas id="revenue" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- Single Widget -->
                                <div class="single-widget-area d-flex align-items-center justify-content-between">
                                    <div class="profit-icon">
                                        <i class="zmdi zmdi-favorite-outline"></i>
                                    </div>

                                    <div class="total-profit">
                                        <h6>Total Revenue</h6>
                                        <div class="counter font-30 font-weight-bold" data-comma-separated="true">25,3659</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- Single Widget -->
                                <div class="single-widget-area d-flex align-items-center justify-content-between">
                                    <div class="profit-icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>

                                    <div class="total-profit">
                                        <h6>Today's Sales</h6>
                                        <div class="counter font-30 font-weight-bold" data-comma-separated="true">228.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- Single Widget -->
                                <div class="single-widget-area d-flex align-items-center justify-content-between">
                                    <div class="profit-icon">
                                        <i class="zmdi zmdi-network"></i>
                                    </div>

                                    <div class="total-profit">
                                        <h6>Conversion</h6>
                                        <div class="counter font-30 font-weight-bold" data-comma-separated="true">252.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- Single Widget -->
                                <div class="single-widget-area d-flex align-items-center justify-content-between">
                                    <div class="profit-icon">
                                        <i class="zmdi zmdi-eye"></i>
                                    </div>

                                    <div class="total-profit">
                                        <h6>Today's Visits</h6>
                                        <div class="counter font-30 font-weight-bold" data-comma-separated="true">257.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>

            <!-- Footer Area -->
            
<?php
    require_once("footer.php");

?>