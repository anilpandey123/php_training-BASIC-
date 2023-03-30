<?php
require_once "whilelloop.php";
include "function.php";
$color = "blue";

switch($color){
    case "red":
        echo "Red color!";
        break;
    case "blue":
        echo "blue color!";
        break;
    case "green":
        echo "green Color!";
        break;
    default:
        echo "no color was found!";
}


mesaage();



?>

