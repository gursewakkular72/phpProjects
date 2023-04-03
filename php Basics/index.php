<?php

// arrays 
$names =array('abc', 'cde', 'efg', 'ghi'); 

$names = array('alex'=>1, 'bianca'=>2, 'cat'=> 3);

//  print_r($names['cat']); 
  
//  multi-dimensional Arrays 
$mdArray = array('name1'=> 'james', 'name2' => 'Jordan', 
'mdArray2'=> array(1=>'one', 2=>'two', 
'mdArray3'=> array(
    1,2,3
)));

// print_r($mdArray['mdArray2']['mdArray3'][0]); 

/// for Each loops 

$name2 = ['Jonas', 'martha', 'Hannah', 'Claudia']; 
// foreach($name2 as $key => $values) {
//     echo $key. '  '. $values; 
// }
// ini_set ('display_errors', 'on'); 

// try {
  
//     $db = new PDO('mysql:host=127.0.0.1;dbname:users', 'root', ''); 
// }catch(PDOException $e) {
//     die($e->getMessage()); 
// }

function func1() {
   
    print_r(func_get_args()); 
    return 'false'; 
}

echo func1(1,2,3);



?>