<?php

//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "lab2");

//a safe method to receive post data
function mypost($str) {
    $val = !empty($_POST[$str]) ? $_POST[$str] : '';
    return $val;
}

//receive query parameters
$name = mypost('name');
$price =  mypost('price');
$stock = mypost('stock');


//add the received data to database
if (isset($_POST['add'])) {
    $sql = "INSERT INTO `product` (`product_id`, `product_name`, `price`, `stock_quantity`) VALUES ('0', '$name', '$price', '$stock')";
    $query = mysqli_query($con,$sql);
}

//query the data from database
if (isset($_POST['search'])) {
    $sql = "select * from product where product_name LIKE '%".$name."%'";
    $query = mysqli_query($con,$sql);
}
else {
    $sql = "select * from product";
    $query = mysqli_query($con,$sql);
}

// $id = mypost('id');
// // delete
// if (isset($_POST['delete'])) {
//     $sql ="DELETE FROM product WHERE product_id = $id"; 
//     $query = mysqli_query($con,$sql);
//     mysqli_close($con);
//     header('Location: lab2.php'); 
//     exit;
// }



if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM product WHERE product_id = $id"; 
    
    if (mysqli_query($con, $deleteQuery)) {
        mysqli_close($con);
        header('Location: lab2.php'); 
        exit;
    } 
}


// edit
// if (isset($_POST['edit'])) {
//     $sql ="INSERT INTO `product` (`product_id`, `product_name`, `price`, `stock_quantity`) VALUES ('0', '$name', '$price', '$stock')";
//     $query = mysqli_query($con,$sql);
    
// }



?>