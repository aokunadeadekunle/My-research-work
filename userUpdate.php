<?php
session_start();

include 'dbconnect.php';
include 'header.php';

?>
<html>
<head>
<title>SDN::User Update</title>
</head> 
<body>     
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
 <div align="center" >
        
            <a href=addUser.php>Add user</a>&nbsp
            <a href=userDelete.php>Delete user</a>&nbsp 
            <a href=userView.php>View user</a> &nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href=interfaceAdmin.php>Home Page</a>&nbsp   
            <a href="javascript:history.go(-1)">Back</a>&nbsp
            <a href=login.php>Logout</a>
            <p> Update User(s) Page</p>
<br>
<form method="post"  action="userUpdate2.php" name="userUpdate" id="userUpdate">
<table width="750" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr bgcolor="#FFFFCC">
    <td height="10" colspan="2"><div align="center" class="style1"></div></td>
    </tr>
  <tr>
    <td width="373" height="10">&nbsp;</td>
    <td width="370" height="10">&nbsp;</td>
  </tr>
  <tr>
    <td height="10" bgcolor="#FFFFCC"><div align="right">User Id: </div></td>
    <td height="10" bgcolor="#FFFFCC"><select name="userId" id="userId">
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
                 
            ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("User's Id does not exist")      
             </SCRIPT>
          <?php
			  exit(0);
		 } 
		  ?>
    </select></td>
  </tr>
  </br>
  <tr>
    <td height="10"><div align="right">Password: </div></td>
    <td height="10"><select name="password" id="password">
      <option>- Select -</option>
      <?php
		  // search for the user's list
       		$query = "select password from users ";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			    $password = $row->password;
            	echo "<option>".$password."</option>";
		  			  }
			 } else {
                  ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("User's Password does not exist")      
             </SCRIPT>
          <?php
			  exit(0);
			
		 } 
		  ?>
    </select></td>
  </tr>
  </br>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">
      <input type="submit" name="submit" value="Submit">
    </div></td>
    <td height="10"><input type="reset" name="reset" id="reset" value="Reset"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
</table>
</form>
</body>  
</html>  