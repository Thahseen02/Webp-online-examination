<?php
$user='root';
$pass='@deeb.1491';
$db='exam_portal';
$link= mysqli_connect('localhost', $user, $pass, $db);

        
if(!$link){
    die("Portal Connection Error:".mysqli_error($link));
}
else{
   session_start();
}

?>