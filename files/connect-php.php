<?php

$host= "localhost";
$username = "root";
$password = "";
$database = "collage";


$conn = new mysqli($host, $username, $password, $database);

if($conn->connect_error){
    die ("some error" .$conn->$connect_error);
} 


echo "connected successfully";
echo "<br>";

$result = $conn->query("show tables ")->fetch_all();
print_r($result);

?>