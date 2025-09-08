<?php
include 'config.php';

// Example: delete student with ID = 2

$student = $conn->prepare("select * from students ");


echo $student->execute();

$result = $student->fetchAll();


echo "<table border='1'>";

foreach($result as $students){
    echo "<tr>

     <td>". $students['name']. "</td>
     <td>". $students['email']. "</td>
     <td>". $students['age']. "</td>
     <td>". $students['gender']. "</td>
     <td><form method='post'><button name=delete
      value=".$students['id']." >Delete</button></form></td>
    
    </tr>";
}

echo "</table>";

if(isset($_POST['delete'])){
    $id=$_POST['delete'];
$student = $conn->prepare("delete from students where id=$id");
 $student->execute();
} if($student){
    echo "Record deleted successfully";

} else {
    echo "record not deleted";
}



?>
