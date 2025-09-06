<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Your Name">
    <br/>
    <br/>
    <input type="email" name="email" placeholder="Enter Your Email">
    <br/>
    <br/>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
     <br/>
    <br/>
    <button type="submit">Add new student</button>
</form>





<?php

if(isset($_POST['name'])){
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];

include('./config.php');
$student=$conn->prepare("INSERT INTO 
`students` (`name`, `email`, `gender`)
VALUES('$name', '$email', '$gender');
");

$result= $student->execute();
if($result){
    echo "Data Inserted Successfully"; 
} else {
    echo "Data Not Inserted";
}

}

?>