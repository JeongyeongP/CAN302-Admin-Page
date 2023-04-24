<?php

//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "can302");

//a safe method to receive post data
function mypost($str) {
    global $con;
    $val = !empty($_POST[$str]) ? mysqli_real_escape_string($con, $_POST[$str]) : '';
    return $val;
}

//receive query parameters
$order_id = mypost('order_id');
$user_id = mypost('user_id');
$payment_method_id = mypost('payment_method_id');
$shipping_address_id = mypost('shipping_address_id');
$ordered_at = mypost('ordered_at');
$total_price = mypost('total_price');
$coupon_id = mypost('coupon_id');
$payment_status = mypost('payment_status');
$paid_at = mypost('paid_at');
$fulfillment_status = mypost('fulfillment_status');
$is_cancelled = mypost('is_cancelled');

// query the data from database
if (isset($_POST['search_order'])) {
    $order_id = $_POST['data'];
    $sql = "SELECT * FROM `Order` WHERE `order_id` = $order_id and `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}
else {
    $sql = "SELECT * FROM `Order` WHERE `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}

//all data
if (isset($_POST['all'])) {
    $sql = "SELECT * FROM `Order` WHERE `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}
//unpaid data
if (isset($_POST['unpaid'])){
    $sql = "SELECT * FROM `Order` WHERE `payment_status` = 0 and `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}
//shipped data
if (isset($_POST['shipped'])){
    $sql = "SELECT * FROM `Order` WHERE `fulfillment_status` = 'Shipped' and `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}
//In Delivery data
if (isset($_POST['indelivery'])){
    $sql = "SELECT * FROM `Order` WHERE `fulfillment_status` = 'In Delivery' and `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}
//Delivered
if (isset($_POST['delivered'])){
    $sql = "SELECT * FROM `Order` WHERE `fulfillment_status` = 'Delivered' and `is_cancelled` != 1";
    $query = mysqli_query($con,$sql);
}

// //Get the post ID from the URL parameter
// if (isset($_GET['order_id'])){
//     $order_id = $_GET['order_id'];
//     $sql = "SELECT o.*, u.*, oi.*, p.*, pm.*, sa.*
//             FROM `Order` o
//             INNER JOIN `User` u ON o.user_id = u.user_id
//             INNER JOIN `Order_Item` oi ON o.order_id = oi.order_id
//             INNER JOIN `Product` p ON oi.product_id = p.product_id
//             INNER JOIN `Payment_Method` pm ON o.payment_method_id = pm.payment_method_id
//             INNER JOIN `Shipping_Address` sa ON o.shipping_address_id = sa.shipping_address_id
//             WHERE o.`order_id` = $order_id";
//     $query = mysqli_query($con,$sql); 
// }

//Cancel Order
if (isset($_POST['cancel'])){
    $order_id = $_GET['order_id'];
    $sql = "UPDATE `Order`
            SET is_cancelled = 1
            WHERE order_id = $order_id;";
    $query = mysqli_query($con,$sql);
    echo "<script>location.href='order.php'</script>";
}

if (isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $sql = "SELECT o.*, pm.*, sa.* 
            FROM `Order` o
            INNER JOIN `Payment_Method` pm ON o.payment_method_id = pm.payment_method_id
            INNER JOIN `Shipping_Address` sa ON o.shipping_address_id = sa.shipping_address_id  
            WHERE o.`order_id` = $order_id";
    $query1 = mysqli_query($con,$sql); 
}


if (isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];
    $sql = "SELECT o.*, oi.*, p.*
            FROM `Order` o
            INNER JOIN `User` u ON o.user_id = u.user_id
            INNER JOIN `Order_Item` oi ON o.order_id = oi.order_id
            INNER JOIN `Product` p ON oi.product_id = p.product_id
            INNER JOIN `Payment_Method` pm ON o.payment_method_id = pm.payment_method_id
            INNER JOIN `Shipping_Address` sa ON o.shipping_address_id = sa.shipping_address_id
            WHERE o.`order_id` = $order_id";
    $query2 = mysqli_query($con,$sql); 
}

$user_id = mypost('user_id');

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM user WHERE user_id = $user_id";
    $query3 = mysqli_query($con,$sql); 
}

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM Shipping_Address WHERE user_id = $user_id";
    $query4 = mysqli_query($con,$sql); 
}

// if (isset($_GET['order_id'])){
//     $order_id = $_GET['order_id'];
//     $sql = "SELECT DISTINCT o.*, u.*, oi.*, p.*, pm.*, sa.*
//                                FROM `Order` o
//                                JOIN `user` u ON o.user_id = u.user_id
//                                JOIN Order_item oi ON o.order_id = oi.order_id
//                                JOIN Product p ON oi.product_id = p.product_id
//                                JOIN `Payment_Method` pm ON o.payment_method_id = pm.payment_method_id
//                                JOIN `Shipping_Address` sa ON o.shipping_address_id = sa.shipping_address_id
//             WHERE o.`order_id` = $order_id
//             ";
//     $query = mysqli_query($con,$sql); 
// }

?>



