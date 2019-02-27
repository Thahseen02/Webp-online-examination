<?php


require_once 'backend/connect.php';

if(!isset($_SESSION['id'])){
    header("location: ../exam/Index.php"); 
    
}


    ?>

<!DOCTYPE html PUBLIC'-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>Online Examination Portal </title>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link  rel='stylesheet' href='css/Instruction.css'/>
        <script type='text/javascript' src='js/Registration.js'>
            
            </script>
        </head>
            <body>
                 <div class='navbar'>
                         
         <div id='welcome' class='dashboard-item' ><a href='#'>Welcome <?php echo $_SESSION['name']; ?> </a></div>
                       
                         
                     
                         
                         
                            <div id='log-out'  class='dashboard-item'><a href='logout.php'>Log out</a></div>
                        
                      </div>
                
                <div id="contain" class="w3-container w3-blue">
                    <ol><center><big><b>General Instructions</b></big></center><br>
                    <li>Make sure you have good internet connection.</li>
                    <li>Do not refresh the browser during the exam.</li>
                    <li>Do not click back button during the exam.</li>
                        <li>Every correct anser will fetch you 3 marks and 1 mark will be deducted for every wrong answer.</li>
                    <li>Click the "Submit" button to submit your exam.Do not press "Enter" on the keyboard to submit the exam.</li>
                    <li>Save your answer using the "Save" button. </li>
                    <li>Your test will be automatically submitted after the time limit.</li>
                    </ol>
                    <input type="button" value="Start" class="blue-button"
            onclick="window.location.href='http://localhost/exam/exam.php'">
                </div>
                
            </body>
</html>