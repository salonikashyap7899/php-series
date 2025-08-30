<?php
// String manipulation  in PHP
// $name = "sona";
// $age = 29
// echo "my name is $name";
// echo 'my name is ' . $name;


// echo 'my name is '. $name.' and my age is ' .$age; dot . operator

$str = "hello how are you ";
$str1 = "my name is saloni";
$str2 = $str1;
echo $str . $str1; // Concatenation of two strings


// Convert a string to uppercase
$name = "saloni ";
echo strtoupper($name); // Outputs: SALONI


// Convert a string to lowercase
$name = "SALONI";
echo strtolower($name); // Outputs: saloni

// Capitalize the first letter of a string
$name = "saloni";
echo ucfirst($name); // Outputs: Saloni

// Reverse a string
$name = "saloni";
echo strrev($name); // Outputs: inolas

// Get the length of a string
$name = "saloni";
echo strlen($name); // Outputs: 6

?>