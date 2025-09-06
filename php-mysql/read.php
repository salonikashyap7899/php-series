<?php

include('./config.php');


$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents->execute();
$students = $getStudents->fetchAll();

echo "<table border='1' cellpadding='8' cellspacing='0'>";

# Table Heading
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Gender</th>";
echo "</tr>";

# Table Rows
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['email'] . "</td>";
    echo "<td>" . $student['gender'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>
