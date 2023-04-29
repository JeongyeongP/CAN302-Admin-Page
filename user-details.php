<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>User Details</title>
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
               <a class="nav-link" href="order.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/order_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Order</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="user.php" style="background-color: #ebf0f4">
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
                  <!-- User -->
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="card-header">
                        <div class="image-container" style="display:inline-block;vertical-align:top;"></div>
                        <h6 class="m-0" style="margin-top: 2rem; margin-left: 1rem; margin-right: 1rem; color: black; font-size: 30px;">
                        
                           <?php
                              include("userData.php"); 
                                while($row = $query1->fetch_array()){
                                echo "<span style='margin-right: 220px; font-size: 20px;'>".$row['first_name'].' '.$row['last_name']."</span>"; 
                                $user_id = $row['user_id'];
                              }
                              $query1->data_seek(0);
                            ?>
                        </h6>
                        <div style="display: flex; align-items: center; margin-top: 3px;">
                           <!-- User ID -->
                           <div class="order date" style="margin-right: 50px;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    echo "<span style='margin-right: 220px; font-size: 20px;'>".'User Number #'.$row['user_id']."</span>";
                                 
                                 }
                                 $query1->data_seek(0);
                                 ?>
                           </div>
                        </div>
                       <div style="display: flex; align-items: center; margin-top: 3px;">
                           <!-- User Account Created At -->
                           <div class="order date" style="margin-right: 50px;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    echo "<span style='margin-right: 220px; font-size: 20px;'>".'Created at '.$row['created_at']."</span>";
                                 
                                 }
                                 $query1->data_seek(0);
                                 ?>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  <!--Contact Information Start -->
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Contact Information</h6>
                     </div>
                     <div class="card-body">
                        <div class="container">
                           <div class="image-container"></div>
                           <?php
                              while($row = $query1->fetch_array()){
                                  echo "<table>";
                                  echo "<tr>";
                                  echo "<td style='margin-right: 220px; font-size: 20px;'>" . 'Email: '. $row['user_email'] . "</td>";
                                  echo "</tr>";
                                  echo "<tr>";
                                  echo "<td style='margin-right: 220px; font-size: 20px;'>" . 'Phone No.: ' . $row['phone_number'] . "</td>";
                                  echo "</tr>";
                                  echo "</table>";
                              }
                              $query1->data_seek(0); // Reset the internal pointer of the result set
                              ?>    
                        </div>
                     </div> <!--Contact Information End -->
                </div>
                <!-- Order History Start -->
                <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Order History</h6>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Ordered At</th>
                                    <th>Payment Status</th>
                                    <th>Fulfillment Status</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = $query2->fetch_array()){
                                    echo "<td>"."#".$row['order_id']."</td>";
                                    echo "<td>".$row['ordered_at']."</td>";
                                    echo "<td>".$row['payment_status']."</td>";
                                    echo "<td>".$row['fulfillment_status']."</td>";
                                    echo "<td>".$row['total_price']."</td>";
                                    echo "</tr>";
                                    }
                                    $query2->data_seek(0);
                                ?>
                            </tbody>
                        </table>
                             
                    </div>
                     </div> 
                                </div>
                <!--Order History End -->
                  <!-- Shipping Address Start -->
                <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Shipping Address</h6>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Shipping Address No.</th>
                                    <th>Address Part 1</th>
                                    <th>Address Part 2</th>
                                    <th>Postal Code</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = $query3->fetch_array()){
                                    echo "<td>"."#".$row['shipping_address_id']."</td>";
                                    echo "<td>".$row['address_line1']."</td>";
                                    echo "<td>".$row['address_line2']."</td>";
                                    echo "<td>".$row['postal_code']."</td>";
                                    echo "<td>".$row['city']."</td>";
                                    echo "<td>".$row['state']."</td>";
                                    echo "<td>".$row['country']."</td>";
                                    echo "</tr>";
                                    }
                                    $query3->data_seek(0);
                                ?>
                            </tbody>
                        </table>
                             
                    </div>
                     </div> 
                                </div>
                <!-- Shipping Address End -->
                  <!-- Payment Method Start -->
                <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Payment Method</h6>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Payment Method</th>
                                    <th>Card Type</th>
                                    <th>Card Number</th>
                                    <th>Expired At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = $query4->fetch_array()){
                                    echo "<td>"."#".$row['payment_method_id']."</td>";
                                    echo "<td>".$row['card_type']."</td>";
                                    echo "<td>". "[ **" . substr($row['card_number'], -4)  . " ]" ."</td>";
                                    echo "<td>".$row['expired_at']."</td>";
                                    echo "</tr>";
                                    }
                                    $query4->data_seek(0);
                                ?>
                            </tbody>
                        </table>
                             
                    </div>
                     </div> 
                                </div>
                <!-- Payment Method End -->
                 <!-- Coupon Start -->
                <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Coupon</h6>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Coupon Number</th>
                                    <th>Coupon Name</th>
                                    <th>Discount</th>
                                    <th>Expiry Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = $query5->fetch_array()){
                                    echo "<td>".$row['user_coupon_id']."</td>";
                                    echo "<td>"."#".$row['coupon_id']."</td>";
                                    echo "<td>".$row['coupon_name']."</td>";
                                    echo "<td>".$row['discount']."</td>";
                                    echo "<td>".$row['expired_at']."</td>";
                                    if($row['is_used'] == 1) echo "<td>"."Used"."</td>"; else echo "<td>"."Available"."</td>";
                                    echo "</tr>";
                                    }
                                    $query5->data_seek(0);
                                ?>
                            </tbody>
                        </table>
                             
                    </div>
                     </div> 
                                </div>
                <!-- Coupon End -->
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
   </body>
</html>