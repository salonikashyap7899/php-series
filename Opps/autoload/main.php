<?php




function autoloader(){
    echo $class.'.php';
    include($class.'.php');
   
}
spl_autoload_register('autoloader');



$t1 = new teacher();







?>