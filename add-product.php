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

            <li class="nav-item mt-auto">
                <a class="nav-link" href="admin_profile.php">
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
                    <button style='width: 120px; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Add Product</button>
                    <button style='width: 120px; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="category.php" style="color: #06152B">Edit Category</a></button>
                    <br/>
                    <br/>


                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="font-family: DM Sans; color:#06152B;"><b>Add New Product</h3>
                            <form class="form-inline" role="form" action="product.php" method="post" enctype="multipart/form-data">

                            <label for="name" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Product Name </label>
                            <input required class="text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="name" name="name">
                            </br></br>

                            <label for="description" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Description </label>
                            <input required class="text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="description" name="description">         
                            </br></br>
                        
                            <label for="price" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Price ($)</label>
                            <input required class="text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="price" name="price">         
                            </br></br>

                            <label for="stock" style="font-family: DM Sans; color:#06152B; display:inline-block; width:14%"> Stock </label>
                            <input required class="text-box.css" style='border: 1px solid gray; width:86%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="stock" name="stock">         
                            </br></br>

                        </div>

                        

                    </div>
            
                    <div class = "container-fluid" style="background-color:white; border-radius:10px; display: inline-block" >
                    <h5 style="font-family: DM Sans; color:#06152B; margin-top:20px"><b>Select Category</h3>
                    <td>
                        <div style="float:left;width:30%;">
                            <?php
                                include('index.php');
                                
                                $style = " style='font-family: DM Sans; color:#06152B; padding:12px'> ";
                                $sql = "select category_id, category_name from category";
                                $result = $con->query($sql);
                                echo "<select multiple name='category' id='category' style='font-family: DM Sans; color:#06152B; width:100%; height:300px; padding: 10px; background-color:#f7f6f8; border-radius:10px; border: 0px;' required>";
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<option value='' disabled selected hidden>Select Product Category</option>";
                                        echo "<option".$style.$row['category_id'].'.    '.$row['category_name']."</option>";
                                }
                                echo "</select>";
                                } else {
                                    echo "0 results";
                                }

                                $con->close();
                            ?> 

                        </div>


                        <div style="float:right;width:70%;">

                            <input required type="file" accept="image/*" onchange="loadFile(event)" id="uploadfile" name="uploadfile" value="<?= $uploadfile ?>" style="margin-left:100px; vertical-align:top;">
                                
                                <img id="output" style="width=250px; height:250px; margin-left:-300px; margin-top:50px" src="images/add_image.png"/>
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
                    
                            
                            <button type="submit" style="float:right; position:abosulte; margin-top:250px; width: 10%; border: 0px; height: 44px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="upload" name="upload" value="upload">Add</button>
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