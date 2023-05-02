<?php
    ob_start();
    session_start();
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

                    <h1 class="h3 mb-3 text-gray-800 mt-4" style="margin-bottom: 1rem;">Product</h1>
                    <br/>
              
                    <a href="product.php" style="font-family: DM Sans; color: #06152B; font-weight:normal"> 🡨 Back to Product List</a>
                    <br/>
                    <br/>

                    <?php
                        include('index.php');
                        $id=$_GET['product_id'];
        
                        $query=mysqli_query($con,"select * from product where product_id = $id");
                        $row=mysqli_fetch_array($query);

                        $product_id = $row['product_id'];
                        $name = $row['product_name'];
                        $description = $row['description'];
                        $price = $row['price'];
                        $stock = $row['stock_quantity'];
                        $category = $row['category_id'];
                        $image = $row['product_image'];
                        $uploadfile = "images/".$image;
                   
                    ?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="font-family: DM Sans; color:#06152B;"><b>Edit Product</h3>
                            <form class="form-inline" role="form" action="" method="post" enctype="multipart/form-data">

                                <label for="product_id" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Product ID </label>
                                <input readonly class='css/text-box.css' style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type='number' id='product_id' name='product_id' value="<?= $product_id ?>">
                                </br></br>

                                <label for="name" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Product Name </label>
                                <input class='css/text-box.css' style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type='text' id='name' name='name' value="<?= $name ?>">
                                
                                </br></br>

                                <label for="description" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Description </label>
                                <input class="css/text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="description" name="description" value="<?= $description ?>">         
                                </br></br>
                            
                                <label for="price" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Price ($)</label>
                                <input class="css/text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="price" name="price" value="<?= $price ?>">         
                                </br></br>

                                <label for="stock" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Stock </label>
                                <input class="css/text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="stock" name="stock" value="<?= $stock ?>">         
                                </br></br>
                        </div>

                        

                    </div>
            
                    <div class = "container-fluid" style="background-color:white; border-radius:10px; display: inline-block" >
                    <h5 style="font-family: DM Sans; color:#06152B; margin-top:20px"><b>Select Category</h3>
                    <td>
                        <div style="float:left;width:30%;">
                            <?php
                            
                                    
                                $style = " style='font-family: DM Sans; color:#06152B; padding:12px'> ";
                                $sql = "select category_id, category_name from category";
                                $result = $con->query($sql);
                                echo "<select multiple name='category' id='category' style='font-family: DM Sans; color:#06152B; width:100%; height:300px; padding: 10px; background-color:#f7f6f8; border-radius:10px; border: 0px;'>";
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) { 
                                        echo "<option value='' disabled selected hidden>Select Product Category</option>";
                                        if ($row['category_id'] == $category){
                                            echo "<option selected".$style.$row['category_id'].'.    '.$row['category_name']."</option>";
                                        } else {
                                            echo "<option".$style.$row['category_id'].'.    '.$row['category_name']."</option>";
                                        }
                                        
                                }
                                echo "</select>";
                                } else {
                                    echo "0 results";
                                }

                                $con->close();
                            ?> 

                        </div>


                        <div style="float:right;width:70%;">

                            <input type="file" accept="image/*" onchange="loadFile(event)" id="uploadfile" name="uploadfile" value="<?= $uploadfile ?>" style="margin-left:100px; vertical-align:top">
                                
                                <img id="output" style="width=250px; height:250px; margin-left:-300px;" src="<?= $uploadfile ?>"/>
                                <script>
                                var loadFile = function(event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                    output.onload = function() {
                                    URL.revokeObjectURL(output.src) 
                                    }
                                };
                                </script>
                            </input>
                    
                       
                            <button type="submit" style="margin-left:450px; margin-top: 300px; border: 0px; width: 15%; height: 44px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="edit" name="edit" value="edit">Save Changes</button>
                            </br></br>
                    
                        </div>
                    </td>

                
                                            
                        </form>
                        

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