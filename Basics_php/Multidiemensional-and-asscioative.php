<?php

// 

$users=[
    ["name"=>"anil", "age"=>"20", "city"=>"noida"],
    ["name"=>"sunil", "age"=>"25", "city"=>"delhi"],
    ["name"=>"raj", "age"=>"30", "city"=>"mumbai"]
];


echo "<table border='1'>";
foreach ($users as $user) {
      echo "<tr>";
    foreach($user as $key=>$item){
            echo "<td>";
         echo "$key  is $item";
              echo "</td>";
            echo "<br/>";
    }
      echo "</tr>";
 
}

echo "</table>";









?>