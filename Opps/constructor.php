<?php


class Constructor{
       

 function __construct($name){
        echo "this is constructor";

        $this->name=$name;
    
}

function displayName(){
    echo $this->name;
}

}


$cd = new Constructor("john");
$cd->displayName();






?>