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
      <title>Order Details</title>
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
                  <!-- Order -->
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="card-header">
                        <h6 class="m-0" style="margin-top: 2rem; margin-left: 1rem; margin-right: 1rem; color: black; font-size: 20px;">Order #
                           <?php
                              include("orderData.php"); 
                              while($row = $query1->fetch_array()){
                                 echo "<td>".$row['order_id']."</td>"; 
                                 $order_id = $row['order_id'];
                              }
                              $query1->data_seek(0);
                              ?>
                        </h6>
                        <div style="display: flex; align-items: center; margin-top: 3px;">
                           <!-- Order Date -->
                           <div class="order date" style="margin-right: 50px;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    echo "<span style='margin-right: 150px; font-size: 12px;'>".$row['ordered_at']."</span>";
                                 
                                 }
                                 $query1->data_seek(0);
                                 ?>
                           </div>
                           <!-- Payment Status -->
                           <div class="status" style="margin-right: 10px; text-align: center;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    if($row['payment_status'] == 1) echo "<span style='margin-right: 10px;'>Paid</span>"; else echo "<span style='margin-right: 10px;'>Unpaid</span>";
                                 
                                 }
                                 $query1->data_seek(0);
                                    ?>
                           </div>
                           <!-- Fulfillment Status -->
                           <div class="status" style="margin-right: 10px;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    echo "<span style='margin-right: 10px;'>".$row['fulfillment_status']."</span>";
                                 }
                                 $query1->data_seek(0);
                                    ?>
                           </div>
                           <!-- Delete Button -->
                           <form action="" method="post" id="cancelOrderForm">
                           <button class="button-17" style="margin-right: 10px;" type="submit" id="cancel" name="cancel" value="cancel"><span class="button-icon"></span>  Cancel Order</button>
                           </form>
                        
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="container">
                           <div class="image-container"></div>
                           <?php
                              // Create an array to keep track of usernames
                                 $displayedUserInfo = array();
                                 while($row = $query3->fetch_array()){
                                    $username = $row['first_name'] . " " . $row['last_name'];
                                    echo "<table>";
                                       echo "<tr>";
                                       echo "<td>" . $username . "</td>";
                                       echo "</tr>";
                                       echo "<tr>";
                                       echo "<td>" . $row['user_email'] . "</td>";
                                       echo "</tr>";
                                       echo "</table>";
                                 }
                                 $query3->data_seek(0); // Reset the internal pointer of the result set
                                 ?>    
                        </div>
                     </div>
                  </div>
                  <!-- Order Summary -->   
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Summary</h6>
                     </div>
                     <div class="card-body">
                        <table class="table">
                           <tbody>
                              <?php
                                 while($row = $query2->fetch_array()){
                                 echo "<tr>";
                                 echo "<td>".$row['product_name']."</td>";
                                 echo "<td>".$row['price']."</td>";
                                 echo "<td>".$row['quantity'].'x'."</td>";
                                 // Calculate total price
                                 $totalPrice = $row['price'] * $row['quantity'];
                                 echo '<td>$' . number_format($totalPrice, 2, '.', ',') . '</td>';
                                 echo "</tr>";
                                 }
                                 $query2->data_seek(0);
                                 ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- Order Payments -->   
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="display: flex; align-items: center; margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Payments</h6>
                        <!-- Payment Status -->
                        <div class="status" style="margin-left: auto; margin-right: 10px;">
                           <?php
                              while($row = $query1->fetch_array()){
                                 if($row['payment_status'] == 1) echo "<span style='margin-right: 10px;'>Paid</span>"; else echo "<span style='margin-right: 10px;'>Unpaid</span>";
                              }
                              $query1->data_seek(0);
                                 ?>
                        </div>
                        <button class="button-18" style="margin-right: 10px;" type="submit" id="delete" name="delete" value="delted"> <span class="button-icon"></span>   Edit</button>
                     </div>
                     <div class="card-body">
                        <table>
                           <tr>
                              <td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                       echo "<span style='margin-right: 10px;'>".$row['payment_method_id']."</span>";   
                                       
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                              <td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                       echo "<span style='margin-right: 10px;'>".$row['card_type'] . "[ " . $row['card_number'] . " ]" ."</span>";   
                                       
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                              <td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                       echo "<span style='margin-right: 10px;'>$" . number_format($row['total_price'], 3) . "</span>";  
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                       echo "<span style='margin-right: 10px;'>".$row['paid_at']."</span>"; 
                                         
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                           </tr>
                           <td> 
                              Total paid by customer
                           </td>
                        </table>
                     </div>
                  </div>
                  <!-- Order Shipping Address -->   
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Shipping Address</h6>
                     </div>
                     <div class="card-body">
                        <table>
                           <tr>
                              <td>
                                 Address Line 1
                                 <div class="textcontainer" style="margin-right: 10px;">
                                    <?php
                                       while($row = $query1->fetch_array()){
                                           echo "<span style='margin-right: 10px;'>".$row['address_line1']."</span>";
                                       }
                                       $query1->data_seek(0); 
                                       ?>
                                 </div>
                              </td>
                              <td>
                                 Address Line 2
                                 <div class="textcontainer" style="margin-right: 10px;">
                                    <?php
                                       while($row = $query1->fetch_array()){
                                           echo "<span style='margin-right: 10px;'>".$row['address_line2']."</span>";
                                       }
                                       $query1->data_seek(0); 
                                       ?>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 Postal Code
                                 <div class="textcontainer" style="margin-right: 10px;">
                                    <?php
                                       while($row = $query1->fetch_array()){
                                           echo "<span style='margin-right: 10px;'>".$row['postal_code']."</span>";
                                       }
                                       $query1->data_seek(0); 
                                       ?>
                                 </div>
                              </td>
                              <td>
                     </div>
                     City<div>
                     <div class="textcontainer" style="margin-right: 10px;">
                     <?php
                        while($row = $query1->fetch_array()){
                            echo "<span style='margin-right: 10px;'>".$row['city']."</span>";
                        }
                        $query1->data_seek(0); 
                        ?>
                     </div>
                     </td>
                     </tr>
                     <tr>
                     <td>
                     Province
                     <div class="textcontainer" style="margin-right: 10px;">
                     <?php
                        while($row = $query1->fetch_array()){
                            echo "<span style='margin-right: 10px;'>".$row['state']."</span>";
                        }
                        $query1->data_seek(0);
                        ?>
                     </div>
                     </td>
                     <td>
                     Country
                     <div class="textcontainer" style="margin-right: 10px;">
                     <?php
                        while($row = $query1->fetch_array()){
                            echo "<span style='margin-right: 10px;'>".$row['country']."</span>";
                        }
                        $query1->data_seek(0); 
                        ?>
                     </div>
                     </td>
                     </tr>
                     </table>
                     </div>
                  </div>
                  <!-- Order Customer Information -->   
                  <div class="card shadow mb-4 mt-4 col-md-8 offset-md-2">
                     <div class="title" style="margin-top: 1.5rem; margin-left: 1rem; margin-right: 1rem;">
                        <h6 class="m-0" style="color: black; font-size: 20px;">Customer Information</h6>
                     </div>
                     <div class="card-body">
                        <div class="container">
                           <div class="image-container"></div>
                           <?php
                              while($row = $query3->fetch_array()){
                                  echo "<table>";
                                  echo "<tr>";
                                  echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                                  echo "</tr>";
                                  echo "<tr>";
                                  echo "<td>" . $row['user_email'] . "</td>";
                                  echo "</tr>";
                                  echo "</table>";
                              }
                              $query3->data_seek(0); // Reset the internal pointer of the result set
                              ?>    
                        </div>
                     </div>
                     <div style="display: flex; gap: 10px; margin-left: 40px;">
                        <table style="border-collapse: collapse; border-left: 1px solid black; margin-right: 20px;">
                           <tr>
                              <th style="border-left: 1px solid #E5E7EB; padding: 10px;">Contact</th>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;"><?php
                                 while($row = $query3->fetch_array()){
                                     echo "<span style='margin-right: 10px;'>".$row['first_name'] . " " . $row['last_name'] ."</span>";
                                 }
                                 $query3->data_seek(0); 
                                 ?></td>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;"><?php
                                 while($row = $query3->fetch_array()){
                                     echo "<span style='margin-right: 10px;'>". $row['user_email'] ."</span>";
                                 }
                                 $query3->data_seek(0); 
                                 ?></td>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;"><?php
                                 while($row = $query3->fetch_array()){
                                     echo "<span style='margin-right: 10px;'>". '+' .$row['phone_number'] ."</span>";
                                 }
                                 $query3->data_seek(0); 
                                 ?>
                              </td>
                           </tr>
                        </table>
                        <table style="border-collapse: collapse; border-left: 1px solid black; margin-right: 20px;">
                           <tr>
                              <th style="border-left: 1px solid #E5E7EB; padding: 10px;">Shipping Address</th>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;"><?php
                                 while($row = $query4->fetch_array()){
                                     echo "<span style='margin-right: 10px;'>".$row['address_line1'] . " " . $row['address_line2'] ."</span>";
                                 }
                                 $query4->data_seek(0); 
                                 ?></td>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;"><?php
                                 while($row = $query4->fetch_array()){
                                     echo "<span style='margin-right: 10px;'>".$row['city'] . " " . $row['state'] ."</span>";
                                 }
                                 $query4->data_seek(0); 
                                 ?></td>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;"><?php
                                 while($row = $query4->fetch_array()){
                                     echo "<span style='margin-right: 10px;'>".$row['postal_code'] . " " . $row['country'] ."</span>";
                                 }
                                 $query4->data_seek(0); 
                                 ?>
                              </td>
                           </tr>
                        </table>
                     </div>
                     <div style="background-color: white; padding: 10px; color: white;">EMPTY Space</div>
                  </div>
               </div>
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
   </body>
</html>