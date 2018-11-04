<title>SDN:: View Flowtable</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'flowtable';
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
             
            <a href=ipaddressView.php>View Ipaddress</a>&nbsp
            <a href=suspiciousView.php>View Suspicious</a>&nbsp 
            <a href=usertypesView.php>View Usertypes</a> &nbsp
           				          
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              
           <a href="javascript:history.go(-1)">Back</a>&nbsp
		   <a href=interfaceAdmin.php>Home Page</a>
           <a href=index.php>Logout</a>
    </div>         
        
<table width="1000" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">VIEW FLOWTABLE</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="50"><span class="style16">S/NO</span></td>
    <td width="100"><span class="style16">SOURCE IP</span></td>
    <td width="150"><span class="style16">ACTION</span></td>
    <td width="110"><span class="style16">SECURITY STATUS</span></td>
    <td width="130"><span class="style16">UPDATE STATUS</span></td>
  </tr>
  <tr valign="top">
  <?php
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sN; ?></td>
    <td><?php echo $row->sourceIp; ?></td>
    <td><?php echo $row->action; ?></td>
    <td><?php echo $row->securityStatus; ?></td>
    <td><?php echo $row->updateStatus; ?></td>
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
//include 'footer.php';
?>