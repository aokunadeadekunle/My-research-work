<?php
session_start();
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
           <a href=login.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp
                   
       
        <form method="POST" action="checkSourceBACKUPSATUDY.php">             
        <font color="blue">Host Composs</font color="blue"></br>
        <table align="center">    
        <tr> <td>Host: &nbsp &nbsp &nbsp &nbsp</td>  
        <td><select name="host" id="host">
        <option>- Select -</option>
         <?php
         
          // search for the host's list
       		$query = "select host from ipaddress";
			$result = mysql_query($query);
			//$count = mysql_num_rows($result);
			while ($row=mysql_fetch_object($result)) 
			  {

                $host = $row->host; 
                echo "<option>".$host."</option>";
                
              }
              
              ?>
           </select>
             </td>
             </tr>
            <tr> <td>To: &nbsp &nbsp &nbsp &nbsp</td>  
            <td><select name="to" id="to">
            <option>- Select -</option>
            
            <?php
            // search for the to's list
       		$query = "select * from ipaddress";
			$result = mysql_query($query);
			//$count = mysql_num_rows($result);
			while ($row=mysql_fetch_object($result)) 
			  {

                $to = $row->host; 
                $destinationIp = $row->ip;
                $destinationMac = $row->mac;        
            	echo "<option>".$to."</option>";
                
                
              }   
              ?>
               
              </select>
             </td>
             </tr>
			            
   <tr>
      <td> Subject: &nbsp &nbsp &nbsp &nbsp </td>
       <td><input type="text" name="subject" value=""/> </td>
         </tr>
        </table>
      
         </br><textarea name="textarea" cols="60" rows="10"></textarea>
        <p align="center"><td><input type="submit" name="submit" value="Submit"/>&nbsp &nbsp 
        <input type="reset" name="reset" value="Reset"/></td></tr>
       
    </form>
   
 </div>     
</body>
 <?php
              
              ?>