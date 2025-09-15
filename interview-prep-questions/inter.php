<?php

// asscotiave array

// $array = array(20=>'apple', 1=>"a", "1" => "b", true=>"d", 0=>"e");

// echo $array[false];



// $a = null;
// $b;
// $c="";

// check value and data type output : false
// var_dump(10==='10');
// check value  output:true
// var_dump(10=='10');


// ouput: true becuz wihout assign value of also a null varibale 
// var_dump($a === $b);

// 
// var_dump($a == $c );
// var_dump($a === $c );



// $num = [1,2,40,50,50,30];
// // echo count($num);

// $count = 0;
// foreach($num as $item){
//     $count++;
// }

// echo $count;




// nested function
// function apple(){
//     function banna(){
//         return "bannea";
//     }
//     echo banna();
//     return "aaple";

// }
// echo $banna();
// echo apple();



// call function as parameter 

// function Callme(){
//     echo "function call me ";
// }
// function Callme2(){
//     echo "function 2 call me ";
// }

// function apple($data){
//    $data;
// }

// if(true){
//     apple('call me') ;

// } else {
//     apple('callme2');
// }


// apple('callme');


// $diif = NULL;

// $var1 = 0;
// $var1 = 0.0;
// $var1 = "0";
// $var1 = false;
// $var1 = array();
// $var1 = "";

// if(isset($diff)){
//     echo "if";
// } else {
//     echo "else";
// }

// // isset() vs empty()

// if(empty($diff)){
//     echo "if";
// } else {
//     echo "false";
// }


// var_dump(20.100>20.1);


// true
// var_dump("1" == " 1");
// // false
// var_dump("1" === " 1");
// // true
// var_dump(1==1);


// swap value without using third variable 
// $a=20;
// $b=10;

// $b= $a+$b;
// $a = $b-$a;


// $b=$b-$a;

// echo $a;
// echo "<br>";
// echo $b;


// class MathTest {
//     public $total = 20;
//     public static $count = 100;
// }

// $obj = new MathTest();

// echo $obj->total;

// echo MathTest::$count;
  


// $name = "anil";
// $$name = "you tube";

// echo " $name is running s $anil";



// class outerClass{
//     public function createTinnerClass(){
//         return new class {

//         }
//     }
// }


class Person{
    public function __construct(){
       echo "hello";
    }
}

$person1 = new Person


?>