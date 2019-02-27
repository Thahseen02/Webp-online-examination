<?php 
session_start();
if(isset($_SESSION['id'])){
session_destroy();}

?>                                                             
<!DOCTYPE html>
<html>
<head></head>
<style>
    body {background-color: deepskyblue;}
    #head {
        text-align: center;
        color: white;
        font-family: cursive;
        font-size: 100px;
    }
    #footer {
        text-align: center;  
    }
    </style>
<body>
	<h2 id ="head">
	Thank You!
	</h2>
	<footer><div id="footer"><a href ="Index.php" >Go back to Login Page</a></div></footer>
</body>
</html>