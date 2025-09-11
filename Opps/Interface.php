<?php


interface Car{
        // public $country = "Bangladesh"; we can not declare property in interface
    function carName();
    function carModel();
    function carPrice();
} 


class Honds implements Car{

     function carName(){
        echo "Honds";
    }

     function carModel(){
        echo "2024";
    }

     function carPrice(){
        echo "50 Lakh";
    }
}

$honda = new Honds();

$honda->carName();
echo "<br>";
$honda->carModel();
echo "<br>";
$honda->carPrice();
// $honda->country();

?>