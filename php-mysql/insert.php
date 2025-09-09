<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Your Name" required>
    <br/><br/>
    <input type="email" name="email" placeholder="Enter Your Email" required>
    <br/><br/>
    <input type="text" name="age" placeholder="Enter Your Age" required>
    <br/><br/>
    <input type="radio" name="gender" value="male" required> Male
    <input type="radio" name="gender" value="female"> Female
    <br/><br/>
    <button type="submit" name="submit">Add new student</button>
</form>

<?php
include('./config.php');

if(isset($_POST['submit'])){
    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];

    // ✅ Use placeholders (safe against SQL Injection)
    $student = $conn->prepare("INSERT INTO students (name, age, email, gender) 
                               VALUES (:name, :age, :email, :gender)");

    $result = $student->execute([
        ':name'   => $name,
        ':age'    => $age,
        ':email'  => $email,
        ':gender' => $gender
    ]);

    if($result){
        echo "✅ Data Inserted Successfully"; 
    } else {
        echo "❌ Data Not Inserted";
    }
}
?>
