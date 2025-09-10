<?php

class Teachers {
    private function questionsPaper(){
        return "important";
    }

    public function exam(){
        if( $this->questionsPaper()=="important"){
            echo "do something ";
        } else {
            echo "do else ";
        }
    }

    protected function studentsMarks (){
        echo "all students marks ";
    }
}
 
class Management extends Teachers{
    function reviewExams(){
        $this->studentsMarks();
    }
}


$t1 = new Teachers();

$m1 = new Management();


echo $m1->reviewExams();


 

?>