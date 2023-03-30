<?php

/*
  while(condition){
    code ececute
  }

*/


$x = 4;


$y = 15;

while($x <10){
    echo "the number is". $x."<br>";
    if($x ==  6){
        echo "number found!";
        break;
    }
    $x++;
}
echo "<br>";
do{
    echo "the number is". $y."<br>";
    $y++;
   }
while($y < 14)



?>
