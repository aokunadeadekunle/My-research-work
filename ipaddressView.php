<title>SDN:: View IPaddress</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'ipaddress';
$query = "select * from $table order by sN";
$result = mysql_query($query);
$sno = '1';
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
            
			
            <a href=suspiciousView.php>View Suspicious</a>&nbsp 
            <a href=usertypesView.php>View Usertypes</a> &nbsp
            <a href=flowtableView.php>View FlowTable</a> &nbsp
            
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
        
<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">VIEW IP ADDRESS TABLE</div></td>
  </tr>
 
  <tr bgcolor="#FFFFCC">
    <td width="55"><span class="style16">S/NO</span></td>
    <td width="100"><span class="style16">IP ADDRESS</span></td>
    
  </tr>
  <tr valign="top">
  <?php
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sno; ?></td>
    <td><?php echo $row->ip; ?></td>
    </tr>
  	<?php 
	$sno++;
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