<?php

// Associative arrays

$userDetails= ["name"=> "sona", "age"=> 25, "gender"=> "female", "email"=> "sona@example.com", "city"=>"delhi", "state"=> "UP"];

// echo $userDetails["name"];

// foreach($userDetails as $key=>$value){
//     echo "<h3 style='color:green'>".$key.": ".$value."</h3>";
//     echo "<br/>";
// }

foreach($userDetails as $key=>$x){
     echo $key . ": " . $x;
    echo "<br/>";
}
?>