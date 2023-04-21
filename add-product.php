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

                <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal' role="button"><a href="product.php" style="color: #06152B">Product List</button>
                <button style='width: 10%; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Add Product</button>
                <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal' role="button"><a href="edit-category.php" style="color: #06152B">Edit Category</a></button>
                <br/>
                <br/>

                <div class = "container" style="background-color:white; border-radius:10px">
                    <form class="form-inline" role="form" action="product.php" method="post">
                        <h3 style="font-family: DM Sans; color:#06152B;"><b>Add New Product</h3>
                        
                        <label for="category" style="width: 120px; font-family: DM Sans; color:#06152B;"> Product Name </label>
                        <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="name"  name="name">
                        </br></br>
                    
                        <label for="description" style="width: 120px; font-family: DM Sans; color:#06152B;"> Price ($)</label>
                        <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="price" name="price">         
                        </br></br>

                        <label for="stock" style="width: 120px; font-family: DM Sans; color:#06152B;"> Stock </label>
                        <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="stock" name="stock">         
                        </br></br>
                        <button type="submit" style="border: 0px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="add" name="add" value="add"> Add </button>
                        </br></br>
                    </form>
                 </div>

                 



            </div>
                
        </div>

            
        
  
    </div>
    </body>


</html>