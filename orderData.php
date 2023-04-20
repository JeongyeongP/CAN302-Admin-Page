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

//add the received data to database
if (isset($_POST['add'])) {
    $sql = "INSERT INTO `Order` (`user_id`, `ordered_at`, `payment_method_id`, `shipping_address_id`, `total_price`, `coupon_id`, `payment_status`, `paid_at`, `fulfillment_status`, `is_cancelled`) 
            VALUES ('$user_id', '$ordered_at', '$payment_method_id', '$shipping_address_id', '$total_price', '$coupon_id', '$payment_status', '$paid_at', '$fulfillment_status', '$is_cancelled')";
    $query = mysqli_query($con,$sql);
}

//query the data from database
if (isset($_POST['search'])) {
    $sql = "SELECT * FROM `Order` WHERE `order_id` = '$_id'";
    $query = mysqli_query($con,$sql);
}
else {
    $sql = "SELECT * FROM `Order`";
    $query = mysqli_query($con,$sql);
}

?>



