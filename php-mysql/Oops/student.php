
<?php

include 'config.php';
class Student {
   public $DBconn;
   function __construct($conn) {
       $this->DBconn=$conn;
   }

   function getData (){
    $getStudents=$this->DBconn->prepare("SELECT * FROM students");
    $getStudents->execute();
    $result = $getStudents->fetchAll();

    echo "<pre>";
    print_r($result);
    echo "</pre>";
   }

   function insertData(){
    $sqlQuery= "insert into students (`name`, `email`, `age`, `gender`) value ('John Doe', 'john@example', '20', 'male')";
    $student=$this->DBconn->prepare($sqlQuery);
     $result = $student->execute();
    if($result){
        echo "Data inserted successfully";
    } else {
        echo "Data not inserted";
    }
   }

   function updateData(){
    $sqlQuery = "update students set name = 'rohit ',
    email= 'rohit3453@gmail.com', age = 34, gender='male' where  id=15";
    $student = $this->DBconn->prepare($sqlQuery);
    $result = $student->execute();
    if($result){
        echo "Data updated successfully";
    } else {
        echo "Data not updated";
    }
   }

    function deleteData(){
        $sqlQuery = "delete from students where id= 15";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if($result){
            echo "Data deleted successfully";
        } else {
            echo "Data not deleted";
        }
    }


      function InsertDataWithOpps($request){
    // print_r($request);
    $name=$request['name'];
    $email=$request['email'];
    $age=$request['age'];
    $gender=$request['gender'];
    $sqlQuery = "insert into students (`name`, `email`, `age`, `gender`) values ('$name',
    email= '$email', age = $age, gender=' $gender' )";
    $student = $this->DBconn->prepare($sqlQuery);
    $result = $student->execute();
    if($result){
        echo "Data updated successfully";
    } else {
        echo "Data not updated";
    }
   }

   function updateDataWithOops($request){
    $name=$request['name'];
    $email=$request['email'];
    $age=$request['age'];
    $gender=$request['gender'];
       $sqlQuery = "UPDATE students 
     SET name = '$name', 
    email = '$email', 
    age = $age, 
    gender = '$gender'
    WHERE id = $id;
";
    $student = $this->DBconn->prepare($sqlQuery);
    $result = $student->execute(); 
    if($result){
        echo "Data updated successfully";
    } else {
        echo "Data not updated";
    }
   }


     function deleteDataWithOops($request){
           $name=$request['name'];
    $email=$request['email'];
    $age=$request['age'];
    $gender=$request['gender'];
        // Corrected SQL for deleting a student by id (assuming 'id' is provided in $request)
        $id = $request['id'];
        $sqlQuery = "DELETE FROM students WHERE id = $id";
        $student = $this->DBconn->prepare($sqlQuery);
        $result = $student->execute();
        if($result){
            echo "Data deleted successfully";
        } else {
            echo "Data not deleted";
        }
    }




}



$student = new Student($conn);
// $student->getData();
// $student->insertData();
// $student->updateData();
// $student->deleteData();


if(isset($_POST['name'])){
    $student->updateDataWithOops($_POST);

}




?>