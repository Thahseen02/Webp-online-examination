<?php
$user='root';
$pass='';
$db='exam_portal';
$link= mysqli_connect('localhost', $user, $pass, $db);

        
if(!$link){
    die("Portal Connection Error:".mysqli_error($link));
}
else{
   session_start();
}

?>