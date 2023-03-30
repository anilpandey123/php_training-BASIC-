<?php


include('../database/connection.php');

$name = $_POST['username'];

$sql = "SELECT * FROM `users` where username ='$name'";

$var = $conn->query($sql);

if($var->num_rows == 1){
   echo "Username Already Taken!";
}
?>