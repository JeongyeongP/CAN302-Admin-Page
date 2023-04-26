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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" style="height:150px" href="index.html" >
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><img src="images/supermarket.png" width="150px" /></div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
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
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt" style="margin-left:30px;"><img src="images/coupon_icon.png" width="20px" height="20px"></i>
                    <span style="font-family: DM Sans; color: #828a95; font-weight: medium; margin-left:10px">Coupon</span></a>
            </li>
    

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #E2E5FF;">

            <!-- Main Content -->
            <div id="content" style="margin-left:20px">
                <!-- Begin Page Content -->
                <div class="container-fluid" style="background-color: #E2E5FF;">

                    <h2 style="font-family: DM Sans; color:#06152B; margin-top:30px"><b> Product </h2>
                    <br/>
              
                    <button style='width: 120px; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Product List</button>
                    <button style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="add-product.php" style="color: #06152B">Add Product</a></button>
                    <button style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="category.php" style="color: #06152B">Edit Category</a></button>

                    <br/>
                    <br/>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="font-family: DM Sans; color:#06152B; padding-left:10px; padding-top:5px">Search Filters</h5> 
                            <img src="search.png" width=15px; height=15px style="margin-left:150px; margin-top:-70px; overflow:hidden"/>
                            <form class="form-inline" role="form" action="" method="post">
                                
                                <label for="name" style="width:150px; font-family: DM Sans; color:#06152B;"> Product Name </label>
                                <input class="text-box.css" style='width:30%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="name" name="name">
                              
                                <label for="category" style="width:150px; margin-left:69px; font-family: DM Sans; color:#06152B;"> Category </label>
                                <input class="text-box.css" style='width:30%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="category" name="category">

                                <button type="submit" style="width:120px; margin-left:30px; border: 0px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="search" name="search" value="search"> Search</button>
                                </br></br>

                                <label for="stock" style="width:90px; font-family: DM Sans; color:#06152B;"> Stock </label>
                                <input class="text-box.css" style='width:14%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B; margin-left:60px' type="number" id="stock" name="stock">
                                
                                <label for="stock2" style="font-family: DM Sans; color:#06152B; padding:10px"> - </label>
                                <input class="text-box.css" style='width:14%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="number" id="stock2" name="stock2">

                                <label for="price" style="width:90px; font-family: DM Sans; color:#06152B; margin-left:85px;"> Price </label>
                                <input class="text-box.css" style='width:14%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B; margin-left:45px' type="number" id="price" name="price">
                                
                                <label for="price2" style="font-family: DM Sans; color:#06152B; padding:10px"> - </label>
                                <input class="text-box.css" style='width:14%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="number" id="price2" name="price2">
                                
                                <button type="submit" style="width:120px; margin-left:30px; border: 0px; background-color:#E0E0E0; font-family: DM Sans; color: #333333; font-weight: normal" class="btn btn-primary" id="reset" name="reset" value="reset"> Reset </button>
                                </br></br>
                                
                            </form>

                        </div>
                    </div>

                    <div class="card shadow mb-4">
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width:10%"></th>
                                    <th style="font-family: DM Sans; color:#06152B;">Product ID</th>
                                    <th style="font-family: DM Sans; color:#06152B;">Product</th>
                                    <th style="font-family: DM Sans; color:#06152B;">Price</th>
                                    <th style="font-family: DM Sans; color:#06152B;">Stock</th>
                                    <th style="font-family: DM Sans; color:#06152B;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $style = '<tr style="font-family: DM Sans; color:#06152B; height:100px; vertical-align: middle;">';
                                $textStyle = '<td style="font-family: DM Sans; color:#06152B; vertical-align: middle;">';
                                $inStockStyle = '<td style="font-family: DM Sans; color:#3A36DB; height:100px; vertical-align: middle;">';
                                $outOfStockStyle = '<td style="font-family: DM Sans; color:#DB3636; height:100px; vertical-align: middle;">';
                                $imageStyle = '<td style="color:#06152B; vertical-align: middle; padding-bottom:25px">';
                                

                                include("index.php");    
                                while($row=$query->fetch_array()){

                            
                                    $product_id = $row['product_id'];
                                    $image= "<img width='80' height='80' src='images/".$row['product_image']."'>";     
                                    $edit='<a target="_blank" href="edit-product.php?product_id='.urlencode($product_id).'"> <img src="edit.png" width="15" height="15" id="edit" name="edit"/></a>';
                                    $delete='<a href="index.php?id='.urlencode($product_id).'" name="id" id="id" value="id"> <img src="delete.png" width="15" height="15"/> </a>';
                                    
                                    echo $style;
                                    echo "<td>".$image."</td>";
                                    echo $textStyle.'#  '.$row['product_id']."</td>";
                                    echo $textStyle.$row['product_name']."</td>";
                                    echo $textStyle.'$'.$row['price']."</td>";
                                    echo $textStyle.$row['stock_quantity']."</td>";
                                    if ($row['stock_quantity'] > 0){
                                        echo $inStockStyle."In Stock</td>";
                                    } else {
                                        echo $outOfStockStyle."Out of Stock</td>";
                                    }
                                    echo $imageStyle.$edit."</td>";
                                    echo $imageStyle.$delete."</td>";
                                
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