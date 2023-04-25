<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <title>Super Market</title>
    <meta name="viewport" content="width=content-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="StyleSheet" href="coupon.css" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-337.min.css">
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
                <h2 style="font-family: DM Sans; color:#06152B;"> <b>Coupon </h2>
                <div class="container">
                    <div class="container" style="background-color:#d9d9d9;border-radius:10px">
                        <form class="form-inline" role="form" action="coupon.php" method="post">
                            <h3 style="font-family: DM Sans; color:#06152B;"><b>Add New Coupon</h3>

                            <label for="coupon-name" style="font-family: DM Sans; color:#06152B;"> Coupon Name </label>
                            <input class="text-box.css"
                                style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                type="text" id="name" placeholder="Enter coupon name here..." name="name">
                            </br></br>

                            <label for="description" style="font-family: DM Sans; color:#06152B;"> Coupon Description</label>
                            <input class="text-box.css"
                                style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                type="text" id="price" placeholder="Enter the description ..." name="description">
                            </br></br>

                            <label for="min-purchase" style="font-family: DM Sans; color:#06152B;"> Minimum Purchase</label>
                            <input class="text-box.css"
                                style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                type="text" id="stock" placeholder="Set the minimum..." name="purchase">
                            </br></br> 

                            <label for="discount" style="font-family: DM Sans; color:#06152B;"> Discount %</label>
                            <input class="text-box.css"
                                style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                type="text" id="stock" placeholder="Set the discount rate..." name="discount">
                            </br></br>

                            <label for="date" style="font-family: DM Sans; color:#06152B;"> Expiration Date</label>
                            <input class="text-box.css"
                                style='width:100%; height: 36px; border-radius:10px; font-family: DM Sans; color:#06152B;'
                                type="date" id="stock" placeholder="Set the discount rate..." name="discount">
                            </br></br>

                            <button type="submit" style="font-family: DM Sans; color:#06152B;" class="btn btn-primary"
                                id="add" name="add" value="add"> Add Coupon</button>
                            </br></br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>