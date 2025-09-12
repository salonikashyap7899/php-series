<?php





include 'teacher.php';
include 'student.php';

$st1 =  new  teacher\JoiningDetails();
$st1->joiningDate();






echo "<br>";

$st2 =  new  student\JoiningDetails();
$st2->admisionDate();

?>