<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Order List</title>
      <!-- Custom fonts for this template -->
      <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
      <!-- Custom styles for this page -->
      <!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
      <!-- Button Style -->
      <link href="css/buttonStyle.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav sidebar sidebar" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height:150px" href="index.html" >
               <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
               </div>
               <div class="sidebar-brand-text mx-3"><img src="images/supermarket.png" width="150px" /></div>
            </a>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
               <a class="nav-link" href="dashboard.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/dashboard_icon.png" width="20px" height="20px;"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Dashboard</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="product.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/product_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Product</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="order.php" style="background-color: #ebf0f4">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/order_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Order</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="user.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/user_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">User</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="index.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/coupon_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>
            <!-- Admin Profile -->
            <li class="nav-item mt-auto">
               <a class="nav-link" href="admin_profile.php">
               <i class="fas fa-fw fa-user" style="margin-left: 30px;"><img src="admin.jpeg" width="30px" height="30px"></i>
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
               <div class="container-fluid" style="background-color: #E2E5FF;">
                  <!-- Page Heading -->
                  <h1 class="h3 mb-3 text-gray-800 mt-4" style="margin-bottom: 1rem;">Order</h1>
                  <div class="button-container" style="margin-bottom: 1rem;">
                     <button class="button-16" role="button">Order List</button>
                     <button class="button-16" role="button">Return List</button>    
                  </div>
                  <!-- Order -->   
                  <!-- Filter & Search -->    
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <form action="" method="post">
                           <div class="button-container mb-3">
                              <button class="button-16" type="submit" id="all" name="all" value="all">All</button>
                              <button class="button-16" type="submit" id="unpaid" name="unpaid" value="unpaid">Unpaid</button>
                              <button class="button-16" type="submit" id="shipped" name="shipped" value="shipped">Shipped</button>
                              <button class="button-16" type="submit" id="indelivery" name="indelivery" value="indelivery">In Delivery</button>
                              <button class="button-16" type="submit" id="delivered" name="delivered" value="delivered">Delivered</button>
                           </div>
                        </form>
                        <form action="" method="post">
                           <div class="input-group mb-3">
                              <input type="text" name="data" id='data' class="form-control" placeholder="Search Data" aria-label="Search data" >
                              <div class="input-group-append">
                                 <button type="submit" class="button-16" id="search_order" name="search_order" value="search_order">Search</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- Order List -->
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <!-- <th></th> -->
                                    <th>Order Number</th>
                                    <th>Date</th>
                                    <th>User ID</th>
                                    <th>Payment Status</th>
                                    <th>Fulfillment Status</th>
                                    <th>Total</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    include("orderData.php");
                                    
                                    while($row = $query->fetch_array()){
                                    // echo '<tr onclick="window.location=\'order-details.php?order_id=' . $row['order_id'] . '\';">';
                                    echo '<tr onclick="window.location=\'order-details.php?order_id=' . $row['order_id'] . '&user_id=' . $row['user_id'] . '\';">';
                                    // echo "<tr>";
                                    echo "<td>".'#'.$row['order_id']."</td>";
                                    echo "<td>".$row['ordered_at']."</td>";
                                    echo "<td>".'#'.$row['user_id']."</td>";
                                    if($row['payment_status'] == 1) echo "<td>"."Paid"."</td>"; else echo "<td>"."Unpaid"."</td>";
                                    echo "<td>".$row['fulfillment_status']."</td>";
                                    echo "<td>".'$'.$row['total_price']."</td>";
                                    echo "</tr>";
                                    }
                                    mysqli_close($con);
                                    ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Your Website 2020</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
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
      <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
      <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
      <!-- Core plugin JavaScript-->
      <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
      <!-- Custom scripts for all pages-->
      <!-- <script src="js/sb-admin-2.min.js"></script> -->
      <!-- Page level plugins -->
      <!-- <script src="vendor/datatables/jquery.dataTables.min.js"></script>
         <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script> -->
      <!-- Page level custom scripts -->
      <!-- <script src="js/demo/datatables-demo.js"></script> -->
   </body>
</html>