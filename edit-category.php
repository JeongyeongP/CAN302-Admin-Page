<?php
ob_start();
session_start();
?>

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

    <body style="background-color:#E2E5FF; overflow-x: scroll; overflow-y: scrolll;">

    <div class="container" style="width: 100%; height:100%;">
        <div class="sidebar" style="width: 200px; float: left; height:auto;">
        <?php include "frame_1.html" ?>
        </div>


        <div class="content" style="margin-left: 300px; margin-top:30px">

            <div class="container" style="border-radius:15px">
                <h2 style="font-family: DM Sans; color:#06152B;"> <b>Product </h2>
                <br/>

                <a href="category.php" style="font-family: DM Sans; color: #06152B; font-weight:normal"> 🡨 Back to Category List</a>
                <br/>
                <br/>

                <?php
                    include('index-category.php');
                    $id=$_GET['category_id'];
    
                    $query=mysqli_query($con,"select * from category where category_id = $id");
                    $row=mysqli_fetch_array($query);

                    $category_id = $row['category_id'];
                    $category = $row['category_name'];
                    $description = $row['description'];
                   
                ?>
              
                <div class = "container" style="background-color:white; border-radius:10px">
                        <form class="form-inline" role="form" action="" method="post">
                            <h3 style="font-family: DM Sans; color:#06152B; padding-left:10px"><b>Edit Category</h3>

                            <label for="category_id" style="width: 170px; font-family: DM Sans; color:#06152B; padding-left:10px"> Category ID </label>
                            <input readonly class='text-box.css' style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type='number' id='pcategory_id' name='category_id' value="<?= $category_id ?>">
                            </br></br>
                            
                            <label for="category" style="width: 170px; font-family: DM Sans; color:#06152B; padding-left:10px"> Category Name </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="category" name="category" value="<?= $category ?>">
                            </br></br>
                        
                            <label for="description" style="width: 170px; font-family: DM Sans; color:#06152B; padding-left:10px"> Category Description </label>
                            <input class="text-box.css" style='width:80%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;' type="text" id="description" name="description" value="<?= $description ?>">         
                            </br></br>
                            <button type="submit" style="width:160px; margin-left:10px; border: 0px; background-color:#333333; font-family: DM Sans; color: white; font-weight: normal" class="btn btn-primary" id="edit-category" name="edit-category" value="edit-category"> Save Changes </button>
                            </br></br>
                        </form>
                </div> 
     

                        
            </div>


  
    </div>
    </body>


</html>