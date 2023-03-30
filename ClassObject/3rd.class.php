<?php

abstract class Car{
    public $name;
    abstract public function color();
    abstract public function run();

    public function setName(){

    }
}

class Toyota extends car{
    public function color(){
       
    }

    public function run(){
        
    }
}


$object = new Toyota();

print_r($object->setnAME);



?>