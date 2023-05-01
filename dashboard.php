<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Super Market - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Chart -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
</head>

<body id="page-top">

     <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav sidebar sidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height:150px" href="dashboard.php" >
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><img src="images/supermarket.png" width="120px" style="padding:10px; margin-top:-30px"/></div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item" style="margin-top:-30px">
                <a class="nav-link" href="dashboard.php" style="background-color: #ebf0f4">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:20px;"><img src="images/dashboard_icon.png" width="20px" height="20px;"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:20px;"><img src="images/product_icon.png" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Product</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:20px;"><img src="images/order_icon.png" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Order</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:20px;"><img src="images/user_icon.png" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="coupon.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:20px;"><img src="images/coupon_icon.png" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>

            <li class="nav-item mt-auto">
                <a class="nav-link" href="admin_profile.php">
                    <i class="fas fa-fw fa-user" style="margin-left: 20px;"><img src="admin.jpeg" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Admin Profile</span>
                </a>
            </li>
    

        </ul>
         <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #E2E5FF;">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-3 text-gray-800 mt-4" style="margin-bottom: 1rem;">Dashboard</h1>
                    <br/>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="container-fluid">
                        <div class="row" style="margin-left:-30px; margin-right:-30px">
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-4" >
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                <div class="row no-gutters align-items-center" style="float:left; margin-left:10px">
                                    <div class="col mr-2">
                                    <div style="font-family: DM Sans; color: #828a95;">
                                        Total Sales (Annual)
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" style='font-family: DM Sans; color: #828a95;'>
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "can302");
                                        $sql = "SELECT SUM(total_price) AS total_price_sum 
                                                FROM `Order` 
                                                WHERE `is_cancelled` != 1";
                                        $query_total = mysqli_query($con,$sql);
                                        $row = $query_total->fetch_array();
                                        $total_price_sum = $row['total_price_sum'];

                                        $img = "<img width=50 height=50 style='margin-right:10px; margin-left:-20px' src='images/total_sales.png'/>";
                                        echo "<td>".$img."</td>";
                                        echo "<td>".'$'.$total_price_sum."</td>";
                                        mysqli_close($con);
                                        ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                <div class="row no-gutters align-items-center" style="float:left; margin-left:10px">
                                    <div class="col mr-2">
                                    <div style="font-family: DM Sans; color: #828a95;">
                                        Total Orders (Annual)
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" style='font-family: DM Sans; color: #828a95;'>
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "can302");
                                        $sql = "SELECT *
                                                FROM `Order` 
                                                WHERE `is_cancelled` != 1";
                                        $query_order = mysqli_query($con,$sql);
                                        $num_orders = mysqli_num_rows($query_order);
                                        $img = "<img width=50 height=50 style='margin-right:10px; margin-left:-60px' src='images/cart.png'/>";
                                        echo "<td>".$img."</td>";
                                        echo "<td>".$num_orders."</td>";
                                        mysqli_close($con);
                                        ?>     
                                  </div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-4 col-md-12 col-sm-12 mb-4">
                            <div class="card border-left-info shadow h-100 py-2" >
                                <div class="card-body">
                                <div class="row no-gutters align-items-center" style="float:left; margin-left:10px">
                                    <div class="col mr-2">
                                    <div style="font-family: DM Sans; color: #828a95;">New Users</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" style='font-family: DM Sans; color: #828a95;'>
                                            <?php
                                        $con = mysqli_connect("localhost", "root", "", "can302");
                                        $sql = "SELECT *
                                                FROM `user` 
                                                WHERE `is_admin` != 1";
                                        $query_user = mysqli_query($con,$sql);
                                        $num_users = mysqli_num_rows($query_user);
                                        $img = "<img width=50 height=50 style='margin-right:10px; margin-left:20px' src='images/new_users.png'/>";
                                        echo "<td>".$img."</td>";
                                        echo "<td>".$num_users."</td>";
                                        mysqli_close($con);
                                        ?>   </div>
                                        </div>
                                        <!-- <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        </div> -->
                                    </div>
                                    </div>
                                    <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-family: DM Sans;">Orders Reports</h6>
                 
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="line-chart">
                                        <!-- <title>Total Orders per Month</title> -->
                                        <style>
                                            .container {
                                                width: 78%;
                                                margin: -2px auto;
                                                margin-left: -20px auto;
                                            }

                                            body {
                                                text-align: center;
                                                color: #9B88ED;
                                            }

                                            h2 {
                                                text-align: center;
                                                font-family: "Verdana", sans-serif;
                                                font-size: 30px;
                                            }
                                            #myChart {
                                                width: 100px;
                                                height: 300px;
                                            }  
                                            
                                        </style>
                                    <div>
                                        <div class="container">
                                            <!-- <h2>Total Orders per Month</h2> -->
                                            <div>
                                                <canvas id="myChart" height="52%"></canvas>
                                            </div>
                                        </div>
                                        </div>

                                    <script>
                                        $(document).ready(function(){
                                            $.ajax({
                                                url: "graphData.php",
                                                method: "GET",
                                                success: function(data) {
                                                    console.log(data);
                                                    var month = [];
                                                    var order_count = [];
                                                    let array = JSON.parse(data, true);
                                                    console.log(array);
                                                    console.log(array[0].month);
                                                    

                                                    for(let i = 0; i < array.length; i++) {
                                                        console.log("Data Check");
                                                        month.push(array[i].month);
                                                        order_count.push(array[i].order_count);
                                                        console.log(array[i].month);
                                                    }

                                                    var chartdata = {
                                                        labels: month,
                                                        datasets : [
                                                            {
                                                                label: "Total Orders",
                                                                data: order_count,
                                                                backgroundColor: "rgba(103,78,167,0.5)",
                                                            }
                                                        ]
                                                    };

                                                    var ctx = $("#myChart");

                                                    var barGraph = new Chart(ctx, {
                                                        type: 'line',
                                                        data: chartdata
                                                    });
                                                },
                                                error: function(data) {
                                                    console.log(data);
                                                }
                                            });
                                        });
                                    </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary" style="font-family: DM Sans;">Products per Category</h6>
                                    
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                <div class="phppot-container">
                                    <div>
                                        <canvas id="chartjs-doughnut" height="62" width="70" style="margin-top:-30px;"></canvas>
                                    </div>
                                </div>

                                <script>
                                        $(document).ready(function(){
                                            $.ajax({
                                                url: "pieData.php",
                                                method: "GET",
                                                success: function(data) {
                                                    console.log(data);
                                                    var category = [];
                                                    var product_count = [];
                                                    let array = JSON.parse(data, true);
                                                    console.log(array);
                                                    console.log(array[0].category_name);

                                                    for(let i = 0; i < array.length; i++) {
                                                        console.log("Data Check");
                                                        category.push(array[i].category_name);
                                                        product_count.push(array[i].num);
                                                        console.log(array[i].category_name);
                                                    }

                                                    new Chart(document.getElementById("chartjs-doughnut"), {
                                                        type: 'doughnut',
                                                        data: {
                                                            labels: category,
                                                            datasets: [{
                                                                backgroundColor: ["#04BFDA", "#9B88ED",
                                                                    "#FFB169", "#FF69B4", "#69FFA5"],
                                                                data: product_count
                                                            }]
                                                        },
                                                        options: {
                                                            title: {
                                                                display: true
                                                            },
                                                            cutout: '60%', // the portion of the doughnut that is the cutout in the middle
                                                            radius: 200
                                                        }
                                                        
                                                    });    
                                                    Chart.defaults.global.defaultFontFamily = "DM Sans";
                                                },
                                                error: function(data) {
                                                    console.log(data);
                                                }
                                            });
                                        });
                                    </script>
                                        
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column 1 -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary" style="float:left; font-family: DM Sans;"><a href="order.php">Recent Orders</a></h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <!-- <th></th> -->
                                                    <th style='font-family: DM Sans; color:#06152B;'>Order Number</th>
                                                    <th style='font-family: DM Sans; color:#06152B;'>Date</th>
                                                    <th style='font-family: DM Sans; color:#06152B;'>User ID</th>
                                                    <!-- <th>Payment Status</th>
                                                    <th>Fulfillment Status</th> -->
                                                    <th style='font-family: DM Sans; color:#06152B;'>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include("orderData.php");
                                
                                                $i = 0;
                                                while($row = $query->fetch_array()){

                                                    if ($i < 6){
                                        
                                                  
                                                        // echo '<tr onclick="window.location=\'order-details.php?order_id=' . $row['order_id'] . '\';">';
                                                        echo '<tr onclick="window.location=\'order-details.php?order_id=' . $row['order_id'] . '&user_id=' . $row['user_id'] . '\';">';
                                                        // echo "<tr>";
                                                        echo "<td style='font-family: DM Sans; color:#06152B; text-align:left'>".'#'.$row['order_id']."</td>";
                                                        echo "<td style='font-family: DM Sans; color:#06152B; text-align:left'>".$row['ordered_at']."</td>";
                                                        echo "<td style='font-family: DM Sans; color:#06152B; text-align:left'>".'#'.$row['user_id']."</td>";
                                                        // if($row['payment_status'] == 1) echo "<td>"."Paid"."</td>"; else echo "<td>"."Unpaid"."</td>";
                                                        // echo "<td>".$row['fulfillment_status']."</td>";
                                                        echo "<td style='font-family: DM Sans; color:#06152B; text-align:left'>".'$'.$row['total_price']."</td>";
                                                        echo "</tr>";
                                                        $i ++;
                                                    } else {
                                                        break;
                                                    }
                                                    
                                                }
                                                mysqli_close($con);
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Content Column 2 -->
                        <div class="col-lg-6 mb-4" >

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary" style="float:left; font-family: DM Sans;" ><a href="product.php">Latest Products</a></h6>
                                    
                                </div>
                             

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width:10%"></th>
                                            <th style="font-family: DM Sans; color:#06152B;">Product</th>
                                            <th style="font-family: DM Sans; color:#06152B;">Price</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $style = '<tr style="font-family: DM Sans; color:#06152B; height:80px; vertical-align: middle;">';
                                        $textStyle = '<td style="font-family: DM Sans; color:#06152B; vertical-align: middle; text-align:left">';
                                        

                                        $con = mysqli_connect("localhost", "root", "", "can302");
                                        $sql = "select * from product order by product_id desc limit 3;";
                                        $query = mysqli_query($con,$sql);

                                        while($row=$query->fetch_array()){

                                    
                                        
                                            $image= "<img width='60' height='60' style='margin-right:100px; margin-left:50px' src='images/".$row['product_image']."'>";     
                                           
                                            
                                            echo $style;
                                            echo "<td>".$image."</td>";
                                            echo $textStyle.$row['product_name']."</td>";
                                            echo $textStyle.'$'.$row['price']."</td>";
                                     
     
                                        
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </tbody>
                                </table>

                              
                            </div>

                        </div>

                    </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>