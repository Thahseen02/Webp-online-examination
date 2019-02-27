<?php
require_once 'backend/connect.php';
if(!isset($_SESSION['id']))
{echo"
<!DOCTYPE html>
<html>  
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
        <title>Examination portal</title>
        <link rel='stylesheet' href='css/login.css'>
        
        <script type='text/javascript' src='js/login.js'></script>
            
    </head>
    <body>
        <div id='login-container'>
            <div id='login-heading'>User Login</div>
            <form action='backend/login_script.php'  method='post'>
                <table cellspacing='2px'>
                    <tr>
                        <td>
                <label>Email</label>
                        </td>
                        <td>
                            <input class='login-details' type='text' id='email' name='email' placeholder='Email'>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                <label>Password</label>
                            </td>
                        <td>
                            <input class='login-details' type='password' name='password' id='password' placeholder='Password'>
                             </td>
                    </tr>
                </table>    
                <button id='login' class='blue-button' type='submit' >Log In</button>
               <input type='button' id='signup' class='blue-button'  value='Sign Up' onclick='window.location.href=\"http://localhost/exam/Registration.php\"'>
                
            </form>
        </div>
    </body>
</html>";
}
else
     header("location: Instruction.php");
?>