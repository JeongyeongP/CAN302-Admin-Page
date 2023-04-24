<?php

//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "can302");

//a safe method to receive post data
function mypost_user($str) {
    global $con;
    $val = !empty($_POST[$str]) ? mysqli_real_escape_string($con, $_POST[$str]) : '';
    return $val;
}

//receive query parameters
$user_id = mypost_user('user_id');
$user_email = mypost_user('user_email');
$first_name = mypost_user('first_name');
$last_name = mypost_user('last_name');
$phone_number = mypost_user('phone_number');

if (isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    print("user php running");
    $sql = "SELECT * FROM user WHERE user_id = $user_id";
    $query = mysqli_query($con,$sql); 
}

?>



