<title>SDN:: View Users</title>
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
             
            <a href=addUser.php>Add user</a>&nbsp
            <a href=userUpdate.php>Update user</a>&nbsp 
            <a href=userDelete.php>Delete user</a> &nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              
           <a href="javascript:history.go(-1)">Back</a>&nbsp
           <a href=login.php>Logout</a>
    </div>         
        
<table width="1000" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="9"><div align="center" class="style1">VIEW MALICIOUS</div></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="55"><span class="style16">S/NO</span></td>
    <td width="183"><span class="style16">NAME(S)</span></td>
    <td width="241"><span class="style16">EMAIL ADDRESS </span></td>
    <td width="121"><span class="style16">PHONE</span></td>
    <td width="241"><span class="style16">USER ID</span></td>
    <td width="121"><span class="style16">PASSWORD</span></td>
    <td width="134" colspan="5"><span class="style16">USER(S) TYPE </span></td>
  </tr>
  <tr valign="top">
  <?php
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  { ?>
    <td><?php echo $sno; ?></td>
    <td><?php echo $row->lName.', '.$row->fName.' '.$row->mName; ?></td>
    <td><?php echo $row->eMail; ?></td>
    <td><?php echo $row->phoneNo; ?></td>
    <td><?php echo $row->userId; ?></td>
    <td><?php echo $row->password; ?></td>
    <td colspan="5"><?php echo $row->userType; ?></td>
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