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
               <a class="nav-link" href="coupon.php">
               <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/coupon_icon.png" width="20px" height="20px"></i>
               <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>
            <!-- Admin Profile -->
            <li class="nav-item mt-auto">
               <a class="nav-link" href="profile.html">
               <i class="fas fa-fw fa-user" style="margin-left: 30px;"><img src="images/admin.jpeg" width="20px" height="20px"></i>
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
                        <h6 class="m-0" style="margin-top: 2rem; margin-left: 1rem; margin-right: 1rem; color: black; font-size: 30px;"></h6>
                              <?php
                                 include("userData.php"); 
                                    while($row = $query1->fetch_array()){
                                       $imageBlob = $row['profile_image'];
                                       $profilepic = '<img style="border-radius:5px" width=160 height=160 margin=25px 10px src="data:image/jpeg;base64,'.base64_encode($imageBlob).'">';
                                       echo "<table>";
                                       echo "<tr>";
                                       echo "<td rowspan=3>".$profilepic."</td>";
                                       echo "<td>&nbsp;</td>";
                                       echo "<td style='margin-right: 220px; font-size: 20px;'>".$row['first_name'].' '.$row['last_name']."</td>";
                                       echo "<td>&nbsp;</td>";
                                       echo "</tr>";
                                       echo "<tr>";
                                       echo "<td>&nbsp;</td>";
                                       echo "<td style='margin-right: 220px; font-size: 20px;'>".'User Number #'.$row['user_id']."</td>";
                                       echo "</tr>";
                                       echo "<tr>";
                                       echo "<td>&nbsp;</td>";
                                       echo "<td style='margin-right: 220px; font-size: 20px;'>".'Created at '.$row['created_at']."</td>";
                                       echo "</tr>";
                                       echo "</table>";
                                 }
                                 $query1->data_seek(0);
                              ?>
                     </div>
                  </div>
                  <!--Contact Information Start -->
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Contact Information</h6>
                     </div>
                     <div class="card-body">
                        <div class="container">
                           <?php
                              while($row = $query1->fetch_array()){
                                 echo "<table>";
                                 echo "<tr>";
                                 echo "<td style='margin-right: 220px; font-size: 20px;'><img src='images/email.png' style='border-radius:5px' width=25 height=25 margin= 100px>Email</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td style='margin-right: 220px; font-size: 20px;'>". $row['user_email'] . "</td>";
                                 echo "</tr>";
                                 echo "<tr>";
                                 echo "<td style='margin-right: 220px; font-size: 20px;'><img src='images/phone.png' style='border-radius:5px' width=25 height=25 margin= 100px>Phone No.          </td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td>&nbsp;</td>";
                                 echo "<td style='margin-right: 220px; font-size: 20px;'>". $row['phone_number'] . "</td>";
                                 echo "</table>";
                              }
                              $query1->data_seek(0); // Reset the internal pointer of the result set
                              ?>    
                              </div>
                           </div>
                     </div> <!--Contact Information End -->
                     <!--Contact Information End -->
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
                                    echo "</tr>";
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
                                    echo "<tr>";
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
                                    echo "<tr>";
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
                                    echo "<tr>";
                                    echo "<td>".$row['user_coupon_id']."</td>";
                                    echo "<td>"."#".$row['coupon_id']."</td>";
                                    echo "<td>".$row['coupon_name']."</td>";
                                    echo "<td>".$row['discount']."</td>";
                                    echo "<td>".$row['expired_at']."</td>";
                                    if($row['is_used'] == 1) echo "<td style='color: #FF2D00;'>"."Used"."</td>"; else echo "<td>"."Available"."</td>";
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
                                 </div>
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>

   </body>
</html>