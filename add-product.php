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
    <body style="background-color:#E2E5FF; overflow-x: scroll; overflow-y: scrolll;">

    <div class="container" style="width: 100%; height:100%;" >
        <div class="sidebar" style="width: 200px; float: left; height:auto;">
        <?php include "frame_1.html" ?>
        </div>

        <div class="content" style="margin-left: 300px; margin-top:30px"  >

            <div class="container" style="border-radius:15px">
                <h2 style="font-family: DM Sans; color:#06152B;"> <b>Product </h2>
                <br/>

                <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="product.php" style="color: #06152B">Product List</button>
                <button style='width: 10%; height: 44px; border-radius: 10px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal' role="button">Add Product</button>
                <button style='width: 10%; height: 44px; border-radius: 10px; border: 0px; font-family: DM Sans; font-weight: normal; background-color: white' role="button"><a href="category.php" style="color: #06152B">Edit Category</a></button>
                <br/>
                <br/>

                <div>
                    <div class = "container" style="background-color:white; border-radius:10px">
                        <form class="form-inline" role="form" action="product.php" method="post" enctype="multipart/form-data">
                            <h3 style="font-family: DM Sans; color:#06152B; padding-left:10px"><b>Add New Product</h3>
                            
                            <label for="name" style="width: 150px; font-family: DM Sans; color:#06152B; padding-left:10px"> Product Name </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="name" name="name">
                            </br></br>

                            <label for="description" style="width: 150px; font-family: DM Sans; color:#06152B; padding-left:10px"> Description </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="description" name="description">         
                            </br></br>
                        
                            <label for="price" style="width: 150px; font-family: DM Sans; color:#06152B; padding-left:10px"> Price ($)</label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="price" name="price">         
                            </br></br>

                            <label for="stock" style="width: 150px; font-family: DM Sans; color:#06152B; padding-left:10px"> Stock </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="stock" name="stock">         
                            </br></br>

                        

                    </div>
                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                    <div class = "container" style="background-color:white; border-radius:10px; display: inline-block" >
                    <h3 style='font-family: DM Sans; color:#06152B; padding-left:10px'><b>Select Category</h3>
                    
                
                        <?php
                            include('index.php');
                            
                            $style = " style='font-family: DM Sans; color:#06152B; padding:12px'> ";
                            $sql = "select category_id, category_name from category";
                            $result = $con->query($sql);
                            echo "<select multiple name='category' id='category' style='font-family: DM Sans; color:#06152B; width:30%; height:300px; padding: 10px; background-color:#f7f6f8; border-radius:10px; border: 0px;'>";
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
           

             
                        <input type="file" accept="image/*" onchange="loadFile(event)" name="uploadfile" value="" style="margin-left:500px; margin-top: -300px; overflow-y:hidden; ">
                            <img id="output" style="width=250px; height:250px; margin-left:500px" src="images/add_image.png"/>
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
                
                        </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                        <button type="submit" style="margin-left:1000px; border: 0px; width: 10%; height: 36px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="upload" name="upload" value="upload">Add</button>
                        </br></br>
                      

                        
                       
                  
              
                        
                      
                            

                            

                            
                            
                        </form>
                        

                    </div>
                </div>
                
                    
                 
                 



            </div>
                
        </div>

            
        
  
    </div>
    </body>


</html>