<?php
require 'connect.php';

$query="SELECT * FROM questions";
$result= mysqli_query($link, $query);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_array($result))
    {
        echo "{
      question:'".$row[1]."',
      answers: {";
      $query2="SELECT * FROM answers WHERE qid='$row[0]'";
      $result2= mysqli_query($link, $query2);
       while($row2 = mysqli_fetch_array($result2))
       {
           echo $row2[1].":'".$row2[2]."',";
       }
      echo "},";
      echo "correctAnswer: '".$row[2]."'";
      echo "},";
    }
}