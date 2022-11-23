<?php
$role = 'subscribe';
$message ='';

if('admin' === $rolr ){
    $message = 'Welcome, Admin';
}elseif('author' === $role){
    $message = 'Welcome, Author';
}elseif('author' === $role){
     $message = 'Welcome, Subscribe';
}else{
    $message = 'Sorry';
}
   print($message);
    
?>