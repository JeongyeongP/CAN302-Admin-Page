<!DOCTYPE html>
<html lang="en">

    <head>
         <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
         <title>Super Market</title>
         <meta name="viewport"  content="width=content-width, initial-scale=1.0">
         <meta name="description" content="" >
         <link rel="StyleSheet" href="frame_1.css" />
         <link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
         <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
         <script type="text/javascript" src="js/jquery-331.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap-337.min.js"> </script>

    </head>
    <body style="background-color:#E2E5FF">

    <div class="container" style="width: 100%; height:100%;" >
        <div class="sidebar" style="width: 200px; float: left; height:auto;">
        <?php include "frame_1.html" ?>
        </div>


        <div class="content" style="margin-left: 300px; margin-top:30px"  >

            <div class="container" style="border-radius:15px">
                <h2><b> Product </h2>
                <br/>
      
                <button class="button-16" style='width:15%; height: 36px; background-color:#d9d9d9' role="button">Product List</button>
                <button class="button-16" style='width:15%; height: 36px;' role="button"><a href="add-product.php">Add Product</a></button>
                <button class="button-16" style='width:15%; height: 36px;' role="button"><a href="edit-category.php">Edit Category</a></button>

                <br/>
                <br/>
                <br/>

                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:10%"></th>
                            <th><b>Product ID</th>
                            <th><b>Product</th>
                            <th><b>Price</th>
                            <th><b>Stock</th>
                            <th><b>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $grapes='<img src="grapes.png" width="80" height="80">';  
                          
                        // $delete = '<button type="submit" id="delete" name="delete" value="delete"><img src="delete.png" width="15" height="15"></button>';
                        
                        $style = '<tr style="height:100px;">';
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
    </body>


</html>