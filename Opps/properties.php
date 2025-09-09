<?php

class Properties{
//    public, private, protected

   public $name = 'john';
    function getName(){
        echo $this->name;
    }

    function updateName(){
        $this->name = 'doe';
    }



}

$p1 = new Properties();


// echo $p1->name;

$p1->updateName();
 $p1->getName();



?>