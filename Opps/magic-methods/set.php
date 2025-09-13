<?php

class User {
    private $name="anil";

  function __set($property, $value){
    if(property_exists($this, $property) ){
       $this->$property=$value;

    } else {
        echo "no";

    }
    // echo "$property property can not set with $value value";
  }  

  function getName (){
    echo $this->$name;
  }
    
}


$user = new User();
//  $user->name="sona";

 $user->getName();
 echo "<br>";
 $user->$name="anil sidhu";







?>