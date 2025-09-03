<form action="" method="post">
  <input type="text" name="user" placeholder="Enter user name">
  <br/>
  <br/>
<button name="button" value="set">Set Cookie</button>
<br/>
<br/>
<button name="button" value="Display">Display Cookie</button>
<br/>
<br/>

<button name="button" value="delete">Delete Cookie</button>
</form>


<?php

if(isset($_POST['button'])){
if($_POST['button']=="set"){
    $val = $_POST['user'];
    setcookie("user", $val);
    echo "Cookie Set";

}

if($_POST['button']=='Display'){ 
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
        echo "cookie display";
    }
}

if($_POST['button']=='delete'){
    if(isset($_COOKIE['user'])){
        setcookie("user", "", time() - 3600);
        echo "Cookie Deleted";
    }
}
}

?>