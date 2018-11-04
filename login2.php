<?php
/*
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
        <form method="POST" action="interface.php">
        <tr><td>User name:</td><td><input type=text name=username /></td></tr>
        <tr><td>Password:</td><td><input type=password value=""/></td></tr>
        <tr><td>Select User type:</td><td><input type=radio name=user type  value=User checked />User &nbsp &nbsp
        <input type=radio name=user type  value=Admin/>Admin</td></tr>
              
        <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Login" />&nbsp &nbsp &nbsp &nbsp
        <input type="reset" name="reset" value="Reset"/>
        </td></tr>
        
        </form>
    </table>
    </div>    
    
</body>
</html>
 */   

include'dbconnect.php';
//login2.php

$submit=$_POST['submit'];

if ($submit) { //start if submit

	   $userName=$_POST["userName"];
	   $password=$_POST['password'];
       $userType=$_POST['userType'];
	       
	   if(($userName=="") || ($password=="") || ($userType=="") {     
        //start if particular empty
          ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("All fields are required!")      
             </SCRIPT>
          <?php
          include'login.php';
          
          // close if ||
       }else {//else of ||
           
           $query="select * from user";
           $result=mysql_query($query);
 
           while ($row=mysql_fetch_row($result)){
                 //start while fetch rows
              if (($userName==$row[1]) && ($password==$row[2]) && ($userType==$row[3]) && ($userType=="Admin")) {   
                
                echo"correct Admin";
                include'interfaceAdmin.php';
                
                
                //end if &&s
              } elseif (($userName==$row[1]) && ($password==$row[2]) && ($userType==$row[3]) && ($userType=="User")) {
                  
                 echo"correct user";
                 include'interfaceUser.php'
              }else{                                                      
                  ?>
                         <SCRIPT LANGUAGE="javaScript">
                         alert("invalid user name or password")      
                         </SCRIPT>
                        
                  <?php            
                             
                             
              //end else pf 3 levels               
              }      
              
       )   
                //end while
           }
      
      
      
    //end if submit  
    } else{ //else not submit
        
     ?>
    <SCRIPT LANGUAGE="javaScript">
     alert("Submission of logon data error!")      
     </SCRIPT>
        
     <?php   
     //end else not submit   
    }   
    
    ?>