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


for($user=0; $user<count($users); $user++){
   echo "<h1 style='color:blue'>".$users[$user]."</h1>";
   echo "<br/>";
}
 
 

// foreach loop
 
foreach($users as $user){
    echo "<h1 style='color:blue'>".$user."</h1>";
    echo "<br/>";
}

 
 
 
 
 
 ?>