<?php

// mysqli_connect('host', 'database username', 'db password', 'database name');

$conn = mysqli_connect('localhost', 'root', '', 'php_training');

if($conn->connect_errno > 0){
    die('Database Connection error');
}

// $array = array('abc'=>"bcd", 'efg'=>'ggf');

// echo "<pre>";
// print_r($conn);
// echo "</pre>";
// echo $conn->connect_errno;

// echo "<pre>";
// print_r($array);
// echo "</pre>";
// echo $array['abc'];



?>