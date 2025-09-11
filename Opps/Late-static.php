<?php

class CountrySale {
    static public $totalSale = 100;
    function getTotalSale(){
        echo static::$totalSale;
    }

    function getAreaName(){
        self::areaName(); 
    }

    static function areaName(){
        echo "india";
    }
    
}

class CitySale {
    static public $totalSale = 50;
    static function areaName (){
        echo "noida";
    }

}

$city = new CitySale();

$city->getTotalSale();


?>