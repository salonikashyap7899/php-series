<?php



if(isset($_FILES['file'])){
    $file = $_FILES['file']['tmp_name'];
$myFile = fopen($file, "r") or die ("unable to read file ");
echo fread($myFile, filesize($file));
fclose($myFile);

} 


?>


<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="file">
<br/>
<br/>
<button>Read file </button>
</form>
