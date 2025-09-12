<?php


class Company {
    function  getName(){
        echo "this is hnda motor company . " ;
        return $this ;
    } 
    function getEmp(){
        echo "this is honda motor company employee . " ;
        return $this ;
    }
    function getTotalOffice(){
        echo "this is honda motor company office . " ;

    }
}

$company = new Company() ;
$company -> getName()->getEmp()->getTotalOffice() ;









?>