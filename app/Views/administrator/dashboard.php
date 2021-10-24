<?= $this->include('layouts/header.php'); ?>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed" id="mybody">
    <div class="wrapper">
        <?= $this->include("layouts/navbar.php"); ?>
        <?= $this->include("layouts/sidebar_admin.php"); ?>
        <div class="content-wrapper">
            <?= $this->include("layouts/breadcrumb.php"); ?>


            <div class="container">

                <section class="content ">

                    <div class="row ">
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-info ">
                                <div class="inner ">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-bag "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-success ">
                                <div class="inner ">
                                    <h3>53<sup style="font-size: 20px ">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-stats-bars "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-warning ">
                                <div class="inner ">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon ">
                                    <i class="fas fa-user"></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-danger ">
                                <div class="inner ">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-pie-graph "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-info ">
                                <div class="inner ">
                                    <h3>150</h3>

                                    <p>New Orders</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-bag "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-success ">
                                <div class="inner ">
                                    <h3>53<sup style="font-size: 20px ">%</sup></h3>

                                    <p>Bounce Rate</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-stats-bars "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-warning ">
                                <div class="inner ">
                                    <h3>44</h3>

                                    <p>User Registrations</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-person-add "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6 ">
                            <!-- small box -->
                            <div class="small-box bg-danger ">
                                <div class="inner ">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <div class="icon ">
                                    <i class="ion ion-pie-graph "></i>
                                </div>
                                <a href="# " class="small-box-footer ">More info <i class="fas fa-arrow-circle-right "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Pie Chart</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 393px;" width="393" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card ">
                        <div class="card-header ui-sortable-handle " style="cursor: move; ">
                            <h3 class="card-title ">
                                <i class="fas fa-chart-pie mr-1 "></i> MONITORING
                            </h3>
                            <div class="card-tools ">
                                <ul class="nav nav-pills ml-auto ">
                                    <li class="nav-item ">
                                        <a class="nav-link active " href="#revenue-chart " data-toggle="tab ">Area</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="#sales-chart " data-toggle="tab ">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body ">
                            <div class="tab-content p-0 ">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active " id="revenue-chart " style="position: relative; height: 300px; ">
                                    <div class="chartjs-size-monitor ">
                                        <div class="chartjs-size-monitor-expand ">
                                            <div class=" "></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink ">
                                            <div class=" "></div>
                                        </div>
                                    </div>
                                    <canvas id="revenue-chart-canvas " height="300 " style="height: 300px; display: block; width: 420px; " width="420 " class="chartjs-render-monitor "></canvas>
                                </div>
                                <div class="chart tab-pane " id="sales-chart " style="position: relative; height: 300px; ">
                                    <canvas id="sales-chart-canvas " height="0 " style="height: 0px; display: block; width: 0px; " class="chartjs-render-monitor " width="0 "></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                    </div>
                    <!-- /.ROW -->


                </section>



            </div>

        </div>
    </div>

    <?= $this->include('layouts/footer.php'); ?>
    <?= $this->include('layouts/script.php'); ?>
</body>
<Script>
    $(document).ready(function() {
        $(".Page_title").text("Dashboard");
        $("#b_crumb_subtitle").text("Dashboard");
        $('#dashboardnav').addClass("active");

    });
</script>
<script>

</script>

</html>