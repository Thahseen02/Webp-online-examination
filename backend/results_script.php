<?php
require 'connect.php';

$query="SELECT * FROM questions";
$result= mysqli_query($link, $query);

$correct=0;
echo "QID     Correct Answer   Marked Answer";
while($row = mysqli_fetch_array($result))
{
    $qid=$row[0]-1;
    
    if(isset($_POST["$qid"]))
    {
        $coption=$_POST["$qid"];
        if($coption == $row[2])
        {
           $correct = $correct +1;          
        }
        echo $row[0]."    ".$row[2]."     ".$coption;
    }
    else
    {
     echo $row[0]."    ".$row[2]."     "."Unattempted";   
    }
    
}

echo $correct;
?>