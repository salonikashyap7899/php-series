<?php
$a = 5;
$a = (string) $a;
var_dump($a);

echo "<br/>";
$b = "300";
$b = (int) $b;
var_dump($b);
echo "<br/>";
$c= 2.3;
$c= (float) $c;
var_dump($c);

echo "<br/>";

$d = "hello";
$d = (boolean) $d;
var_dump($d);

echo "<br/>";

$e=10;
$e = (array) $e;
var_dump($e);

$f= 20;
$f = (object )$f;
var_dump($f);

$x= ["30"];
$x = (string) $x;
var_dump($x);

?>