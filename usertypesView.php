<title>SDN:: View Usertypes</title>
<?php
include 'header.php';
include 'dbconnect.php';
$query = "select * from usertype order by sN";
$result = mysql_query($query);
$sN = '1';
?>
<style type="text/css">

</style></head>

<body>
 
  <div align="center" >
             
			<a href=ipaddressView.php>View Ipaddress</a>&nbsp
            <a href=flowtableView.php>View FlowTable</a>&nbsp
            <a href=suspiciousView.php>View Suspicious</a>&nbsp 
                        
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
    <td colspan="9"><div align="center" class="style1">VIEW USERTYPES TABLE</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="55"><span class="style16">S/NO</span></td>
    <td width="55"><span class="style16">USER TYPE</span></td>
   </tr>
  <tr valign="top">
  <?php
			$count = mysql_num_rows($result);
			if ($count != 0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sN; ?></td>
    <td><?php echo $row->userType; ?></td>
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