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
$refund_order_id = mypost('refund_order_id');
$order_id =mypost('order_id');
$refund_at = mypost('refund_at');
$refund_status = mypost('refund_status');

// query the data from database
if (isset($_POST['search_refund'])) {
    $order_id = $_POST['data_refund'];
    $sql = "SELECT * FROM `Refund_order` 
            WHERE `order_id` = $order_id
            ORDER BY refund_at DESC"; 
    $query = mysqli_query($con,$sql);
    if (empty($order_id)){
       $sql = "SELECT * FROM `Refund_order'
       ORDER BY refund_at DESC";
       $query = mysqli_query($con,$sql);      
    }
}
else {
    $sql = "SELECT * FROM `Refund_order'
            ORDER BY refund_at DESC";
    $query = mysqli_query($con,$sql);
}
?>