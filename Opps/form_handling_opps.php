
<?php

if(isset($_POST['user'])){
   class User {
    function getName($name){
        echo "user name is : " .$name ;
    }
   }
$user = new User();
$user -> getName($_POST['user']);

} 
?>


<form action="" method="post">
  
<input type="text" name="user" placeholder="Enter your user">
<br/>
<br/>
<button>Sumbit</button>
</form>