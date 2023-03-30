<?php
class Common{
    public $name;

    public function setName($value){
        $this->name = $value;
    }
}
class Users extends Common{
    
}

$object = new Users();
$object->setName('hari');
print_r($object);



?>
