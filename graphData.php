<?php
$con = mysqli_connect("localhost", "root", "", "can302");

$sql = "SELECT DATE_FORMAT(ordered_at, '%Y-%m') as month, COUNT(*) as order_count FROM `Order` GROUP BY month ORDER BY month ASC";
$result = mysqli_query($con,$sql);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);
echo json_encode($data);
?>