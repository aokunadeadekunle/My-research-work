<title>SDN:: View Malicious Inbox</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'packet';
$query = "select * from $table order by dateTime";
$result = mysql_query($query);
$sN = '1';
?>
<style type="text/css">
<!--
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #0000FF;
}
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style16 {font-size: 14; font-weight: bold; }
-->
</style></head>

<body>
 
   <div align="center" >
          
            <a href=malicious.php>Malicious Inbox</a> &nbsp
            <a href=composs.php>Compose</a>
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
    </div>         
        
<table width="1000" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">Packet Inbox</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="60"><span class="style16">S/NO</span></td>
    <td width="150"><span class="style16">SOURCE IP</span></td>
    <td width="150"><span class="style16">SOURCE MAC</span></td>
    <td width="150"><span class="style16">DESTINATION IP</span></td>
    <td width="240"><span class="style16">SUBJECT </span></td>
    <td width="300"><span class="style16">MESSAGE</span></td>
    <td width="180"><span class="style16">DATE/TIME</span></td>
    
  </tr>
  <tr valign="top">
      
  <?php
  
  while ($row=mysql_fetch_array($result))	
  {
		$sN=$row['sN'];
		$sourceIp=$row['sourceIp'];
		$sourceMac=$row['sourceMac'];
		$destinationIp=$row['destinationIp'];
        $subject=$row['subject'];
        $textarea=$row['textarea'];
		$dateTime=$row['dateTime'];
		

		echo "<tr>
				  <td>$sN</td>
				  <td>$sourceIp</td>
				  <td>$sourceMac</td>
                  <td>$destinationIp</td>
				  
				  <!--<td><a href='readmail1.php?subj=$subject'>$subject</a></td>  -->
                  <td><a href='readPacket.php?subj=$textarea'><?php echo $row->$subject; ?></a></td>
                  
                  <td>$textarea</td>
				  <td>$dateTime</td>
			 <?php</tr>";
			// $sn++;
$sN++;
	}
	
	
	echo "</table>";
  
  
  
  
  
  
  
	include 'dbconnect.php';
	$par = $_REQUEST['subj'];
	$query="SELECT textarea FROM hamFolder where subject = '$par' ";
	$result=mysql_query($query) or die(mysql_error());
	
	while ($row=mysql_fetch_array($result))	 {
		$textarea=$row['textarea'];
	}
		 
	echo $textarea;
	  
	


  
  
  
  
  
  
  
 /* 
  
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sN; ?></td>
    <td><?php echo $row->sourceIp; ?></td>
    <td><?php echo $row->sourceMac; ?></td>
    <td><?php echo $row->destinationIp; ?></td>
    <!--<td><a href='readPacket.php?'><?php //echo $row->subject; ?></a></td>-->
    <td><a href='readPacket.php?subj=textarea'><?php echo $row->subject; ?></a></td>
    <!--<a href="get-pass.php?r=w3resourse.com&s=online-tutorial">This is to send data</a>  <br> -->
    <td><?php echo $row->textarea; ?></td>
    <td><?php echo $row->dateTime; ?></td>
    
  </tr>
  	<?php 
	$sN++;
	}
	}
*/	?>
</table>
</body>
</html>
<?php
print('<br><br>');

?>