<?php
session_start();
include'header.php';
include'dbconnect.php';
?>
<html>
<head>
<title>SDN::Host Composs</title>
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
                   
       
        <form method="POST" action="checkSource.php">             
        <font color="blue">Host Composs</font color="blue"></br>
        <table align="center">    
        <tr> <td>host: &nbsp &nbsp &nbsp &nbsp</td>  
        <td><select name="host" id="host">
        <option>- Select -</option>
      <?php
		  // search for the host's list
       		$query = "select * from ipaddress";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result)) 
			  {
			    
                $sourceIp = $row->ip;
                $sourceMac = $row->mac;  
                $host = $row->host;        
            	echo "<option>".$host."</option>";
              }
              
			} else {
                 
            exit(0);
		 } 
		  ?>
    </select>
    </td>
  </tr>
  
  
  <tr> <td>to: &nbsp &nbsp &nbsp &nbsp</td>  
        <td><select name="to" id="to">
        <option>- Select -</option>
      <?php
		  // search for the host's list
       		$query = "select * from ipaddress";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			   
                $destinationIp = $row->ip;
                $destinationMac = $row->mac;   
                $to = $row->host;       
            	echo "<option>".$to."</option>";
                
		  	 }
              
			} else {
                 
           // exit(0);
		 } 
		  ?>
    </select>
    </td>
  </tr>
        
   <tr>
      <td> 
        Subject: &nbsp &nbsp &nbsp &nbsp </td>
       <td><input type="text" name="subject" value=""/> </td>
         </tr>
        </table>
        <input name="sourceIp" type="hidden" id="sourceIp" value="<?php echo $sourceIp ?>">
        <input name="sourceMac" type="hidden" id="sourceMac" value="<?php echo $sourceMac ?>">
        <input name="destinationIp" type="hidden" id="destinationIp" value="<?php echo $destinationIp ?>">
  
        </br><textarea name="textarea" cols="60" rows="10"></textarea>
        <p align="center"><td><input type="submit" name="submit" value="Submit"/>&nbsp &nbsp 
        <input type="reset" name="reset" value="Reset"/></td></tr>
       
    </form>
   
 </div>     
 
</body>
</html>