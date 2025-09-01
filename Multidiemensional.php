<?php

// multidimensional arrays (numeric for easy looping)
$user = [
    [1, 'anil', 'noida', 'anil@gmail.com'],
    [2, 'sunny', 'delhi', 'sunny@gmail.com'],
    [3, 'rahul', 'bangalore', 'rahul@gmail.com']
];

for ($i = 0; $i < count($user); $i++) {
    for ($j = 0; $j < count($user[$i]); $j++) {
        echo $user[$i][$j] . "<br/>";
    }
    echo "<hr/>"; // separator between users
}

?>
