<?php

include('connection.php');


$stmt = $conn->prepare("SELECT * FROM products WHERE product_category='CONCERT' LIMIT 4");

$stmt->execute();


$coats_products = $stmt->get_result();//[]





?>