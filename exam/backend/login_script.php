<?php

require 'connect.php';
if(!isset($_SESSION['id'])){
    if (empty($_POST['email']) || empty($_POST['password'])) {
         echo "<script>alert('Please fill all fields');
             window.location.href = '../Index.php';
             </script>";       
    }
    else
    {
    $email= mysqli_real_escape_string($link,$_POST['email']);
    $password= mysqli_real_escape_string($link,$_POST['password']);
    
    $sql="SELECT * FROM users WHERE email='$email'"; 
    $result= mysqli_query($link, $sql);
    $rowcount=mysqli_num_rows($result); 
        if($rowcount > 0){ 
            $row=mysqli_fetch_array($result);
            if($row['password']==$password)
            {
               session_start(); 
            $_SESSION['id']=$row['id'];
            $_SESSION['name']=$row['name'];
             $_SESSION['email']=$row['email'];
            header("location: ../Instruction.php"); 
        }
        else
        {
            echo "<script>alert('Wrong password');
             window.location.href = '../Index.php';
             </script>"; 
        }}
        else{
            echo "<script>alert('Not valid user');
             window.location.href = '../Index.php';
             </script>"; 
        }
}}
else
{ 
     header("location: ../Instruction.php"); 
}

?>

