<?php
// functions

// parameters fucntions
function add($a, $b) {
    echo $a + $b;
}

add(2 ,4);
function dummy (){
    echo "<h1>User details</h1>";

}


echo "<br/>";
function userDetails (){
    dummy();
    echo "Name: John Doe";
    echo "<br/>";
    echo  "Age: 10";
    echo "<br/>";
    echo "Add: Delhi";
    echo "<br/>";
    echo "Email: john@example.com";
}


userDetails();



// function userData ($name, $color){
//     echo "<br/>";
//     echo "<h1 style='color:$color'>$name</h1>";

// }

// userData("John", "red");



function userName (){
    return "John Doe";
}

echo "<h1>my name is " . userName() . "</h1>";

echo "<br/>";

// functions with default parameters

function user ($name = "John Doe"){
    return $name;
}

user();

// function fruit ($name, $color){
//     echo "this is $name and it's color is $color";
// }

// fruit("Apple", "Red");


function displayUser($name, $color="red"){
    echo "<h1 style='color:$color'>$name</h1>";
}

displayUser("John", "blue");

?>