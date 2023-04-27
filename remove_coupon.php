<?php
// Connect to database 
$con = mysqli_connect("localhost", "root", "", "can302");

// Check if delete parameter is set
if (isset($_GET['coupon_id'])) {

    // Get the coupon ID from GET parameter
    $coupon_id = $_GET['coupon_id'];

    // Construct SQL query to delete the coupon
    $sql = "DELETE FROM `coupon` WHERE `coupon_id` = $coupon_id";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        // Coupon deleted successfully, redirect to coupon.php
        header('Location: coupon.php');
        exit;
    } else {
        // Error occurred while deleting the coupon
        echo "Error deleting coupon: " . mysqli_error($con);
    }
} else {
    // Invalid request, redirect to coupon.php
    header('Location: coupon.php');
    exit;
}
?>