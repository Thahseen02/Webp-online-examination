

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Examination Portal </title>
        <link  rel="stylesheet" href="css/Registration.css"/>
        <script type="text/javascript" src="js/Registration.js">
            
            </script>
        </head>

        <body>
            
            
            <div id="login-container">
            <span id="login-heading">Register</span>
           
            <form name="form" class="register-details" action="Add_user.php ?>" onsubmit="return check()" method="post">
  <table>
                   <tr>
                        <td>
                <label>Name</label>
                        </td><td><input id="name" name="name" placeholder="Enter your name" class="detail" type="text">
                       <span><?php echo $nameErr; ?></span></td></tr>
                    <tr>
                        <td>
                            <label>Gender</label></td><td> <select id="gender" name="gender" class="detail" placeholder="Enter your gender" ><option value="Male">Select Gender</option>
          <option value="M">Male</option>
                        <option value="F">Female</option> </select>
                        <span><?php echo $genderErr;?></span></td>
      </tr>
                    <tr>
                        <td>
                            <label>Email</label></td><td><input class="detail" id="email" name="email" placeholder="Enter your email-id"  type="email">
                            <span><?php echo $emailErr;?></span>
                        </td></tr>
           <tr>
                        <td>
           <label>College</label></td><td> <input class="detail" id="college" name="college" placeholder="Enter your college name"  type="text">
               <span><?php echo $collegeErr;?></span>
               </td></tr>
            <tr>
                        <td>     <label>Mobile No</label></td><td> <input class="detail" id="mob" name="mob" placeholder="Enter your mobile number"  type="number">
                <span><?php echo $mobErr;?></span>
                </td></tr>
           <tr>
                        <td>  <label>Password</label></td><td><input  class="detail" id="password" name="password" placeholder="Enter your Password"  type="password">
                         <span><?php echo $passErr;?></span>
               </td></tr>
             <tr>
                        <td>   <label>Confirm Password</label></td><td> <input class="detail" id="cpassword" name="cpassword" placeholder="Conform Password" type="password">
                        <span><?php echo $rpassErr;?></span>
                 </td></tr>    </table>  
                <input  type="submit" class="sub" id="blue-sign" value="sign up" >
                
                </form>
                 
            </div>

            </body>
        </html>