<?php

class User{
    private function getName($name){
        echo $name;
    }
    function __call($method, $args){
      
        // print_r($args);
        if($method_exsits($this, $method)){
            // echo "this is a private method";
            call_user_func_array([$this, $method], $args);
        } else {
          echo " $method methods not found";
        }
    }
}


$user = new User();
$user->getName("anil", "sidhu");


?>