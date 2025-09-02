<!DOCTYPE html>
<html lang="en">
<head>

    <title>button click funtion</title>
</head>
<body>
    <form action="">
        <button name="button" value="btn1" >Call function</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['button'])){
   btnClick();  
}


 function btnClick (){
        echo "button clicked";
    }



?>

