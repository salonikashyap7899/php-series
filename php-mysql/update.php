<?php  
include 'config.php';  

if(isset($_GET['id'])){  
    $id = $_GET['id'];  

    $getStudent = $conn->prepare("SELECT * FROM students WHERE id = :id");  
    $getStudent->bindParam(':id', $id, PDO::PARAM_INT);  
    $getStudent->execute();  

    $student = $getStudent->fetch(PDO::FETCH_ASSOC);  

    if ($student) {
        $name   = $student['name'];  
        $email  = $student['email'];  
        $age    = $student['age'];  
        $gender = $student['gender'];  
    }
}    
?>  

<form action="" method="post">  
    <input type="text" value="<?php echo $name ?? ''; ?>" name="name" />  
    <br><br/>  
    <input type="text" value="<?php echo $email ?? ''; ?>" name="email" />  
    <br><br/>  
    <input type="text" value="<?php echo $age ?? ''; ?>" name="age" />  
    <br><br/>  
    <button type="submit" name="update" value="<?php echo $id; ?>">Update student Data</button>  
</form>  

<?php  
if(isset($_POST['update'])){  
    $id    = $_POST['update'];  
    $name  = $_POST['name'];  
    $email = $_POST['email'];  
    $age   = $_POST['age'];  

    $updateStudent = $conn->prepare("UPDATE students SET name = :name, email = :email, age = :age WHERE id = :id");  
    $updateStudent->bindParam(':name', $name);  
    $updateStudent->bindParam(':email', $email);  
    $updateStudent->bindParam(':age', $age);  
    $updateStudent->bindParam(':id', $id, PDO::PARAM_INT);  
    $updateStudent->execute();  

    echo "Student updated successfully!";
}    
?>
