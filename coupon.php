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

    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height:150px"
                href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><img src="images/supermarket.png" width="150px" /></div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img
                            src="images/dashboard_icon.png" width="20px" height="20px;"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="product.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/product_icon.png"
                            width="20px" height="20px"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Product</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="order.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/order_icon.png"
                            width="20px" height="20px"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Order</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/user_icon.png"
                            width="20px" height="20px"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">User</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="coupon.php"  style="background-color: #ebf0f4">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/coupon_icon.png"
                            width="20px" height="20px"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>

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

                <h1 class="h3 mb-3 text-gray-800 mt-4" style="margin-bottom: 1rem;">Coupon</h1>



                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="font-family: DM Sans; color:#06152B;"><b>Add New Coupon</h3>
                                    <form class="form-inline" role="form" action="" method="post"
                                        enctype="multipart/form-data">

                                        <label for="name"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Coupon Name </label>
                                        <input class="css/text-box.css"
                                            style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="name" name="coupon_name">
                                        </br></br>

                                        <label for="discount"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Discount (%)</label>
                                        <input class="css/text-box.css"
                                            style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="discount" name="discount">
                                        </br></br>

                                        <label for="min_purchase"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Min. Purchase ($)</label>
                                        <input class="css/text-box.css"
                                            style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="min_purchase" name="min_purchase">
                                        </br></br>

                                        <label for="expired_at"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Expiration Date</label>
                                        <input class="css/text-box.css"
                                            style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="date" id="expired_at" name="expired_at">

                                            <label for="coupon_desc"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Coupon Description</label>
                                        <input class="css/text-box.css"
                                            style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="coupon_decsc" name="coupon_desc">
                                        </br>
                                        </br>
                                        </br>

                                        <button type="submit"
                                            style="position:abosulte; margin-left:45%; border-radius:10px;  width:10%; border: 0px; height: 44px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal"
                                            class="button" id="add" name="submit" value="add">Add Coupon</button>
                                        </br></br>

                                    </form>

                                    <!-- PHP Code to Submit Coupon -->
                                    <?php
                                    if (isset($_POST['submit'])) {

                                        $coupon_name = $_POST['coupon_name'];
                                        $discount = $_POST['discount'];
                                        $min_purchase = $_POST['min_purchase'];
                                        $expired_at = $_POST['expired_at'];
                                        $is_active = 0;
                                        $coupon_desc = $_POST['coupon_desc'];

                                        $get_coupons = "select * from coupon where coupon_name='$coupon_name'";

                                        $run_coupons = mysqli_query($con, $get_coupons);

                                        if ($is_active == 0) {
                                            $insert_coupon = "insert into coupon (coupon_name,discount,min_purchase,expired_at,is_active,coupon_desc) 
           values ('$coupon_name','$discount','$min_purchase','$expired_at','$is_active','$coupon_desc')";
                                            echo "<script>alert('New Coupon Has Been Inserted')</script>";
                                            echo "<script>window.open('coupon.php','_self')</script>";
                                            $run_coupon = mysqli_query($con, $insert_coupon);


                                        }


                                    }
                                    ?>
                        </div>
                    </div>



                    <div class="container-fluid"
                        style="background-color:white; border-radius:10px; display: inline-block">
                                </br>

                                <?php
                                $i = 0;
                                $get_coupons = "select * from coupon";
                                $run_coupons = mysqli_query($con, $get_coupons);

                                while ($row_coupons = mysqli_fetch_array($run_coupons)) {

                                    $coupon_id = $row_coupons['coupon_id'];

                                    $coupon_name = $row_coupons['coupon_name'];

                                    $discount = $row_coupons['discount'];

                                    $min_purchase = $row_coupons['min_purchase'];

                                    $created_at = $row_coupons['created_at'];

                                    $expired_at = $row_coupons['expired_at'];

                                    $is_active = $row_coupons['is_active'];

                                    $coupon_desc = $row_coupons['coupon_desc'];

                                    $get_data = "select * from coupon where coupon_name='$coupon_name'";

                                    $run_data = mysqli_query($con, $get_data);

                                    $row_data = mysqli_fetch_array($run_data);

                                    $coupon_name = $row_data['coupon_name'];

                                    $i++;

                                    ?>

                                    <style> /* Style for view Coupon */
                                        .btn {
                                            float: right;
                                            background-color: red;
                                            border: none;
                                            color: white;
                                            padding: 10px 10px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            font-size: 20px;
                                            margin: 4px 2px;
                                            cursor: pointer;
                                            border-radius: 10px;
                                            font-size:15px;
                                        }

                                        .btn-delete{
                                            float: right;
                                            background-color: #EE9CB1;
                                            border: none;
                                            color: white;
                                            padding: 10px 10px;
                                            text-align: center;
                                            text-decoration: none;
                                            display: inline-block;
                                            font-size: 20px;
                                            margin: 4px 2px;
                                            cursor: pointer;
                                            border-radius: 10px;
                                            font-size:15px; 
                                        }

                                        .green {
                                            float: right;
                                            background-color: #00AE31;
                                        }

                                        .red {
                                            float: right;
                                            background-color: #A01818;
                                        }

                                        div.coupon-layout {
                                            display: flex;

                                        }

                                        div.coupon-percentage {

                                            padding: 30px 30px;
                                            background-color: #E7DEF1;
                                            font-size: 20px;
                                            color: #5E63FF;
                                            text-align: center;
                                            vertical-align: middle;
                                        }

                                        
                                        div.coupon-data{
                                            color:black;
                                           font-size:15px;
                                        }

                                        div.coupon-description {
                                            margin-right: 30px;
                                            margin-left: 30px;
                                            font-size: 10px;
                                            text-align: justify;
                                            width:80%;
                                         
                                        }

                                        div.view-button {
                                            position:relative;
                                            margin:auto;
                    
                                        }

                                       

                                        div.discount-text,hr{
                                            font-size:20px;
                                            color:black;
                                           
                                        }

                                        div.coupon-text{
                                            color:black;
                                            font-size:15px;
                                            margin-right: 100px;
                                            margin-top:-10px;
                                        }

                                        div.minimum-amount{
                                            color:black;
                                            
                                            font-size:12px;
                                            padding:5px;
                                            display: inline-block;
                                            border:none;
                                            border-radius: 5px;
                                            background-color:#d9d9d9;
                                
                                        }
                                      
                                        
                                    </style>

                                    <div class="card shadow mb-4">
                                        <div class="card-body">
                                            <div class="coupon-layout" >

                                                <div class="coupon-percentage" >
                                                    <text style="font-size:40px;">
                                                        <?php 
                                                        echo $discount; 
                                                        ?>%
                                                    </text>
                                                    <br>OFF</br>
                                                </div>

                                                <div class="coupon-description">

                                                    <div class="discount-text">
                                                        <?php echo $discount; ?> % OFF COUPON || <?php echo $coupon_name; ?>
                                                        <hr></hr>
                                                    </div>
                                                    
                                                    
                                                    <div class="coupon-text">
                                                        <?php echo $coupon_desc ; ?>
                                                    </div>
                                                    
                                                    <div class="minimum-amount">
                                                        <text>Minimum Purchase: $<?php echo "$min_purchase"; ?></text>
                                                    </div>
                                                    
                                                    

                                                    <div class="coupon-data">

                                                        <text>Created At: <?php echo $created_at; ?></text>
                                                        </br>
                                                        <text>Expired At: <?php echo $expired_at; ?></text>
                                                    </div>

                                                </div>

                                                
                                                
                                                    <div class="view-button">
                                                        <div class="coupon-button">
                                                            <?php
                                                            if ($row_coupons['is_active'] == "1")

                                                                // if a course is active i.e. status is 1 
                                                                // the toggle button must be able to deactivate 
                                                                // we echo the hyperlink to the page "deactivate.php"
                                                                // in order to make it look like a button
                                                                // we use the appropriate css
                                                                // red-deactivate
                                                                // green- activate
                                                                echo
                                                                    "<a href=deactivate_coupon.php?coupon_id=" . $row_coupons['coupon_id'] . " class='btn red' style='width: 120px;  background-color: #D2042D; border: 0px; font-family: DM Sans; color: white; font-weight: normal'>Deactivate</a>";
                                                            else
                                                                echo
                                                                    "<a href=active_coupon.php?coupon_id=" . $row_coupons['coupon_id'] . " class='btn green'>Activate</a>";
                                                            ?>
                                                        </div>

                                                        <div class ="coupon-delete">
                                                        <a href="remove_coupon.php?coupon_id=<?php echo $coupon_id; ?>" class="btn-delete"
                                                        style="width: 120px;  border: 0px; background-color:#E0E0E0; font-family: DM Sans; color: #333333; font-weight: normal" onclick="return confirm('Are you sure you want to delete this coupon?');" >
                                                            Delete
                                                        </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
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
