<?php
include 'config.php';

$getstudent = $conn->prepare("SELECT id, name FROM students");
$getstudent->execute();

// Fetch all rows
$studentData = $getstudent->fetchAll();

echo "<select>";
echo "<option>Select Student</option>";

foreach ($studentData as $student) {
    echo "<option value='".$student['id']."'>".$student['name']."</option>";
}

echo "</select>";
?>
