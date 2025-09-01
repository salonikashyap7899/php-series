<?php


$users = ['Alice', 'Bob', 'Charlie', 'David'];



array_push($users, 'Eve', 'jiya'); // Add 'Eve' to the end of the array
array_unshift($users, 'Zara'); // Add 'Zara' to the beginning of the array
array_pop($users); // Remove the last element ('Eve')
array_shift($users); // Remove the first element ('Zara')
array_splice($users, 1, 1); // Remove one element starting from index 1
array_push($users, 'Eve'); // Add 'Eve' to the end of the array

foreach ($users as $user) {
    echo "Hello, $user!<br>";
}

?>