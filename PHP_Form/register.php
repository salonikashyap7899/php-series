<?php

$_REQUEST['dummy'] = 'dummy';

if($_REQUEST){
  foreach($_REQUEST as $key=> $data){
    echo $key . " is " . $data;
    echo "<br>";
}
}

?>