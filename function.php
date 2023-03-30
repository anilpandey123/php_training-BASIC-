<?php

function message(){
    echo "hello World"."<br>";
}

message();

function userDetails($name, $age){
    echo "hello i am ". $name. " and i am ". $age .
    " years old"."<br>";
}
userDetails('ram', 25);
userDetails('hari', 24);
userDetails('shyam', 23);



?>