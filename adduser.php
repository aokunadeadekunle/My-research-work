<?php
include 'header.php';
include 'dbconnect.php';
$users = 'users';
$userTypes = 'userTypes';
?>
<title>SDN:: Add User2</title>
<?php
if(isset($_POST['submit']))
   		{
		$userId = $_POST['userId'];
		$lName = $_POST['lName'];
		$fName = $_POST['fName'];
		$mName = $_POST['mName'];
		$eMail = $_POST['eMail'];
		$phoneNo = $_POST['phoneNo'];
		$password = $_POST['password'];
		$userType = $_POST['userType'];

        if(empty($userId) || empty($lName) || empty($fName) || empty($mName) || empty($eMail) || empty($phoneNo) || empty($password) || empty($userType))
		{
		  ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("All fields are required!")      
             </SCRIPT>
          <?php
		}
		else
		{
			$query = mysql_query("select * from $users where userId = '$userId' && userType = '$userType'");
			if(mysql_num_rows($query) == 0 )
			{
				$sql=mysql_query("insert into $users (`userId`, `lName`, `fName`, `mName`, `eMail`, `phoneNo`, `password`, `userType`) values ('$userId','$lName','$fName','$mName','$eMail','$phoneNo','$password','$userType')") or 
                die("could not update user table".mysql_error());
                ?>
                 <SCRIPT LANGUAGE="javaScript">
                 alert("User added accordingly!!!")      
                 </SCRIPT>
               <?php
			 	
			}
			else
			{
			   ?>
                 <SCRIPT LANGUAGE="javaScript">
                 alert("Record Already exist!!!")      
                 </SCRIPT>
               <?php
				
            }
		}
	}
?>


<style type="text/css">
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #0000FF;
}
.style1 {
	font-size: 16px;
	font-weight: bold;
}


</style>

<div align="center" >
             
            <a href=userView.php>View user</a>&nbsp
            <a href=userUpdate.php>Update user</a>&nbsp 
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

<form method="Post"  action="<?php echo $_SERVER['PHP_SELF'];?>" name="loginForm" id="loginForm">
<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
  
  <tr bgcolor="#FFFFCC">
    <td height="10" colspan="2"><div align="center" class="style1">Add User(s)</div></td>
  </tr>
  <tr>
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">User Id</div></td>
    <td height="10"><input name="userId" type="text" id="userId"></td>
  </tr>
  <tr>
    <td height="10"><div align="right">Surname</div></td>
    <td height="10"><input name="lName" type="text" id="lName"></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">First Name </div></td>
    <td height="10"><input name="fName" type="text" id="fName"></td>
  </tr>
  <tr>
    <td height="10"><div align="right">Middle Name </div></td>
    <td height="10"><input name="mName" type="text" id="mName"></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">Email</div></td>
    <td height="10"><input name="eMail" type="text" id="eMail"></td>
  </tr>
  <tr>
    <td height="10"><div align="right">Phone Number </div></td>
    <td height="10"><input name="phoneNo" type="text" id="phoneNo"></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">Password</div></td>
    <td height="10"><input name="password" type="text" id="password"></td>
  </tr>

  <tr>
    <td width="373" height="10"><div align="right"> User Type </div></td>
    <td width="370" height="10"><select name="userType" id="userType">
    <option>- Select -</option>
	     <?php
		  // search for the user's list
       		$query = "select * from usertype";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			while ($row=mysql_fetch_object($result))
			  {
			    $tp = $row->userType;
            	echo "<option>".$tp."</option>";
		  	  }
			 } else {
	      ?>
                 <SCRIPT LANGUAGE="javaScript">
                 alert("User type does not exist!!!")      
                 </SCRIPT>
          <?php
			 exit(0);            
		 } 
		  ?>
	</select></td> 
   </tr>
  
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">
      <input type="submit" name="submit" value="Submit">
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