<!DOCTYPE html>
<html lang="en">

    <head>
         <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
         <title>Super Market</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="" >
         <link rel="StyleSheet" href="frame_1.css" />
         <link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
         <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
         <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
         <script type="text/javascript" src="js/jquery-331.min.js"> </script> 
         <script type="text/javascript" src="js/bootstrap-337.min.js"> </script>

    </head>

    <body style="background-color:#E2E5FF">
        
        <div class="container" style="width: 100%; height:100%;">
            <div class="sidebar" style="width: 200px; float: left; height:auto;">
                <?php include "frame_1.html" ?>
            </div>

            <div class="content" style="margin-left: 300px; margin-top:30px">
                <div class="container">


                    <h2 style="font-family: DM Sans; color:#06152B;"><b> Product </h2>
                    <br/>
              
                    <button style='width: 10%; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Product List</button>
                    <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal' role="button"><a href="add-product.php" style="color: #06152B">Add Product</a></button>
                    <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal' role="button"><a href="edit-category.php" style="color: #06152B">Edit Category</a></button>

                    <br/>
                    <br/>

                    <div class = "container" style="background-color:white; border-radius:10px">
                        <h4 style="font-family: DM Sans; color:#06152B;">Search Filters</h4>
                            <form class="form-inline" role="form" action="" method="post">

                                <label for="name" style="font-family: DM Sans; color:#06152B;"> Product Name </label>
                                <input class="text-box.css" style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="name" name="name">
                                
                                </br></br>
                                <label for="category" style="font-family: DM Sans; color:#06152B;"> Category </label>
                                <input class="text-box.css" style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="category" name="category">

                                </br></br>
                                <label for="stock" style="font-family: DM Sans; color:#06152B;"> Stock </label>
                                <input class="text-box.css" style='width:20%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="number" id="stock" name="stock">
                                
                                <label for="stock2" style="font-family: DM Sans; color:#06152B;"> - </label>
                                <input class="text-box.css" style='width:20%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="number" id="stock2" name="stock2">

                                <label for="price" style="font-family: DM Sans; color:#06152B; margin-left: 110px"> Price </label>
                                <input class="text-box.css" style='width:20%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="number" id="price" name="price">
                                
                                <label for="price2" style="font-family: DM Sans; color:#06152B;"> - </label>
                                <input class="text-box.css" style='width:20%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="number" id="price2" name="price2">

                                </br></br>
                                <button type="submit" style="border: 0px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="search" name="search" value="search"> Search</button>
                                <button type="submit" style="border: 0px; background-color:#E0E0E0; font-family: DM Sans; color: #333333; font-weight: normal" class="btn btn-primary" id="reset" name="reset" value="reset"> Reset </button>
                                </br></br>
                                
                            </form>

                    </div>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            
                    <div class = "container" style="background-color:white; border-radius:10px">

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
                                $grapes='<img src="grapes.png" width="80" height="80">';  
                                
                                // $delete = '<button type="submit" id="delete" name="delete" value="delete"><img src="delete.png" width="15" height="15"></button>';
                                
                                $style = '<tr style="font-family: DM Sans; color:#06152B; height:100px">';
                                include("index.php");
                                while($row = $query->fetch_array()){

                            
                                    $product_id = $row['product_id'];
                                    $edit='<a target="_blank" href="edit-category.php?id='.urlencode($product_id).'"> <img src="edit.png" width="15" height="15" id="edit" name="edit"/></a>';
                                    $delete='<a href="index.php?id='.urlencode($product_id).'" name="id" id="id" value="id"> <img src="delete.png" width="15" height="15"/> </a>';
                                    echo $style;
                                    echo "<td>".$grapes."</td>";
                                    echo "<td>".'#  '.$row['product_id']."</td>";
                                    echo "<td>".$row['product_name']."</td>";
                                    echo "<td>".'$'.$row['price']."</td>";
                                    echo "<td>".$row['stock_quantity']."</td>";
                                    echo "<td>In stock</td>";
                                    echo "<td>".$edit."</td>";
                                    echo "<td>".$delete."</td>";
                                
                                }
                                mysqli_close($con);
                                ?>
                            </tbody>
                        </table>
                    </div>


                </div>


            </div>


        </div>


    </body>

</html>