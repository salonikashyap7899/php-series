<?php
// for  loops
// $table  = 20;
// for($start = 1; $start <=10 ; $start++){
//     echo $table * $start . "<br/>";
// }


// brean and continue loops


// break
// for($i=0; $i<=10;i++){
//     echo $i;
//     echo "<br/>";
//     if($i == 4){
//         break;
//     }
// }

// continue

// for($i=0;i<=10;i++){
//     if($i == 4 && $i == 8){
//         continue;
//     }
//     echo $i;
//     echo "<br/>";
// }


// nested loops
// for($i=1;$i<=3;$i++){
//    for($j=1;$j<=3;$j++){
//        echo "Outer loop: $i, Inner loop: $j";
//        echo "<br/>";
//    }
// }


// while loops

// $num = 0;
// while ($num <= 10){
//     echo $num;
//     echo "<br/>";
//     $num++;
// }



// do while loops

$num = 10;
do{
     echo "current loop value is   $num";
     echo "<br/>";
        $num--;
} while ($num > 0);

?>