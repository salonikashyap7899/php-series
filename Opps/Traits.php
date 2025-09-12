 <?php
 trait parentCompany1{
    function getTotalEmp(){
        echo "1000";
    }
 }
 trait parentCompany2{
    function getTotalOffice(){
        echo "5000";
    }
 }

class company{
    use parentCompany1;
    use parentCompany2;
}

$cmp = new company();
$cmp->getTotalEmp();
echo "<br>";
$cmp->getTotalOffice();
 
 
 ?>