
<?php
// you can write PHP logic here if needed
$users= [
    [1,'anu', 'anu@example.com'],
    [2,'sona', 'sona@example.com'],
    [3,'john', 'john@example.com'],
    [4,'jane', 'jane@example.com'],
    [5,'doe', 'doe@example.com'],
];


echo "<table border='1'>";
for($i=0; $i<count($users); $i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]); $j++){
        echo "<td>";
        echo  $users[$i][$j] ;
        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";



?>