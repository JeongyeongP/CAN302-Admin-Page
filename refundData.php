<?php

//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "can302");

//a safe method to receive post data
function mypost($str) {
    global $con;
    $val = !empty($_POST[$str]) ? mysqli_real_escape_string($con, $_POST[$str]) : '';
    return $val;
}

$refund_order_id = mypost('data');

// query the data from database
if (isset($_POST['search'])) {
    $sql = "select * from refund_order where refund_order_id=$refund_order_id";
    $query = mysqli_query($con,$sql);
    if (empty($refund_order_id)){
        $sql = "select * from refund_order";
        $query = mysqli_query($con,$sql);       
    }
}
else {
    $sql = "select * from refund_order";
        $query = mysqli_query($con,$sql);       
}










?>



