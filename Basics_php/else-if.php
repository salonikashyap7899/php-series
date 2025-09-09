<?php

// else if statement

$age = 90;

if($age < 18){
    echo "Display kids content";
}else if($age >= 18 && $age < 60){
    echo "<h1 style= 'background-color: yellow;'>Display content for adults</h1>";
}else{
    echo "<h1 style= 'background-color: red;'>Display content for seniors</h1>";
}

echo "<br/>"


$country = 'UK';

if($country == 'India'){
    echo "<h1 style= 'background-color: green;'>Welcome to India</h1>";

}else if($country == 'USA'){
    echo "<h1 style= 'background-color: blue;'>Welcome to the USA</h1>";

}else if($country == 'UK'){
    echo "<h1 style= 'background-color: white;'>Welcome to the UK</h1>";
}


?>