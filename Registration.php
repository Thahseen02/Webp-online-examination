<html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <title>Online Examination Portal </title>
        <link  rel="stylesheet" href="css/Registration.css"/>
        <script type="text/javascript" src="js/Registration.js">
            
            </script>
        </head>

        <body>
            <?php
            require_once 'backend/connect.php';
            if(isset($_SESSION['id']))
                {
                  header("location: Instruction.html");
                }           
            if(isset($_GET['email']))
                {
                  echo "<script>alert('Email Already Exist')</script>";
                }
            if(isset($_GET['error']))
                {
                  $error=$_GET['error'];
                  echo $error;
                }   
               ?>
            <div id="login-container">
            <span id="login-heading">Register</span>
           
            <form name="form" class="register-details" action="backend/register_script.php" onsubmit="return check()" method="post">
  <table>
                   <tr>
                        <td>
                <label>Name</label>
                        </td><td><input id="name" name="name" placeholder="Enter your name" class="detail" type="text">
                       </td></tr>
                    <tr>
                        <td>
                            <label>Gender</label></td><td> <select id="gender" name="gender" class="detail" placeholder="Enter your gender" ><option value="Male">Select Gender</option>
          <option value="Male">Male</option>
                        <option value="Female">Female</option> </select>
                        </td>
      </tr>
                    <tr>
                        <td>
                            <label>Email</label></td><td><input class="detail" id="email" name="email" placeholder="Enter your email-id"  type="email">
                            
                        </td></tr>
           <tr>
                        <td>
           <label>College</label></td><td> <input class="detail" id="college" name="college" placeholder="Enter your college name"  type="text">
               
               </td></tr>
            <tr>
                        <td>     <label>Mobile No</label></td><td> <input class="detail" id="mob" name="mobile" placeholder="Enter your mobile number"  type="number">
                
                </td></tr>
           <tr>
                        <td>  <label>Password</label></td><td><input  class="detail" id="password" name="password" placeholder="Enter your Password"  type="password">
                         
               </td></tr>
             <tr>
                        <td>   <label>Confirm Password</label></td><td> <input class="detail" id="cpassword" name="cpassword" placeholder="Conform Password" type="password">
                        
                 </td></tr>    </table>  
                <input  type="submit" class="sub" id="blue-sign" value="sign up" >
                
                </form>
                 
            </div>

            </body>
        </html>