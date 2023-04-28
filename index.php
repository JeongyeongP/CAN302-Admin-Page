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
$description = mypost('description');
$price =  mypost('price');
$stock = mypost('stock');
$category = mypost('category'); 
$price2 = mypost('price2');
$stock2 = mypost('stock2');


//add the received data to database
if (isset($_POST['upload'])) {

    // $image_name = $_FILES["uploadfile"]["name"];
    // $image = $_FILES['uploadfile']['tmp_name'];
    // $imgContent = addslashes(file_get_contents($image));

    // $category = intval($category);

    // $sql = "INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `description`, `price`, `stock_quantity`, `category_id`) 
    //     VALUES ('0', '$name', ?, '$description', '$price', '$stock', '$category')";
    // $stmt = mysqli_prepare($con, $sql);
    // mysqli_stmt_bind_param($stmt, "s", $imgContent);

    // if(mysqli_stmt_execute($stmt)){
    //     echo "Image uploaded and inserted successfully.";
    // } else {
    //     echo "Error uploading image: " . mysqli_error($con);
    // }

    // mysqli_stmt_close($stmt);

    //Original Code
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;

    $sql = "INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `description`, `price`, `stock_quantity`, `category_id`) VALUES ('0', '$name', '$filename', '$description', '$price', '$stock', '$category')";
    $query = mysqli_query($con,$sql);
    move_uploaded_file($tempname, $folder);

    $sql = "INSERT INTO `product` (`product_id`, `product_name`, `description`, `price`, `stock_quantity`, `category_id`) VALUES ('0', '$name', '$description', '$price', '$stock', '$category')";
    $query = mysqli_query($con,$sql);
    
}


//query the data from database
if (isset($_POST['search'])) {

    $sql = "";
    if (!empty($category) && empty($stock) && empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%' and category_id = $category";
    } 

    if (empty($category) && !empty($stock) && empty($price)){
        $sql = "select * from product where stock_quantity >= $stock and stock_quantity <= $stock2";
    } 
    
    if (empty($category) && empty($stock) && !empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%' and (price >= $price and price <= $price2)";
    } 

    if (empty($category) && empty($stock) && empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%'";
    } 

    if (!empty($category) && !empty($stock) && empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%' and category_id = $category and (stock_quantity >= $stock and stock_quantity <= $stock2)";
    } 

    if (!empty($category) && empty($stock) && !empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%' and category_id = $category and (price >= $price and price <= $price2)";
    } 

    if (empty($category) && !empty($stock) && !empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%' and (stock_quantity >= $stock and stock_quantity <= $stock2) and (price >= $price and price <= $price2)";
    } 

    if (!empty($category) && !empty($stock) && !empty($price)){
        $sql = "select * from product where product_name LIKE '%".$name."%' and category_id LIKE '%".$category."%' 
        and (stock_quantity >= $stock and stock_quantity <= $stock2) and (price >= $price and price <= $price2)";       
    } 
    
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

if (isset($_POST['edit'])) {
    
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;

    $product_id=$_POST['product_id'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $category=$_POST['category'];

    if (empty($filename)){
        $sql = "update product set product_name='$name', description='$description', price='$price', stock_quantity='$stock', category_id='$category' where product_id=$product_id";
    } else {
        $sql = "update product set product_name='$name', product_image='$filename', description='$description', price='$price', stock_quantity='$stock', category_id='$category' where product_id=$product_id";
    }

    $query = mysqli_query($con,$sql);
    move_uploaded_file($tempname, $folder);

    if ($query){
        mysqli_close($con);
        header('Location: product.php'); 
        exit;
    }
    
}

?>