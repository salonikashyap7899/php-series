 <?php
 
//  indexed arrays 

$users =['peter', 'aayu', 'shiva', 'riya'];
// echo $users[0];
// ECHO "<br/>";
// echo $users[1];
// ECHO "<br/>";
// echo $users[2];
// ECHO "<br/>";
// echo $users[3];


// for($user=0; $user<count($users); $user++){
//    echo "<h1 style='color:blue'>".$users[$user]."</h1>";
//    echo "<br/>";
// }
 
 

// foreach loop
 
foreach($users as $user){
    if($user == "aayu"){
        continue;
    }
    echo "<h1 style='color:blue'>".$user."</h1>";
    echo "<br/>";
    // if($user=="shiva"){
    //     continue;
    // }
}


foreach( $users as $x){
    echo $x;
    echo "<br/>";
endforeach;
}


print_r($_COOKIE);
 ?>