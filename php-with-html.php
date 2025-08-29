<?php
$h2_color = "green";
echo "<h1 style='color:blue'>Welcome to My Website</h1>";
echo "<p>This is a simple PHP script embedded in HTML.</p>";


?>

<?php
 $name = "anil";
 echo "<h2 style='color:green'>Hello, $name!</h2>";
?>


<h1 style="color:red">my name is <?php echo $name; ?></h1>
<!-- 
<h2 style='color: <?php echo $h2_color; ?>'><?php echo "this is h2 tage" ?></h2> -->
<!-- <h2 style='color: <?php echo $h2_color; ?>'><?php echo $name ?></h2> -->
<h2 style='color: <?php echo $h2_color; ?>'>my name is <?php echo $name; ?></h2>
