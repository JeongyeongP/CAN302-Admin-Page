<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//open database by mysqli
$con = mysqli_connect("localhost", "root", "", "supermarket");

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

// query the data from database
/*if (!isset($_POST['submit_search'])) {

    $sql = 'SELECT * FROM `user` WHERE ';
    
    if(!empty($_POST['user_id'])) {
        $sql .= ' user_id = ? AND ';
        $params[] = $_POST['user_id'];
    }

    if(!empty($_POST['user_email'])) {
        $sql .= ' user_email = ? AND ';
        $params[] = $_POST['user_email'];
    }

    if(!empty($_POST['created_at'])) {
        $sql .= ' created_at = ? AND ';
        $params[] = $_POST['created_at'];
    }

    $sql = rtrim($sql, 'AND ');
    $query = mysqli_query($con,$sql);
}

else {
    $sql = "SELECT * FROM `user`";
    $query = mysqli_query($con,$sql);
}*/

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

?>