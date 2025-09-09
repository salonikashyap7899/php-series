<?php
 

 class MathOpertations{

    function sum($a, $b){
        return $a+$b;
    }

    function multi($a,$b){
        return  $a*$b;
    }
    function sub($a,$b){
        return  $a-$b;
    }
 }



$maths=new MathOpertations();

echo $maths->sum(3,4);
echo "<br>";
echo $maths->multi(3,4);
echo "<br>";
echo $maths->sub(3,4);
echo "<br>";





?> 