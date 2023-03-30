<?php

include("../database/connection.php");

$id = $_GET['id'];

$sql = "delete from students where id='$id'";

$var = $conn->query($sql);

if($var){
    session_start();
    $_SESSION['message']="Student deleted Successfully!";
    header('location:dashboard.php');
}

?>