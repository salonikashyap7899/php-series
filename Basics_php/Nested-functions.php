<?php
// nested functions

function Outer (){
    echo "<h1>This is the outer functions</h1>";
    echo "<br/>";
    function inner(){
        echo "<h1>This is an inner function.</h1>";
    }
    inner();
}

Outer();

echo "<br/>";

//variable functions

function test (){
    echo "this is variable functions ";
}

$test = "test";


function main($test){
    $test();
}

// main($test);


// basic but important functions

// $str="this is important functions";
// echo strlen($str);

// echo "<br/>";

// $var = true;
// var_dump($var);


// echo "<br/>";

// echo date("d/m/Y");

// echo phpinfo();

// $var =234;
// echo is_string($var);


// $var = "abc";

// echo is_int($var);

// echo rand();


// echo "<br/>";

// echo "before";
// die();
// echo "after";

$str="code step by step ";

echo  substr($str, 1);


?>