<?php
//session_start();
$userType = $_POST['userType'];
$userId = $_POST['userId'];
echo $userType;
echo $userId;

if (empty($userType) || empty($userId))
	{
     ?>
       <SCRIPT LANGUAGE="javaScript">
       alert("You are not recognised!!!")      
       </SCRIPT>
     <?php
	//exit(0);
	}
?>

<title>SDN::User Edit3</title>
<?php
if($userType == "admin" || "administrator"){
	 include 'interfaceAdmin.php';
	}
	elseif($userId == "user"){
		include 'interfaceUsers.php';
	}
include 'dbconnect.php';
$table1 = 'usertypes';
$table2 = 'users';

// search for the existence of user in the user table
$query = "select * from $table2 where userId = '$userId' and userType = '$userType' ";
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
	$userType = $row->UserType;
  }
 } else {
     
      ?>
       <SCRIPT LANGUAGE="javaScript">
       alert("Cannot update a blank record!!!")      
       </SCRIPT>
     <?php
 
 exit(1);
 } 
?>