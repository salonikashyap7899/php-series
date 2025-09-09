<?php


// $user = ["name"=>"anil", "email"=>"anil@example.com","age"=>25, "city"=>"delhi"];
// $userJSON = json_encode($user);
// echo $userJSON;

$data = '{"name"=>"anil", "email"=>"anil@example.com","age"=>25, "city"=>"delhi"}';
 $dataArray = json_decode($data ,true);
print_r($dataArray);

?>