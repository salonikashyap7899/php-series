 <?php
 
 
 



 if(isset($_POST['username'])){
    echo "user name is : " .$_POST['username'];
    echo "<br>";
    echo "user email is : " .$_POST['email'];
    echo "<br>";
    echo "user password is : " .$_POST['password'];
    echo "<br>";
    echo "user skills are : " .implode(", ", $_POST['skills']);
    echo "<br>";
    echo "user gender is : " .$_POST['gender'];
    echo "<br>";
    echo "user city is : " .$_POST['city'];
    echo "<br>";
    echo "user bio is : " .$_POST['bio'];
    echo "<br>";
}

    ?>