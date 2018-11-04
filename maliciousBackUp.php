<title>SDN:: View Malicious Inbox</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'malicious';
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
          
            
            <a href=inbox.php>Packet Inbox</a> &nbsp
            <a href=composs.php>Composs Inbox</a>
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
    <td colspan="9"><div align="center" class="style1">Malicious Inbox</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="60"><span class="style16">S/NO</span></td>
    <td width="150"><span class="style16">SOURCE IP</span></td>
    <td width="150"><span class="style16">SOURCE MAC</span></td>
    <td width="150"><span class="style16">DESTINATION IP</span></td>
    <td width="240"><span class="style16">SUBJECT </span></td>
    <td width="300"><span class="style16">MESSAGE</span></td>
    <td width="140"><span class="style16">DATE/TIME</span></td>
    
  </tr>
  <tr valign="top">
  <?php
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sN; ?></td>
    <td><?php echo $row->sourceIp; ?></td>
    <td><?php echo $row->sourceMac; ?></td>
    <td><?php echo $row->destinationIp; ?></td>
    <td><a href='readMalicious.php?'><?php echo $row->subject; ?></a></td>
    <td><?php echo $row->textarea; ?></td>
    <td><?php echo $row->dateTime; ?></td>
    
  </tr>
  	<?php 
	$sN++;
	}
	}
	?>
</table>
</body>
</html>
<?php
print('<br><br>');

?>