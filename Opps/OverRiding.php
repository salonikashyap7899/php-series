<?php

// methods overRiding 
class Teacher {
    public $city="delhi";
    function nextExam(){
        echo "next exam is the maths ";
    }

    function age (){
        echo " my age is 30";
    }
}

class Student extends Teacher{
    public $city = "noida";
    function age (){
        echo "my age is 10";
    
    }

}

$st1 = new Student();
$st1->nextExam();

echo $st1->$city;



?>