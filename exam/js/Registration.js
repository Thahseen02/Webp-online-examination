function check()
{
   var y = document.forms["form"]["name"].value;
    var letters = /^[A-Za-z]+$/;
    if (y == null || y == "") 
    {
        window.alert("Name must be filled out.");
     return false;}
    
     var x = document.forms["form"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) 
    {window.alert("Not a valid e-mail address.");
     return false;}
    
    var z =document.forms["form"]["college"].value;
    if (z == null || z == "") 
    {
        window.alert("college must be filled out.");
     return false;}
    
   
    var a = document.forms["form"]["password"].value;
    if(a == null || a == "")
    {window.alert("Enter password");
     return false;}
    if(a.length<5 || a.length>25)
    {window.alert("Passwords must be 5 to 25 characters long.");return false;}
    
var b = document.forms["form"]["cpassword"].value;
    if (a!=b)
    {window.alert("Passwords must match.");
              return false;}
}