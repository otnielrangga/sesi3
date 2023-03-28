<?php  
    $cars = array("volvo","BMW","Toyota");

    $cars[0] = "volvo";
    $cars[2] = "BMW";
    $cars[3] = "Toyota";

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($cars);

    print_r($cars);
