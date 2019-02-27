<?php

require 'connect.php';
if(!isset($_SESSION['id']))
{
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $college=$_POST['college'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="SELECT * FROM users WHERE email='$email'";
    $result= mysqli_query($link, $sql);
    if(mysqli_num_rows($result)==0)
    {
        $sql="INSERT INTO users(name,gender,college,mobile,email,password) VALUES('$name','$gender','$college','$mobile','$email','$password')";
        $result= mysqli_query($link, $sql);
        if($result){
            $row=mysqli_fetch_array($result);
            $_SESSION['id']=$row['id'];
            header("location: ../Instruction.php"); 
        }
        else{
            $error=mysqli_error($link);
            header("location: ../Registration.php?error={$error}");
        }
    }
    else
    {
        header("location: ../Registration.php?email=1");
    }
   
}
else{
    header("location: ../Instruction.php");
}
?>