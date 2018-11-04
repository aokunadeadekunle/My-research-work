<title>SDN:: View Packet Inbox</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'packet';
$query = "select * from $table order by dateTime";
$result = mysql_query($query);
$sN = '1';
?>
<style type="text/css">

body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: black;
}
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style16 {font-size: 14; font-weight: bold; }

</style>

</head>

<body>
 
   <div align="center" >
          
            <a href=malicious.php>Malicious Inbox</a> &nbsp
            <a href=compose.php>Compose</a>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
           <a href=aboutUs.php>About Us</a>&nbsp
           <a href=contact.php>Contact Us</a>&nbsp
           <a href=index.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp
    </div>         
        
<table width="1000" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">Packet Inbox</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="60"><span class="style16">S/NO</span></td>
    <td width="150"><span class="style16">SUBJECT</span></td>
    <td width="150"><span class="style16">SPAMICITY</span></td>
 <?php  /*  <td width="500"><span class="style16">CONTENT </span></td> */  ?>
    <td width="200"><span class="style16">DATE/TIME</span></td>
    
  </tr>
  <tr valign="top">
      
  <?php
  
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sN; ?></td>
    <td><?php echo '<a href=readPacket.php?subj='.$row->id.'>'.$row->subject.'</a>'; $row->subject; ?></td>
  <?php  /* <td><?php echo $row->textarea; ?></td>   */ ?>
    <td><?php echo $row->spamicity; ?></td>
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