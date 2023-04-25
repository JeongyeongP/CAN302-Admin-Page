<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Style -->
      <link href="css/shape.css" rel="stylesheet">
      <!-- Button Style -->
      <link href="css/button.css" rel="stylesheet">
      <title>User Details</title>
      <!-- Custom fonts for this template -->
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Button Style -->
      <link href="css/buttonStyle.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
               </div>
               <div class="sidebar-brand-text mx-3">Super Market</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
               <a class="nav-link" href="index.html">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Interface
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-fw fa-cog"></i>
               <span>Components</span>
               </a>
               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Components:</h6>
                     <a class="collapse-item" href="buttons.html">Buttons</a>
                     <a class="collapse-item" href="cards.html">Cards</a>
                  </div>
               </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                  aria-expanded="true" aria-controls="collapseUtilities">
               <i class="fas fa-fw fa-wrench"></i>
               <span>Utilities</span>
               </a>
               <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                  data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Custom Utilities:</h6>
                     <a class="collapse-item" href="utilities-color.html">Colors</a>
                     <a class="collapse-item" href="utilities-border.html">Borders</a>
                     <a class="collapse-item" href="utilities-animation.html">Animations</a>
                     <a class="collapse-item" href="utilities-other.html">Other</a>
                  </div>
               </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Addons
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                  aria-expanded="true" aria-controls="collapsePages">
               <i class="fas fa-fw fa-folder"></i>
               <span>Pages</span>
               </a>
               <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Login Screens:</h6>
                     <a class="collapse-item" href="login.html">Login</a>
                     <a class="collapse-item" href="register.html">Register</a>
                     <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                     <div class="collapse-divider"></div>
                     <h6 class="collapse-header">Other Pages:</h6>
                     <a class="collapse-item" href="404.html">404 Page</a>
                     <a class="collapse-item" href="blank.html">Blank Page</a>
                  </div>
               </div>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
               <a class="nav-link" href="charts.html">
               <i class="fas fa-fw fa-chart-area"></i>
               <span>Charts</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
               <a class="nav-link" href="tables.html">
               <i class="fas fa-fw fa-table"></i>
               <span>Tables</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
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
                                    echo "<td>".$row['card_number']."</td>";
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
                                    echo "<td>".$row['card_number']."</td>";
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
                <!-- Coupon End -->
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
   </body>
</html>