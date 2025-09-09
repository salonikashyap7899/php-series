<form action="" method="post">
    <input type="text" name="search"  placeholder="Search...">
    <br><br/>
    <button>Search </button>
</form>

<?php

include 'config.php';

if(isset($_POST['search'])){
    $search=$_POST['search'];
    $student=$conn->prepare("select * from students where name = '$search'");
    $student->execute();
    $result = $student->fetchAll();

 echo "<table border='1' cellpadding='8' cellspacing='0'>";

# Table Heading
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Gender</th>";

echo "</tr>";

# Table Rows
foreach ($result as $student) {
    echo "<tr>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['email'] . "</td>";
    echo "<td>" . $student['gender'] . "</td>";
    echo "<td><form method='post'><button name='delete' value='" . $student['id'] . "'>Delete</button></form></td>";
    echo "<td><a href='update.php?id=" . $student['id'] . "'>Edit</a></td>";
    echo "</tr>";
}

echo "</table>";

}

?>