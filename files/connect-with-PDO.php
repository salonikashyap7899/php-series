<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "collage";


try {
    $conn = new PDO("mysql:host=$host;dbname=collage", $username, $password );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "connected successfully";
   echo "<br>";
} catch (PDOException $err) {
    echo "Connection failed: " . $e->getMessage();

}

echo "<br>";
$result = $conn->query("show tables");



while($row = $result->fetch(PDO::FETCH_ASSOC)){
    print_r($row);
    echo "<br>";
}

?>