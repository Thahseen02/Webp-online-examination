<?php

require 'connect.php';
if(!isset($_SESSION['id'])){
    $email= mysqli_real_escape_string($link,$_POST['email']);
    $password= mysqli_real_escape_string($link,$_POST['password']);

    $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result= mysqli_query($link, $sql);
    if($result){
            $row=mysqli_fetch_array($result);
            $_SESSION['id']=$row['id'];
            header("location: ../Instruction.html"); 
        }
        else{
            $error=mysqli_error($link);
            header("location: ../index.php?error={$error}");
        }
}
else{
    header("location: ../Instruction.html");
}
?>

