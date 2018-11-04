<?php

include'header.php';
include'dbconnect.php';
?>
<html>
<head>
<title>SDN::HostComposs2</title>
</head>
<body>
    <div align="center" >
       
    
            <a href=host2.php>inbox</a> &nbsp
            <a href=host3.php>spam</a>&nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
           
           <a href="javascript:history.go(-1)">back</a>&nbsp
           <a href=login.php>logout</a>
       
        <form method="POST" action="checkSource2.php">
                         
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
			    $host = $row->host;
                $destIp = $row->ip;
                $mac = $row->mac;
            	echo "<option>".$host."</option>";
		  			  }
			 } else {
                 
			// exit(0);
		 } 
         ?>
    </select>
    </td>
  </tr>
        
  <tr><td>to: &nbsp &nbsp &nbsp &nbsp</td>
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
			    $host = $row->host;
                $destIp = $row->ip;
                $mac = $row->mac;
            	echo "<option>".$host."</option>";
		  			  }
			 } else {
                 
			 exit(0);
		 } 
         ?>
    </select></td>
  </tr>
        
   <tr>
      <td>Subject: &nbsp &nbsp &nbsp &nbsp </td>
       <td><input type="text" name="subject" value=""/> </td>

        </tr>
        </table> 
        </br><textarea name="textarea" cols="60" rows="10"></textarea>
        <p align="center"><td><input type="submit" name="submit" value="Submit"/>&nbsp &nbsp 
        <input type="reset" name="reset" value="Reset"/></td></tr>
         
    </form>
   
 </div>      
    
        
</body>
</html>