<?php

$cars = array('toyota', 'volvo', 'suzuki');

for($i=0; $i < count($cars); $i++){
    echo $cars[$i].'<br>';
  }

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$mutidimensionArray = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );


  foreach($mutidimensionArray as $key=>$value){
    echo $key.'<br>';
    print_r($value);
  }
  




foreach($age as $key=>$value){
    echo $key."<br>";
    echo $value."<br>";
}

foreach($cars as $key=>$car){
    if($car == "volvo22"){
        echo $car;
    }else{
        echo "no car was found!";
    }
}







?> 
