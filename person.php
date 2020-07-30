<?php
class Person {
    public $name = "Jason";
    public $dob = "1980-03-12";

    //constructor
    //every time you new the object, will call this function
    public function __construct($name){
        $this->name = $name;
        echo "I'm alive";
    }


    public function walk(){
        echo "walking...";
    }
    public function greet(){

        echo "Hello everyone, my name is ".$this->name;
    }

    //destructor
    //everytime this obejct been destroyed, will call this function
    public function __destruct(){
        echo "I'm dying...<br/>";
    }
}

?>