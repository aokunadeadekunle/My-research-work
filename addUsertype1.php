<?php
include 'header.php';
include 'dbconnect.php';
$users = 'users';
$userTypes = 'userTypes';
?>
<title>SDN:: Add Usertype1</title>

<style type="text/css">
<!--
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #0000FF;
}
.style1 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>

</br>
<form method="Post"  action="addUsertype2.php" name="userTypes" id="userTypes">
<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
  
  <tr bgcolor="#FFFFCC">
    <td height="10" colspan="2"><div align="center" class="style1">ADD USER TYPE</div></td>
  </tr>
  
  <tr>
    <td height="10"><div align="right">User Type</div></td>
    <td height="10"><input name="userType" type="text" id="userType"></td>
  </tr>
 
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">
      <input type="submit" name="submit" value="Submit">
    </div>
    </td>
    <td height="10"><input type="reset" name="reset" id="reset" value="Reset"></td>
  </tr>
  <tr>
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
<?php
//include 'footer.php';
?>