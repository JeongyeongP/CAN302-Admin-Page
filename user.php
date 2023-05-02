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
                    <h1 class="h3 mb-3 text-gray-800 mt-4" style="margin-bottom: 1rem;">User</h1>


                    <!-- User -->
                    <!-- Filter & Search -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form class="form-inline" method="POST" action="">
                                <div class="form-group col-mb-3">
                                    <input type="text" name="user_id" id="user_id" class="form-control" placeholder="User ID" >
                                </div>
                                <div class="form-group col-mb-3" style='margin-left:30px;'>
                                    <input type="text" name="user_email" id="user_email" class="form-control"  placeholder="User Email" style="width:600px;">
                                </div>
                                <div class="form-group col-mb-3" style='margin-left:30px;'>
                                    <input type="date" name="created_at" id="created_at" class="form-control" placeholder="Created At">
                                <div class="input-group-append">
                                    <button type="submit" class="button-16" id="submit_search" name="submit_search" value="submit_search" style='margin-left: 200px; width:120px; border: 0px; background-color:#E0E0E0; font-family: DM Sans; color: #333333; font-weight: normal'>Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card shadow mb-4">
             
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style='font-family: DM Sans;'>User Number</th>
                                        <th style='font-family: DM Sans;'>Profile</th>
                                        <th></th>
                                        <th style='font-family: DM Sans;'>User ID</th>
                                        <th style='font-family: DM Sans;'>Registered Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include("userData.php");
                                            while($row = $result->fetch_array()){
                                            echo '<tr onclick="window.location=\'user-details.php?user_id=' . $row['user_id'] . '&user_id=' . $row['user_id'] . '\';">';
                                            echo "<td style='width:180px; vertical-align: middle; font-family: DM Sans;'>"."#".$row['user_id']."</td>";
                                            $imageBlob = $row['profile_image'];
                                            $profilepic = '<img style="border-radius:5px" width=50 height=50 src="data:image/jpeg;base64,'.base64_encode($imageBlob).'">';
                                            echo "<td style='width:50px'>".$profilepic."</td>";
                                            echo "<td style='width:400px; vertical-align: middle; font-family: DM Sans;'>".$row['first_name'].' '.$row['last_name']."</td>";
                                            echo "<td style='vertical-align: middle; font-family: DM Sans;'>".$row['user_email']."</td>";
                                            echo "<td style='vertical-align: middle; font-family: DM Sans;'>".$row['created_at']."</td>";
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
            </div>
        <!-- /.container-fluid -->
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