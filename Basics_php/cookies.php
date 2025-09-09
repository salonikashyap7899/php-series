<?php

$fruit = "apple";

setcookie("fruit", "apple", time() + (86400));
setcookie("colors", "black", time() + (86400));


if(isset($_COOKIE['fruit'])){
  echo "current cookie is " .$_COOKIE['fruit'];
} else {
    echo "no cookie set";
}

echo "<br>";

if(isset($_COOKIE['colors'])){
  echo "current cookie is " .$_COOKIE['colors'];
} else {
    echo "no cookie set";
}







?>