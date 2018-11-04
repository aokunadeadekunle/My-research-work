<title>SDN:: LoginConfirm Page</title>
<?php
include 'dbconnect.php';
$y = 'users';

$userId = $_POST['userId'];
$password = $_POST['password'];
$userType = $_POST['userType'];

//$a = "select * from $y where userId = '$userId', password = '$password' and userType = '$userType' ";

$a = "select * from $y where userId = '$userId' and password = '$password' and userType = '$userType'";

//$a = "select * from $y";

$b = mysql_query($a);
$c = mysql_num_rows($b);
if ($c <> 0){
 
				  echo "good";
                  exit(0);
}else
			{
				echo "bad";
				exit(0);
			}
  include ('testNum.php');
?>