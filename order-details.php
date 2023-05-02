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
      <title>Super Market</title>
      <!-- Custom fonts for this template -->
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
       <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
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
                                    echo "<span style='margin-right: 180px; font-size: 12px;'>".$row['ordered_at']."</span>";
                                 
                                 }
                                 $query1->data_seek(0);
                                 ?>
                           </div>
                           <!-- Payment Status -->
                           <div class="status" style="margin-right: 10px; text-align: center;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    if($row['payment_status'] == 1) echo "<span style='margin-right: 10px; font-size: 12px;'>Paid</span>"; else echo "<span style='margin-right: 10px; font-size: 12px;'>Unpaid</span>";
                                 
                                 }
                                 $query1->data_seek(0);
                                    ?>
                           </div>
                           <!-- Fulfillment Status -->
                           <div class="status" style="margin-right: 10px;">
                              <?php
                                 while($row = $query1->fetch_array()){
                                    echo "<span style='margin-right: 10px; font-size: 12px;'>".$row['fulfillment_status']."</span>";
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
                           <?php
                              while($row = $query3->fetch_array()){
                                 $imageBlob = $row['profile_image'];
                                 // Convert the binary data to base64 encoding
                                 $imageBase64 = base64_encode($imageBlob);
                                 // Create the data URI for the PNG image
                                 $imageDataURI = 'data:image/png;base64,' . $imageBase64;
                                 // Output the div element with the background image
                                 echo '<div class="image-container" style="background-image: url(' . $imageDataURI . ');"></div>';
                              }
                              $query3->data_seek(0); 
                              
                              ?>
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
                        <table class="table table-borderless">
                           <tbody>
                              <?php
                                 $finalPrice = 0;
                                 while($row = $query2->fetch_array()){
                                 
                                 $image= "<img width='80' height='80' src='images/".$row['product_image']."'>";   
                                 echo "<tr>";
                                 // $imageBlob = $row['product_image'];
                                 
                                 // // Convert the binary data to base64 encoding
                                 // $imageBase64 = base64_encode($imageBlob);
                                 
                                 // // Create the data URI for the PNG image
                                 // $imageDataURI = 'data:image/png;base64,' . $imageBase64;
                                 
                                 // Output the div element with the background image
                                 echo "<td>";
                                 // echo '<div class="image-container" style="background-image: url(' . $image . ');"></div>';
                                 echo $image; 
                                 echo "</td>";
                                 echo "<td>".$row['product_name']."</td>";
                                 echo"</td>";
                                 echo "<td width=190>";
                                 echo "<td>$ ".$row['price']."</td>";
                                 echo "<td>".$row['quantity'].'x'."</td>";
                                 // Calculate total price
                                 $totalPrice = $row['price'] * $row['quantity'];
                                 $finalPrice = $finalPrice+$totalPrice;
                                 echo '<td>$ ' . number_format($totalPrice, 2, '.', ',') . '</td>';
                                 echo "</tr>";
                                 }
                                 $query2->data_seek(0);
                                 ?>
                              <tr>
                                 <td>
                                    Subtotal
                                 </td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                    echo"</td>";
                                    echo "<td width=80>";
                                    echo"</td>";
                                    echo "<td>";
                                    echo"</td>";
                                    echo "<td>";
                                    echo"</td>";
                                    echo "<td>";
                                    echo "<td>".'$ '.number_format($finalPrice, 2, '.', ',')."</td>";
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </tr>
                              <tr>
                                 <td>
                                    Discount
                                 </td>
                                 <td>
                                    <div class="status" style="width: 100px; height: 30px;">
                                       <?php 
                                          if (mysqli_num_rows($query5) > 0) {
                                             while($row = $query5->fetch_array()){
                                                echo "<span style='margin-right: 10px; font-size: 11px;'>".$row['coupon_name']."</span>";
                                             }
                                             $query5->data_seek(0);
                                          }else{
                                             while($row = $query1->fetch_array()){
                                                $noCoupon = 'Not Used';
                                                echo "<span style='margin-right: 10px; font-size: 11px;'>".$noCoupon."</span>";
                                             }
                                          $query1->data_seek(0);
                                          }
                                             
                                             
                                             ?>
                                    </div>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                    <?php 
                                       if (mysqli_num_rows($query5) > 0) {
                                          while($row = $query5->fetch_array()){
                                             $discount_amount = $row['discount']*0.01*$finalPrice;
                                          echo "<span style='margin-right: 10px;'>".'-$ '.number_format($discount_amount, 2)."</span>";
                                          }
                                          $query5->data_seek(0);
                                       }else{
                                          while($row = $query1->fetch_array()){
                                             $discount_amount = 0;
                                             echo "<span style='margin-right: 10px;'>".'-$ '.number_format($discount_amount,2)."</span>";
                                          }
                                       $query1->data_seek(0);
                                       }
                                          
                                          
                                          ?>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    Total
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                 </td>
                                 <td>
                                    <?php 
                                       if (mysqli_num_rows($query5) > 0) {
                                          while($row = $query5->fetch_array()){
                                             
                                             $discount_amount = $row['discount']*0.01*$row['total_price'];
                                             $totalAmount = $row['total_price']-$discount_amount;
                                             echo "<span style='margin-right: 10px; font-size: 20px; color: black;'>".'$ '.number_format($totalAmount, 2)."</span>";
                                          }
                                          $query5->data_seek(0);
                                       }else{
                                          while($row = $query1->fetch_array()){
                                             
                                       
                                             echo "<span style='margin-right: 10px; font-size: 20px; color: black;'>".'$ '.number_format($row['total_price'], 2)."</span>";
                                          }
                                       $query1->data_seek(0);
                                       }
                                          
                                          
                                          ?>
                                 </td>
                              </tr>
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
                                 if($row['payment_status'] == 1) echo "<span style='margin-right: 10px; font-size: 12px;'>Paid</span>"; else echo "<span style='margin-right: 10px; font-size: 12px;'>Unpaid</span>";
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
                                       echo "<span style='margin-right: 450px;'>".$row['payment_method_id']."</span>";   
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                              <td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                       echo "<span style='margin-right: 10px;'>".$row['card_type'] . "[ **" . substr($row['card_number'], -4)  . " ]" ."</span>";   
                                       
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                              <td>
                                 <?php 
                                    if (mysqli_num_rows($query5) > 0) {
                                       while($row = $query5->fetch_array()){
                                          
                                          $discount_amount = $row['discount']*0.01*$row['total_price'];
                                          $totalAmount = $row['total_price']-$discount_amount;
                                          echo "<span style='margin-right: 10px; '>".'$ '.number_format($totalAmount, 2)."</span>";
                                       }
                                       $query5->data_seek(0);
                                    }else{
                                       while($row = $query1->fetch_array()){
                                          
                                    
                                          echo "<span style='margin-right: 10px;'>".'$ '.number_format($row['total_price'], 2)."</span>";
                                       }
                                    $query1->data_seek(0);
                                    }
                                       
                                       
                                       ?>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <?php
                                    while($row = $query1->fetch_array()){
                                       echo "<span style='margin-right: 10px; font-size: 12px'>".$row['paid_at']."</span>"; 
                                    }
                                    $query1->data_seek(0);
                                    ?>
                              </td>
                           </tr>
                           <tr>
                              <td height=20>
                              </td>
                           </tr>
                           <tr>
                              <td style="color: black;"> 
                                 Total paid by customer
                              </td>
                              <td>
                                 <!-- Empty --> 
                              </td>
                              <td>
                                 <?php 
                                    if (mysqli_num_rows($query5) > 0) {
                                       while($row = $query5->fetch_array()){
                                          
                                          $discount_amount = $row['discount']*0.01*$row['total_price'];
                                          $totalAmount = $row['total_price']-$discount_amount;
                                          echo "<span style='margin-right: 10px; font-size: 15px; color: black;'>".'$ '.number_format($totalAmount, 2)."</span>";
                                       }
                                       $query5->data_seek(0);
                                    }else{
                                       while($row = $query1->fetch_array()){
                                          
                                    
                                          echo "<span style='margin-right: 10px; font-size: 15px; color: black;'>".'$ '.number_format($row['total_price'], 2)."</span>";
                                       }
                                    $query1->data_seek(0);
                                    }
                                       
                                       
                                       ?>
                              </td>
                           </tr>
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
                           <?php
                              while($row = $query3->fetch_array()){
                                  $imageBlob = $row['profile_image'];
                              
                                 // Convert the binary data to base64 encoding
                                 $imageBase64 = base64_encode($imageBlob);
                              
                                 // Create the data URI for the PNG image
                                 $imageDataURI = 'data:image/png;base64,' . $imageBase64;
                              
                                 // Output the div element with the background image
                                 echo '<div class="image-container" style="background-image: url(' . $imageDataURI . ');"></div>';
                              }
                                 $query3->data_seek(0); 
                              
                              ?>
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
                        <?php
                           $count = 1; // initialize count variable
                           while($row = $query4->fetch_array()):
                           ?>
                        <table style="border-collapse: collapse; border-left: 1px solid black; margin-right: 20px;">
                           <tr>
                              <th style="border-left: 1px solid #E5E7EB; padding: 10px;">Shipping Address <?= $count ?></th>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;">
                                 <span style='margin-right: 10px;'><?= $row['address_line1'] . " " . $row['address_line2'] ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;">
                                 <span style='margin-right: 10px;'><?= $row['city'] . " " . $row['state'] ?></span>
                              </td>
                           </tr>
                           <tr>
                              <td style="border-left: 1px solid #E5E7EB; padding: 5px;">
                                 <span style='margin-right: 10px;'><?= $row['postal_code'] . " " . $row['country'] ?></span>
                              </td>
                           </tr>
                        </table>
                        <?php $count++; // increment count variable after each iteration ?>
                        <?php endwhile; ?>
                     </div>
                     <div style="background-color: white; padding: 10px; color: white;">EMPTY Space</div>
                  </div>
               </div>
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

   </body>
</html>