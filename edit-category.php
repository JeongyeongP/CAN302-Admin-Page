<!DOCTYPE html>
<html lang="en">

    <head>
         <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
         <title>Super Market</title>
         <meta name="viewport"  content="width=content-width, initial-scale=1.0">
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

            <div class="container" style="border-radius:15px">
                <h2 style="font-family: DM Sans; color:#06152B;"> <b>Product </h2>
                <br/>
      
                <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal' role="button"><a href="product.php" style="color: #06152B">Product List</button>
                <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal' role="button"><a href="add-product.php" style="color: #06152B">Add Product</a></button>
                <button style='width: 10%; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Edit Category</button>

                <br/>
                <br/>
                <br/>
            

          
                <div class = "container" style="background-color:white; border-radius:10px">
                        <form class="form-inline" role="form" action="" method="post">
                            <h3 style="font-family: DM Sans; color:#06152B;"><b>Add New Category</h3>
                            
                            <label for="category" style="width: 150px; font-family: DM Sans; color:#06152B;"> Category Name </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="category" name="category">
                            </br></br>
                        
                            <label for="description" style="width: 150px; font-family: DM Sans; color:#06152B;"> Category Description </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="description" name="description">         
                            </br></br>
                            <button type="submit" style="border: 0px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="add-category" name="add-category" value="add-category"> Add </button>
                            <button type="submit" style="border: 0px; background-color:#E0E0E0; font-family: DM Sans; color: #333333; font-weight: normal" class="btn btn-primary" id="search-category" name="search-category" value="search-category"> Search</button>
                            </br></br>
                        </form>
                </div> 
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                <div class = "container" style="background-color:white; border-radius:10px">
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
                            
                            $style = '<tr style="height:30px;">';
                            $textStyle = '<td style="font-family: DM Sans; color:#06152B;">';
                            include("index-category.php");
                            while($row = $query->fetch_array()){

                                $category_id = $row['category_id'];
                                $edit='<img src="edit.png" width="15" height="15" id="edit" name="edit"/>';
                                $delete='<a href="index-category.php?id='.urlencode($category_id).'" name="id" id="id" value="id"> <img src="delete.png" width="15" height="15"/> </a>';
                                echo $style;
                                echo "<td>";
                                echo $textStyle.'#  '.$row['category_id']."</td>";
                                echo $textStyle.$row['category_name']."</td>";
                                echo $textStyle.$row['description']."</td>";
                                echo $textStyle.$edit."</td>";
                                echo "<td>".$delete."</td>";
                        
                        
                            
                            }
                            mysqli_close($con);
                            ?>
                        </tbody>
                    </table>


                </div>
                
             
        

                

                
            </div>


  
    </div>
    </body>


</html>