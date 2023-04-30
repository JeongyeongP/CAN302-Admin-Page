<?php

    $con = mysqli_connect("localhost", "root", "", "can302");
    $sql = "select product.category_id, category.category_name, count(product.category_id) as num from product inner join category on product.category_id = category.category_id group by category_id;";
    $query = mysqli_query($con,$sql);

    $data = array();
    foreach ($query as $row) {
        $data[] = $row;
    }
    
    mysqli_close($con);
    echo json_encode($data);

?>
                                