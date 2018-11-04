<?php
include'dbconnect.php';
include'header.php';
?>
<html>
<head>    
<title>SDN::delete user</title>
<head>  

 <body>
    <div align="center" >
        
            <a href=addUser.php>Add user</a>&nbsp
            <a href=userUpdate.php>Update user</a>&nbsp 
            <a href=userView.php>View user</a> &nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
             <a href=interfaceAdmin.php>Home Page</a>&nbsp  
            <a href="javascript:history.go(-1)">Back</a>&nbsp
            <a href=index.php>Logout</a>
            <p> Delete User(s) Page</p>
     <br>
<form method="post"  action="userDelete2.php" name="userDelete2" id="userDelete2">
<table width="750" border="0" align="center" cellpadding="1" cellspacing="1">
  
  <tr>
    <td height="10" bgcolor="#FFFFCC"><div align="right">User Id </div></td>
    <td height="10" bgcolor="#FFFFCC"><select name="userId" id="userId" value="">
      <option>- Select -</option>
      <?php
		  // search for the user's list
       		$query = "select userId from users";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			    $userId = $row->userId;
            	echo "<option>".$userId."</option>";
		  			  }
			 } else {
			 echo "<br>UserId does not exist";
			 exit(0);
		 } 
		  ?>
    </select></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10">
   </td>
  </tr>
  <tr>
    <td height="10"><div align="right">Password </div></td>
    <td height="10"><select name="password" id="password" value="">
    <option>- Select -</option>
      <?php
		  // search for the user's list
       		$query = "select password from users";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			    $password = $row->password;
            	echo "<option>".$password."</option>";
		  			  }
			 } else {
			 echo "<br>User's ID does not exist";
			 exit(0);
		 } 
		  ?>
    </select></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10">
   </td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">
      <input type="submit" name="delete" value="Delete">
    </div></td>
    <td height="10"><input name="Reset" type="reset" id="Reset" value="Reset"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</div>  
</body>
</html>
