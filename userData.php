<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "can302");

//a safe method to receive post data
function mypost($str) {
    global $con;
    $val = !empty($_POST[$str]) ? mysqli_real_escape_string($con, $_POST[$str]) : '';
    return $val;
}

//receive query parameters
$user_id= mypost('user_id');
$user_email = mypost('user_email');
$password = mypost('password');
$profile_image = mypost('profile_image');
$first_name = mypost('first_name');
$last_name = mypost('last_name');
$phone_number = mypost('phone_number');
$created_at = mypost('created_at');
$is_admin = mypost('is_admin');
$created_at = mypost('created_at');
$order_id = mypost('order_id');
$payment_method_id = mypost('payment_method_id');
$shipping_address_id = mypost('shipping_address_id');
$ordered_at = mypost('ordered_at');
$total_price = mypost('total_price');
$coupon_id = mypost('coupon_id');
$payment_status = mypost('payment_status');
$paid_at = mypost('paid_at');
$fulfillment_status = mypost('fulfillment_status');
$is_cancelled = mypost('is_cancelled');


if(isset($_POST['submit_search'])) {
    // define the list of fields
    $fields = array('user_id', 'user_email', 'created_at');
    $conditions = array();

    // loop through the defined fields
    foreach($fields as $field){
        // if the field is set and not empty
        if(isset($_POST[$field]) && $_POST[$field] != '') {
            // create a new condition while escaping the value inputed by the user (SQL Injection)
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($con,$_POST[$field]) . "%'";
        }
    }

    // builds the query
    $query = "SELECT * FROM `user` ";
    // if there are conditions defined
    if(count($conditions) > 0) {
        // append the conditions
        $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
    }

    $result = mysqli_query($con,$query);
} else {
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($con,$sql);
}

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql1 = "SELECT * FROM `user` 
    WHERE `user_id` = $user_id";
    $query1 = mysqli_query($con,$sql1); 
}

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql2 = "SELECT u.*, o.*
            FROM user u
            INNER JOIN `order` o ON u.user_id = o.user_id
            WHERE u.`user_id` = $user_id";
    $query2 = mysqli_query($con,$sql2); 
}

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql3 = "SELECT u.*, sa.*
            FROM user u
            INNER JOIN `shipping_address` sa ON u.user_id = sa.user_id
            WHERE u.`user_id` = $user_id";
    $query3 = mysqli_query($con,$sql3); 
}

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql4 = "SELECT u.*, pm.*
            FROM user u
            INNER JOIN `payment_method` pm ON u.user_id = pm.user_id
            WHERE u.`user_id` = $user_id";
    $query4 = mysqli_query($con,$sql4); 
}
?>