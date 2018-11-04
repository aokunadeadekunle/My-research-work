<title>SDN:: View Contact</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'contact';
$query = "select * from $table order by sN";
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
           
            <a href=composs.php>Compose</a>&nbsp 
            <a href=inbox.php>Packet Inbox</a> &nbsp
            <a href=malicious.php>Malicious Inbox</a>&nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
           <a href=userView.php>View User</a> &nbsp 
           <a href=interfaceAdmin.php>Home Page</a>&nbsp 
           <a href=aboutUs.php>About Us</a>&nbsp
           <a href=index.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp
    </div>         
        
<table width="1000" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">VIEW CONTACT</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="55"><span class="style16">S/NO</span></td>
    <td width="150"><span class="style16">SOURCE E-MAIL</span></td>
        <td width="200"><span class="style16">SUBJECT</span></td>
    <td width="200"><span class="style16">TEXTAREA</span></td>
    
  </tr>
  <tr valign="top">
  <?php
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sN; ?></td>
    <td><?php echo $row->from; ?></td>
    <td><?php echo '<a href=readContact.php?subj='.$row->sN.'>'.$row->subject.'</a>'; ?></td>
    <td><?php echo $row->textarea; ?></td>
    
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