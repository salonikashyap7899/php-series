<?php


class UserAuth{
    function login($userType){
        echo "$userType  login in";
    }
}

class student extends UserAuth{
     function getName(){
        echo "sona";
     } 
}


class teacher extends UserAuth{
     function getSkill(){
        echo "DSA";
     }
   
 
}



$sl=new student();
$sl->login("student");
echo "<br>";
$sl->getName();

echo "<br>";

$tl=new teacher();
$tl->login("teacher");




?>