<?php

// function fruit (string | array $name){
//     echo $name ;
// }


// fruit(["Apple"]);



 
class fruit {
    function getName (string  | array $name){
        echo $name ;
    }
}

$f1 = new fruit() ;
$f1 -> getName(["Apple"]) ;


?>