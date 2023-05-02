<?php

$con = mysqli_connect("localhost", "root", "", "can302");

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Super Market</title>
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height:150px" href="dashboard.php" >
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
               <a class="nav-link" href="refund-order.php" style="background-color: #ebf0f4">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/order_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Order</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="user.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/user_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">User</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="coupon.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/coupon_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>
            <!-- Admin Profile -->
            <li class="nav-item mt-auto">
               <a class="nav-link" href="profile.html">
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
                     <button class="button-16" role="button" onclick="window.location.href='order.php';">Order List</button>
                     <button class="button-16" role="button" onclick="window.location.href='refund-order.php';">Refund List</button>    
                  </div>
                  
                  
                  <!-- Order -->   
                  <!-- Filter & Search -->    
                  <div class="card shadow mb-4">
                     <div class="card-body">
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
                  <!-- Function for Search Button-->
               <?php
               if (isset($_POST["submit"])) {
                  $search = $_POST["data"];
                  $sql = "SELECT * FROM refund_order WHERE order_id LIKE '%$search%'";
                  $result = mysqli_query($con, $sql);
                  $query_result = mysqli_num_rows($result);

                  if ($query_result > 0) {
                     echo "
                     <div class='card shadow mb-4'>
                           <div class='card-body'>
                              <h3>Search Result:</h1>
                              <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                                 <thead>
                                       <tr>
                                          <th>Invoice Number</th>
                                          <th>Order ID</th>
                                          <th>Time of Refund</th>
                                          <th>Refund Status</th>
                                       </tr>
                                 </thead>
                                 <tbody>";
                     while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                       <td>" . $row['refund_order_id'] . "</td>
                                       <td>" . $row['order_id'] . "</td>
                                       <td>" . $row['refund_at'] . "</td>
                                       <td>";
                        if ($row['refund_status'] == 0) {
                           echo "Processing";
                        } else {
                           echo "Completed";
                        }
                        echo "</td>
                              </tr>";
                     }
                     echo "</tbody></table>
                           </div>
                     </div>";
                  } else {
                     echo " <div class='card shadow mb-4'>
                     <div class='card-body'>
                     <h3>There are no results matching your search!</h3>
                     </div>
                     </div>
                     ";
                  }
               }
               ?>
                  <!-- Order List -->
                  <div class="card shadow mb-4">
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <!-- <th></th> -->
                                    <th>Invoice Number</th>
                                    <th>Order ID</th>
                                    <th>Time of Refund</th>
                                    <th>Refund Status</th>
                                    
                                 </tr>
                              </thead>
                              <tbody>
                              <?php
                                        $get_order = "select * from refund_order";
                                        $run_order = mysqli_query($con, $get_order);

                                        while ($row_order = mysqli_fetch_array($run_order)) {

                                            $refund_order_id = $row_order['refund_order_id'];

                                            $order_id = $row_order['order_id'];

                                            $refund_at = $row_order['refund_at'];

                                            $refund_status = $row_order['refund_status'];

                                            $get_data = "select * from refund_order where refund_order_id='$refund_order_id'";

                                            $run_data = mysqli_query($con, $get_data);

                                            $row_data = mysqli_fetch_array($run_data);

                                            $refund_order_id = $row_data['refund_order_id'];

                                            ?>
                                            <tr>
                                               
                                                <td>
                                                    <?php echo $refund_order_id; ?>
                                                </td>

                                                <td>
                                                    <?php echo $order_id; ?>
                                                </td>

                                                <td>
                                                    <?php echo $refund_at ?>
                                                </td>

                                                <td>
                                                    <?php
                                                    if ($row_order['refund_status']==0 ){
                                                      echo $refund_status="Processing";
                                                    }else{
                                                      echo $refund_status="Completed";
                                                    }
                                                   
                                                      ?>
                                                </td>
                                                </tr>
                                        <?php } ?>
                                 
                              </tbody>
                           </table>
                        </div>
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
<<<<<<< HEAD
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
      
=======
 
>>>>>>> 3c27fbc5ae513fae8d1403108a31e625332791d3
   </body>
</html>
