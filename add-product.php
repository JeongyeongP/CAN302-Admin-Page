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
                <h2 style="font-family: DM Sans; color:#06152B;"> <b>Product </h2>
                <br/>

                <button class="button-16" style='width:15%; height: 36px; font-family: DM Sans; color:#06152B;' role="button"><a href="lab2.php">Product List</a></button>
                <button class="button-16" style='width:15%; height: 36px; font-family: DM Sans; color:#06152B; background-color:#d9d9d9' role="button">Add Product</button>
                <button class="button-16" style='width:15%; height: 36px; font-family: DM Sans; color:#06152B;' role="button"><a href="edit-category.php">Edit Category</a></button>
                <br/>
                <br/>
                <br/>

                <div class="container">
                    <div class="container" style="background-color:#d9d9d9;border-radius:10px">
                        <form class="form-inline" role="form" action="lab2.php" method="post">
                            <h3 style="font-family: DM Sans; color:#06152B;"><b>Add New Product</h3>
                            
                            <label for="category" style="font-family: DM Sans; color:#06152B;"> Product Name </label>
                            <input class="text-box.css" style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="name" placeholder="Enter product name here..." name="name">
                            </br></br>
                        
                            <label for="description" style="font-family: DM Sans; color:#06152B;"> Price ($)</label>
                            <input class="text-box.css" style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="price" placeholder="Enter price here..." name="price">         
                            </br></br>

                            <label for="stock" style="font-family: DM Sans; color:#06152B;"> Stock </label>
                            <input class="text-box.css" style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="stock" placeholder="Enter stock here..." name="stock">         
                            </br></br>
                            <button type="submit" style="font-family: DM Sans; color:#06152B;" class="btn btn-primary" id="add" name="add" value="add"> Add Product</button>
                            </br></br>
                        </form>
                </div>


            </div>
                
            </div>

            
        
  
    </div>
    </body>


</html>