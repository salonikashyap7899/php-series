<?php

// $name = "john";

// function getName (){
//     // $name = "anil";
//     global $name;
//     $name = "anil";
//     echo $name;
// }



// getName();
// echo "<br/>";
// echo $name;


$name = "john";

function test(){
    $name = "peter";
    echo $name;
    function innerTest(){
       $name = "inner";
        echo $name;
    }
}

test(); 
 echo "<br/>";
 innerTest();
 echo $name;

?>