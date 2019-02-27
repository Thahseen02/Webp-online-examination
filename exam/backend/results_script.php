<?php 
require_once 'connect.php';
if(isset($_SESSION["id"]))
{echo"
<html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Online Examination Portal </title>
        <link  rel='stylesheet' href='../css/Instruction.css'/>
        <script type='text/javascript' src='js/Registration.js'>
            
            </script>
        </head>
            <body>
                 <div class='navbar'>
                         
         <div id='welcome' class='dashboard-item' ><a href='#'>Welcome ".$_SESSION['name']." </a></div>
                <div id='log-out'  class='dashboard-item'><a href='../logout.php'>Log out</a></div></div>
                <center><div id='score'><h1 style='font-family:verdana;'>Result</h1></div></center><br><br>
               <center><table id='response'>
                <tr><th>Question No.</th>
                <th>Marked answer</th>
                <th>Correct answer</th></tr>";
                

$query="SELECT * FROM questions";
$result= mysqli_query($link, $query);

$correct=0;
$wrong=0;
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
        else
            $wrong=$wrong+1;
        echo "<tr><td>{$row[0]}</td><td>{$coption}</td><td>{$row[2]}</td></tr>";
    }
    else
    {
     echo "<tr><td>{$row[0]}</td><td>Unattempted</td><td>{$row[2]}</td></tr>";
    }
    
}
$total=$correct*3-$wrong;

$sql = "UPDATE users SET score='".$total."' WHERE email='".$_SESSION['email']."'";

if ($link->query($sql) !== TRUE) {
    
    echo "Error updating record: " . $link->error;
}
      echo"</table></center>
                <Script>
                var div=document.createElement('h1');
                   
                    div.innerHTML='Your score is '+".$total.";
                    document.getElementById('score').append(div);
                </Script>

               
    </body></html>";
}
else
{
header("location: ../Index.php");
}
  ?>