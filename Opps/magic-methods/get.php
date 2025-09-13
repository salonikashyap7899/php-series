<?php


class User {
   public  $name = "sona";
   private $age = 30;
   function  __get($preperty){
    echo " $preperty this is magic metho";

   }

}

$user = new User();
echo $user->nama;
echo $user->age;

?>