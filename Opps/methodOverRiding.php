<?php
trait parentCompany1{
     function getEmp(){
        echo "500";

    }
 }
trait parentCompany2{
     function getEmp(){
        echo "300";

    }
 }

 class Company {
    use parentCompany1;
    use parentCompany2{
        parentCompany1::getEmp insteadof parentCompany2;
        parentCompany2::getEmp as getTotalEmp;
    }

 }

 $c1 = new Company();
    $c1->getEmp();
    echo "<br>";
    $c1->getTotalEmp();







?>