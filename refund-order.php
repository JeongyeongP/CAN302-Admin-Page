<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <title>Super Market</title>
    <meta name="viewport" content="width=content-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="styleSheet" href="refund-order.css" />
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
                <h2 style="font-family: DM Sans; color:#06152B;"> <b> Order</h2>
                <br />

                <button class="button-16" style='width:15%; height: 36px; font-family: DM Sans; color:#06152B;'
                    role="button">Order List</button>
                <button class="button-16" style='width:15%; height: 36px; font-family: DM Sans; color:#06152B;'
                    role="button">Refund List</button>

                <form class="search-bar">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                            aria-label="Search" aria-describedby="basic-addon2">
                        <button class="btn btn-primary" type="button"> Search
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>