<?php

// Connect to database 
$con = mysqli_connect("localhost", "root", "", "can302");

// Check if id is set or not if true toggle,
// else simply go back to the page
if (isset($_GET['coupon_id'])) {

    // Store the value from get to a 
    // local variable "course_id"
    $coupon_id = $_GET['coupon_id'];

    // SQL query that sets the status
    // to 1 to indicate activation.
    $sql = "UPDATE `coupon` SET `is_active` = 1 WHERE `coupon_id` =$coupon_id";

    // Execute the query
    mysqli_query($con, $sql);
}

// Go back to course-page.php
header('location: coupon.php');
?>