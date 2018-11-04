<?php
session_start();
include'header.php';
include'dbconnect.php';
?>
<html>
<head>
<title>SDN::Contact Us</title>
</head>
<body>
    
    <div align="center" >
          
            
            <a href=inbox.php>Packet Inbox</a> &nbsp
            <a href=malicious.php>Malicious Inbox</a>
            <a href=composs.php>Compose</a>&nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
           <a href=aboutUs.php>About Us</a>&nbsp
           <a href=login.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp
          
        <!-- <form method="POST" action="<?php //echo $_SERVER['PHP_SELF'];?>">  -->
        <form method="POST" action="contactConfirm.php">             
        <font color="blue">Contact Us</font color="blue"></br></br>
        <table align="center">    
        <tr> <td> 
        From e_mail address: &nbsp &nbsp &nbsp &nbsp </td>
       <td><input type="text" name="from" value=""/> </td>
       </tr>
        
       <tr>
        <td> 
        Subject: &nbsp &nbsp &nbsp &nbsp </td>
       <td><input type="text" name="subject" value=""/> </td>
         </tr>
        </table>
                    
        </br><textarea name="textarea" cols="60" rows="10"></textarea>
        <p align="center"><td><input type="submit" name="submit" value="Submit"/>&nbsp &nbsp 
        <input type="reset" name="reset" value="Reset"/></td></tr>
       
    </form>
   
 </div>  
 
  
</body>
