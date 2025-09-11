<?php
class Honds{
    static public $countryName = "Bangladesh";
    static  function companyName(){
        echo "Honds Pvt Ltd";
    }
}

Honds::companyName();
echo "<br>";
echo Honds::$countryName;

// $hona = new Honda();
// $hona->companyName();



?>