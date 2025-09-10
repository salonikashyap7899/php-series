<?php


class ConstantsDemo{
     protected const collegaName = "IET college";
     function getCollegeName(){
        echo self::collegaName;
        // echo ConstantsDemo::collegaName;

     } 
}

class child  extends ConstantsDemo{
   function getChild(){
         echo self::collegaName;
   }
}

// echo ConstantsDemo::collegaName;


$c1 = new  ConstantsDemo();
echo "<br>";
$c1->getCollegeName();



// $child = new child ();
// $child->getChild();







?>