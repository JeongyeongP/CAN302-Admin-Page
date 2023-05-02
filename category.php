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
                <a class="nav-link" href="product.php" style="background-color: #ebf0f4">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/product_icon.png" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Product</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="order.php">
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

                 <h1 class="h3 mb-3 text-gray-800 mt-4" style="margin-bottom: 1rem;">Product</h1>
              
                    <button style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="product.php" style="color: #06152B">Product List</a></button>
                    <button style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="add-product.php" style="color: #06152B">Add Product</a></button>
                    <button style='width: 120px; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Edit Category</button>
                    <br/>
                    <br/>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                        <h5 style="font-family: DM Sans; color:#06152B;"><b>Add New Category</h3>
                            <form class="form-inline" role="form" action="" method="post">
                                
                                <label for="category" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Category Name </label>
                                <input required class="css/text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="category" name="category">
                                </br></br>
                            
                                <label for="description" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Category Description </label>
                                <input required class="css/text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="description" name="description">         
                                </br></br>
                                <button type="submit" style="width:80px; border: 0px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal; " class="btn btn-primary" id="add-category" name="add-category" value="add-category"> Add </button>
                                <button type="submit" style="margin-left:10px; width:80px; border: 0px; background-color:#E0E0E0; font-family: DM Sans; color: #333333; font-weight: normal" class="btn btn-primary" id="search-category" name="search-category" value="search-category"> Search</button>
                                </br></br>
                            </form>
              

                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th style="font-family: DM Sans; color:#06152B;"><b>Category ID</th>
                                    <th style="font-family: DM Sans; color:#06152B;"><b>Category</th>
                                    <th style="font-family: DM Sans; color:#06152B;"><b>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                $style = '<tr style="height:80px;">';
                                $textStyle = '<td style="font-family: DM Sans; color:#06152B; vertical-align: middle; font-weight:normal">';
                                $imageStyle = '<td style="color:#06152B; vertical-align: middle; padding-bottom:25px">';
                                include("index-category.php");
                                while($row = $query->fetch_array()){

                                    $category_id = $row['category_id'];
                            
                                    $edit='<a target="_blank" href="edit-category.php?category_id='.urlencode($category_id).'"> <img src="images/edit.png" width="15" height="15" id="edit" name="edit"/></a>';
                                    $delete='<a href="index-category.php?id='.urlencode($category_id).'" name="id" id="id" value="id" > <img src="images/delete.png" width="15" height="15"/> </a>';
                                    echo $style;
                                    echo "<td>";
                                    echo $textStyle.'#  '.$row['category_id']."</td>";
                                    echo $textStyle.$row['category_name']."</td>";
                                    echo $textStyle.$row['description']."</td>";
                                    echo $imageStyle.$edit."</td>";
                                    echo "<td>".$imageStyle.$delete."</td>";
                            
                            
                                
                                }
                                mysqli_close($con);
                                ?>
                            </tbody>
                        </table>
                      
                       
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