<?php

// we can not acces final class using inheritence

// final class Honds{

// }

// class Cars extends Honda{
      
   
// }

// $cars = new Cars();


class Honda {
 final function  companyName(){
    echo "Honda city";
  }
}


class Cars extends Honda{
     function  companyName1(){
    echo "Honda city";
  }

}

$car = new Cars();
$car->companyName();




?>