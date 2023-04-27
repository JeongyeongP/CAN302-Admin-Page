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
    <link rel="Stylesheet" href="switch.css" />


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height:150px"
                href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><img src="images/supermarket.png" width="150px" /></div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img
                            src="images/dashboard_icon.png" width="20px" height="20px;"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="product.php" style="background-color: #ebf0f4">
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
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/coupon_icon.png"
                            width="20px" height="20px"></i>
                    <span
                        style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #E2E5FF;">

            <!-- Main Content -->
            <div id="content" style="margin-left:20px">
                <!-- Begin Page Content -->
                <div class="container-fluid" style="background-color: #E2E5FF;">

                    <h2 style="font-family: DM Sans; color:#06152B; margin-top:30px"><b> Coupon</h2>
                    <br />

                    <button
                        style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white'
                        role="button"><a href="product.php" style="color: #06152B">Product List</a></button>
                    <button
                        style='width: 120px; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal'
                        role="button">Add Coupon</button>
                    <button
                        style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white'
                        role="button"><a href="category.php" style="color: #06152B">Edit Category</a></button>
                    <br />
                    <br />


                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="font-family: DM Sans; color:#06152B;"><b>Add New Coupon</h3>
                                    <form class="form-inline" role="form" action="" method="post"
                                        enctype="multipart/form-data">

                                        <label for="name"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Coupon Name </label>
                                        <input class="text-box.css"
                                            style='width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="name" name="coupon_name">
                                        </br></br>

                                        <label for="discount"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Discount (%)</label>
                                        <input class="text-box.css"
                                            style='width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="description" name="discount">
                                        </br></br>

                                        <label for="min_purchase"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Min. Purchase ($)</label>
                                        <input class="text-box.css"
                                            style='width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="text" id="price" name="min_purchase">
                                        </br></br>

                                        <label for="expired_at"
                                            style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%">
                                            Expiration Date</label>
                                        <input class="text-box.css"
                                            style='width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                            type="date" id="stock" name="expired_at">
                                        </br>
                                        </br>
                                        </br>

                                        <button type="submit"
                                            style="font-family: DM Sans; color:#06152B background-color:#333333;"
                                            class="button" id="add" name="submit" value="add"> Add
                                            Coupon</button>
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

                                        $get_coupons = "select * from coupon where coupon_name='$coupon_name'";

                                        $run_coupons = mysqli_query($con, $get_coupons);

                                        if ($is_active == 0) {
                                            $insert_coupon = "insert into coupon (coupon_name,discount,min_purchase,expired_at,is_active) 
           values ('$coupon_name','$discount','$min_purchase','$expired_at','$is_active')";
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
                        <h5 style="font-family: DM Sans; color:#06152B; margin-top:20px"><b>View Coupon</h3>
                                <table class="table table-bordered table-hover table-str" style="margin-top: 10px">
                                    <thead><!-- thead Starts -->
                                        <tr>
                                            <th>#</th>
                                            <th>Coupon Name </th>
                                            <th>Discount (%)</th>
                                            <th>Minimum Purchase ($)</th>
                                            <th>Created At</th>
                                            <th>Expired At</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                            <th>Toggle</th>

                                        </tr>
                                    </thead><!-- thead Ends -->
                                    <tbody><!-- tbody Starts -->
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

                                            $get_data = "select * from coupon where coupon_name='$coupon_name'";

                                            $run_data = mysqli_query($con, $get_data);

                                            $row_data = mysqli_fetch_array($run_data);

                                            $coupon_name = $row_data['coupon_name'];

                                            $i++;

                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $i; ?>
                                                </td>

                                                <td>
                                                    <?php echo $coupon_name; ?>
                                                </td>

                                                <td>
                                                    <?php echo $discount; ?>
                                                </td>

                                                <td>
                                                    <?php echo "$min_purchase"; ?>
                                                </td>

                                                <td>
                                                    <?php echo $created_at; ?>
                                                </td>

                                                <td>
                                                    <?php echo $expired_at; ?>
                                                </td>

                                                <td>
                                                    <?php
                                                    if ($row_coupons['is_active'] == "1") {
                                                        echo $is_active = "Active";
                                                    } else {
                                                        echo $is_active = "Inactive";
                                                    }

                                                    ?>
                                                </td>

                                                <td>
                                                    <a href="remove_coupon.php?coupon_id=<?php echo $coupon_id; ?>"
                                                        onclick="return confirm('Are you sure you want to delete this coupon?');">
                                                        <i class="fa fa-trash-o"></i> Delete
                                                    </a>
                                                </td>
                                                <td>
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
                                                            "<a href=deactivate_coupon.php?coupon_id=" . $row_coupons['coupon_id'] . " class='btn red'>Deactivate</a>";
                                                    else
                                                        echo
                                                            "<a href=active_coupon.php?coupon_id=" . $row_coupons['coupon_id'] . " class='btn green'>Activate</a>";
                                                    ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody><!-- tbody ends -->
                                </table>
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
