<?php
include 'dbconnect.php';
include 'header.php';

session_start();
$userType = $_SESSION['userType'];
$userId = $_SESSION['userId'];
?>
<title>SDN::User Edit</title>
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

<br>

<div align="center" >
             
            <a href=userView.php>View user</a>&nbsp
            <a href=userEdit.php>Edit user</a>&nbsp 
            <a href=userDelete.php>Delete user</a> &nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
           <a href=interfaceAdmin.php>Home Page</a>&nbsp    
           <a href="javascript:history.go(-1)">Back</a>&nbsp
           <a href=index.php>Logout</a>
    </div>     

<form method="post"  action="userEdit2.php" name="userEditForm" id="userEditForm">
<table width="750" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr bgcolor="#FFFFCC">
    <td height="10" colspan="2"><div align="center" class="style1">UPDATE USER</div></td>
    </tr>
  <tr>
    <td width="373" height="10">&nbsp;</td>
    <td width="370" height="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FFFFCC"><div align="right">User Type </div></td>
    <td height="10" bgcolor="#FFFFCC"><select name="usertype" id="select">
      <option>- Select -</option>
      <?php
		  // search for the usertypes's list
       		$query = "select * from $table1";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			    $userType = $row->userType;
            	echo "<option>".$userType."</option>";
		  			  }
			 } else {
                 ?>
                        <SCRIPT LANGUAGE="javaScript">
                             alert("User's ID does not exist!!!")      
                        </SCRIPT>
                 <?php
		
			 exit(0);
		 } 
		  ?>
    </select></td>
  </tr>
  <tr>
    <td height="10"><div align="right">User ID </div></td>
    <td height="10"><select name="userid" id="select2">
      <option>- Select -</option>
      <?php
		  // search for the user's list
       		$query = "select userId from $table2 ";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			    $userId = $row->userId;
            	echo "<option>".$userId."</option>";
		  			  }
			 } else {
                      ?>
                        <SCRIPT LANGUAGE="javaScript">
                             alert("User's ID does not exist!!!")      
                        </SCRIPT>
                      <?php
			  exit(0);
		 } 
		  ?>
    </select></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">
      <input type="submit" name="Submit" value="Submit">
    </div></td>
    <td height="10"><input name="Reset" type="reset" id="Reset" value="Reset"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
<?php
//include 'footer.php';
?>