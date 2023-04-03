<?php

if(isset($_GET['name'])) {
    $ab = $_GET['name'] ; 
    echo $ab ; 
}
else {
    echo 'no argument passed'; 
}

// echo $GLOBALS[$_GET]; 

?>