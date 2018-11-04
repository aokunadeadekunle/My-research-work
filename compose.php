<?php
include'header.php';
include'dbconnect.php';

?>
<html>
<head>
<title>SDN::Host Compose</title>
</head>
<body>
    <div align="center" >
          
            
            <a href=inbox.php>Packet Inbox</a> &nbsp
            <a href=malicious.php>Malicious Inbox</a>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
           <a href=aboutUs.php>About Us</a>&nbsp
           <a href=contact.php>Contact Us</a>&nbsp
           <!--<a href=interfaceAdmin.php>Home Page</a>-->
           <a href=index.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp
                   
       
        <form method="POST" action="checkContent.php">             
        <font color="blue">Host Compose</font color="blue"></br>
        <table align="center">
   <tr>
      <td> Subject: &nbsp &nbsp &nbsp &nbsp </td>
       <td><input type="text" name="subject" value=""/> </td>
         </tr>
        </table>
      
         </br><textarea name="textarea" cols="60" rows="10"></textarea>
        <input type="hidden" name="threshold" value=""/> 

         
        <p align="center"><td><input type="submit" name="submit" value="Submit"/>&nbsp &nbsp 
        <input type="reset" name="reset" value="Reset"/></td></tr>
       
    </form>
   
 </div>     
</body>
 <?php

              ?>