<title>SDN:: LoginConfirm Page</title>
<?php

session_start();

include 'dbconnect.php';
$users = 'users';
/*
if(isset($_POST["userId"]) and isset($_POST["password"]) and isset($_POST["userType"]) a)){
        $host = $_POST["host"];
        $to = $_POST["to"];
        $subject = $_POST["subject"];
        $textarea = $_POST["textarea"];	
        $dateTime= date('y-m-d H:i:s');
*/
$userId = $_POST['userId'];
$password = $_POST['password'];
$userType = $_POST['userType'];

/*
echo "userId= ".$userId;
echo "</br>password= ".$password;
echo "</br>user Type= ".$userType;
*/

if(empty($userId) || empty($password) || empty($userType))
{
		  ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("All fields are required!!!")      
             </SCRIPT>
          <?php
          include'login.php';
		  exit(0);
}else if($query = "select * from $users where userId = '$userId' and password = '$password' and userType = '$userType' ")
{
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
    if (($count<>0) && ($userType=='User'))
    {
    
                    //echo "</br>userType=*** ".$userType;       
                    include ('interfaceUser.php');
                    exit(0);
    }else if(($count<>0) && ($userType=='Admin'))
                    { 
            
                            //echo "</br>userType=*** ".$userType;  
				            include ('interfaceAdmin.php');
                            exit(0);
                    }
}

				
  ?>
     <SCRIPT LANGUAGE="javaScript">
          alert("User does not exist!!!")      
     </SCRIPT>
  <?php
  include'login.php';
  exit(0);

     
   
?>