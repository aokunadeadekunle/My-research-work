<?php
//session_start();

include 'dbconnect.php';

$userId = $_POST['userId'];
$lName = $_POST['lName'];
$fName = $_POST['fName'];
$mName = $_POST['mName'];
$eMail = $_POST['eMail'];
$phoneNo = $_POST['phoneNo'];
$password = $_POST['password'];
$userType = $_POST['userType'];
/*
echo "userId= ".$userId;
echo "</br>last name= ".$lName;
echo "</br>first name= ".$fName;
echo "</br>mid name= ".$mName;
echo "</br>e mail= ".$eMail;
echo "</br>phone No= ".$phoneNo;
echo "</br>password= ".$password;
echo "</br>userType= ".$userType;
*/
		if(empty($userId) || empty($lName) || empty($fName) || empty($eMail) || empty($phoneNo) || empty($password) || empty($userType))
		{
                ?>
                   <SCRIPT LANGUAGE="javaScript">
                    alert("ONLY Middle name can be exceptional!!!")      
                    </SCRIPT>
                <?php
				
		}
		else
		{
				$sql = "UPDATE users SET userId = '$userId', lName = '$lName', fName = '$fName', mName = '$mName', eMail = '$eMail', phoneNo = '$phoneNo', password = '$password', userType = '$userType' where userId = '$userId' ";
				mysql_query($sql) or die ('<br>Error in updating values'); 
				 ?>
                   <SCRIPT LANGUAGE="javaScript">
                    alert("User Updated Accordingly!!!")      
                    </SCRIPT>
                <?php
			
				include ('userUpdate.php');
		}
?>
