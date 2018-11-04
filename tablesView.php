<title>SDN:: View Tables</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'users';
$query = "select * from $table order by LName";
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
             
            <a href=ipaddressView.php>View Ipaddress</a>&nbsp
            <a href=suspiciousView.php>View Suspicious</a>&nbsp 
            <a href=usertypesView.php>View Usertypes</a> &nbsp
            <a href=flowTableView.php>View Flowtable</a> &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
           <a href=interfaceAdmin.php>Home Page</a>&nbsp    
           <a href="javascript:history.go(-1)">Back</a>&nbsp
           <a href=login.php>Logout</a>
    </div>         
        
<table width="1000" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">VIEW TABLE(S)</div></td>
  </tr>
  
</table>
</body>
</html>
<?php
print('<br><br>');
//include 'footer.php';
?>