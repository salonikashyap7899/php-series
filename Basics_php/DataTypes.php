<?php
// Strings
$name = "anil sidhu";
// check whats the type of data type
echo var_dump($name);

// array
$arr = ['anil ', 'aon'];
echo var_dump($arr);

?>




<?php
//  integer /\
$num = 10;
echo var_dump($num);

// float 
$float_num = 10.5;
echo var_dump($float_num);

// boolean 
$is_active = true;
echo var_dump($is_active);


// null 
$null_var = null;
echo var_dump($null_var);




// object
$person = new stdClass();
$person->name = "John";
$person->age = 30;
echo var_dump($person);

// Resource
$resource = fopen("test.txt", "w");
echo var_dump($resource);


?>