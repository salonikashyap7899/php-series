<?php


abstract class ProductFeatures {
   abstract function productDetals();
   abstract function productImages();
   abstract function productOwnerDetals();

   

}

class UploadProduct extends ProductFeatures  {
   function  productDetals (){
      echo "products details";
   }
   function  productImages (){
      echo "products imges";
   }

   function productOwnerDetals (){
      echo "products owner";
   }
}

$upload = new UploadProduct();

$upload->productDetals(); 
echo "<br>";
$upload->productImages();
echo "<br>";
$upload->productOwnerDetals();



?>