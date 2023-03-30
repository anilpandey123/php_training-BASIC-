<?php
class Users{
    public $id, $name, $phone;
    public function __construct($idd, $value, $phoneno){
        $this->name = $value;
        $this->id = $idd;
        $this->phone = $phoneno;
    }
    private function insert(){
    }
}
$object = new Users('1','hari','08989787');
print_r($object);





?>
