<title>SDN:: LoginConfirm Page</title>
<?php

session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$_SESSION['ip']= $ip;
$_SESSION['cmpnm']=gethostbyaddr($ip);
//
$_SESSION["threshold"] = 0.5;

//echo $ip;

include 'dbconnect.php';
$users = 'users';

if(isset($_GET["userId"]) and isset($_GET["password"]) and isset($_GET["userType"])){
        $userId = $_GET['userId'];
		$password = $_GET['password'];
		$userType = $_GET['userType'];


if($query = "select * from $users where userId = '$userId' and password = '$password' and userType = '$userType' ")
{
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    if (($count<>0) && ($userType=='User'))
    {
    
                    //echo "</br>userType=*** ".$userType;       
                    include ('interfaceUser.php');
                    exit(0);
    }
}
}
				
  ?>
     <SCRIPT LANGUAGE="javaScript">
          alert("User does not exist!!!") 
		  history.back()     
     </SCRIPT>
  <?php
  include'index.php';
  exit(0);   
?>