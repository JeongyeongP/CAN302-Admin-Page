<?php

//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "can302");

//a safe method to receive post data
function mypost($str) {
    $val = !empty($_POST[$str]) ? $_POST[$str] : '';
    return $val;
}

$category = mypost('category');
$description =  mypost('description');

if (isset($_POST['add-category'])) {
    $sql = "INSERT INTO `category` (`category_id`, `category_name`, `description`) VALUES ('0', '$category', '$description')";
    $query = mysqli_query($con,$sql);
}

if (isset($_POST['search-category'])) {

    $sql = "";
    if (!empty($category) && !empty($description)){
        $sql = "select * from category where category_name LIKE '%".$category."%' and description LIKE '%".$description."%'";
    } else if (!empty($category) && empty($description)){
        $sql = "select * from category where category_name LIKE '%".$category."%'";
    }
    else if (empty($category) && !empty($description)){
        $sql = "select * from category where description LIKE '%".$description."%'";
    } else {
        $sql = "select * from category";
    }
   
    $query = mysqli_query($con,$sql);
}
else {
    $sql = "select * from category";
    $query = mysqli_query($con,$sql);
}


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM category WHERE category_id = $id"; 
    
    if (mysqli_query($con, $deleteQuery)) {
        mysqli_close($con);
        header('Location: category.php'); 
        exit;
    } 
}


if (isset($_POST['edit-category'])) {

    $category_id=$_POST['category_id'];
    $category=$_POST['category'];
    $description=$_POST['description'];

    $sql = "update category set category_name='$category', description='$description' where category_id=$category_id";
    $query = mysqli_query($con,$sql);

    if ($query){
        mysqli_close($con);
        header('Location: category.php'); 
        exit;
    }
    
}



?>