<?php
include('dbconnect.php');
include('header.php');
$_SESSION['userId'] = $_POST['userId'];
$_SESSION['password'] = $_POST['password'];

?>
<html>
<head>
<title>SDN::User Update2</title>
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
              
            <a href="javascript:history.go(-1)">Back</a>&nbsp
            <a href=login.php>Logout</a>
            <p> Update User(s) Page</p>
<br>

<?php
//include 'dbconnect.php';

$userId = $_SESSION['userId'];
$password = $_SESSION['password'];

// search for the existence of user in the user table
$query = "select * from users where userId = '$userId' and password = '$password' ";
$result = mysql_query($query);
$count = mysql_num_rows($result);
if ($count<>0) {
 while ($row=mysql_fetch_object($result))
  {
    $userId = $row->userId;
	$lName = $row->lName;
	$fName = $row->fName;
	$mName = $row->mName;
	$eMail = $row->eMail;
	$phoneNo = $row->phoneNo;
	$password = $row->password;
	$userType = $row->userType;
  }
 } else {
     
      ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Cannot update a blank record!!!")      
             </SCRIPT>
          <?php
          
	 exit(0);
 } 
?>
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
<form method="post"  action="userUpdate3.php" name="userUpdate" id="userUpdate">
<table width="750" border="0" align="center" cellpadding="1" cellspacing="1">
  <tr bgcolor="#FFFFCC">
    <td height="10" colspan="2"><div align="center" class="style1"></div></td>
    </tr>
  <tr>
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">User Id:</div></td>
    <td height="10"><input name="userId" type="text" id="userId" value="<?php echo $userId ?>"></td>
  </tr>
  <tr>
    <td height="10"><div align="right">Surname:</div></td>
    <td height="10"><input name="lName" type="text" id="lName" value="<?php echo $lName ?>"></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">First Name: </div></td>
    <td height="10"><input name="fName" type="text" id="fName" value="<?php echo $fName ?>"></td>
  </tr>
  <tr>
    <td height="10"><div align="right">Middle Name: </div></td>
    <td height="10"><input name="mName" type="text" id="mName" value="<?php echo $mName ?>"></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">Email:</div></td>
    <td height="10"><input name="eMail" type="text" id="eMail" value="<?php echo $eMail ?>"></td>
  </tr>
  <tr>
    <td height="10"><div align="right">Phone Number: </div></td>
    <td height="10"><input name="phoneNo" type="text" id="phoneNo" value="<?php echo $phoneNo ?>"></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10"><div align="right">Password:</div></td>
    <td height="10"><input name="password" type="text" id="password" value="<?php echo $password ?>"></td>
  </tr>

  <tr>
    <td width="373" height="10"><div align="right"> User Type: </div></td>
    <td width="370" height="10"><select name="userType" id="userType">
    <option selected><?php echo $userType ?></option>
	  <?php
		  // search for the user's list
       		$query = "select * from usertype";
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
             alert("User's Type does not exist!!!")      
             </SCRIPT>
             <?php
			 exit(0);
		 } 
		  ?>
	</select>	</td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td height="10" colspan="2">
      <div align="center">
        <input name="submit" type="submit" id="submit" value="Update User">
      </div></td>
    </tr>
  <tr>
    <td height="10" colspan="2">&nbsp;</td>
  </tr>
</table>
</form>