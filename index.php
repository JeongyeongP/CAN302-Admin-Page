<?php

//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "can302");

//a safe method to receive post data
function mypost($str) {
    $val = !empty($_POST[$str]) ? $_POST[$str] : '';
    return $val;
}

//receive query parameters
$name = mypost('name');
$price =  mypost('price');
$stock = mypost('stock');
$category = mypost('category');
$price2 = mypost('price2');
$stock2 = mypost('stock2');


//add the received data to database
if (isset($_POST['add'])) {
    $sql = "INSERT INTO `product` (`product_id`, `product_name`, `price`, `stock_quantity`, 'category_id') VALUES ('0', '$name', '$price', '$stock', '$category')";
    $query = mysqli_query($con,$sql);
}

//query the data from database
if (isset($_POST['search'])) {
    $sql = "select * from product where product_name LIKE '%".$name."%' and category_id LIKE '%".$category."%' 
    and stock_quantity >= $stock and stock_quantity <= $stock2 and price >= $price and price <= $price2";
    $query = mysqli_query($con,$sql);
    if (!$query){
        $sql = "select * from product";
        $query = mysqli_query($con,$sql);
    }
}
else {
    $sql = "select * from product";
    $query = mysqli_query($con,$sql);
}


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM product WHERE product_id = $id"; 
    
    if (mysqli_query($con, $deleteQuery)) {
        mysqli_close($con);
        header('Location: product.php'); 
        exit;
    } 
}


?>