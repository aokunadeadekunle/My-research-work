<?php
//login.php;
include'dbconnect.php';

?>
<html>
<head>
<title>login</title>
</head>
<body>
    <div align="center" >
    <img src="places-183a.jpg" alt="image" height="200" width="1000"> </img></br></br> 
    
    <table>
        <form action=interface.php method "POST">
        
        <tr><td>User name:</td><td><input type=text name=username /></td></tr>
        <tr><td>Password:</td><td><input type=password value=""/></td></tr>
        <tr><td>Select User type:</td><td><input type=radio name=user type  value=User checked />User &nbsp &nbsp
        <input type=radio name=user type  value=Admin/>Admin</td></tr>
      
        
        <tr><td></td><td><input type=submit value=Login />&nbsp &nbsp &nbsp &nbsp<input type=reset value=Reset /></td></tr>
        
        </form>
    </table>
    </div>    
    
<?php
session_start();   
include'dbconnect.php';
//submitUser.php

$alert="<font color='red'> Fill all the fields </font>";
$login=$_POST['submit'];
if($login)
{
	
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$userType=$_POST['userType'];

	if($userName==""||$password==""||$userType=="")
	{
		echo $alert;
	}
	else
	{
        /*
		if $userName==select * from 
        
        */
        echo "what next";
	}
}
?>
      
</body>
</html>