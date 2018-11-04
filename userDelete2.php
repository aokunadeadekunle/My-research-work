<?php
session_start();
if (empty($_SESSION['userType']) || empty($_SESSION['userId']) || empty($_SESSION['password']))
	{
	
	?>
         <SCRIPT LANGUAGE="javaScript">
           alert("You are not recognised!!!")      
        </SCRIPT>
     <?php
	exit(0);
	
	}
include 'dbconnect.php';

$userId = $_POST['userId'];
$password = $_POST['password']=="";

echo "userId ".$userId;
echo "</br> password ".$password;

		if(empty($userId) || empty($password))
		{
		?>
         <SCRIPT LANGUAGE="javaScript">
           alert("All fields must be selected!!!")      
        </SCRIPT>
     <?php
    include_once ('userDelete.php');
	exit(0);
				
		}
		else
		{
				$sql = "DELETE from users where userId = '$userId' and password = '$password'";
				mysql_query($sql) or die ('<br>Error in deleting record'); 
				

		?>
         <SCRIPT LANGUAGE="javaScript">
           alert("User Deleted Accordingly!!!")      
        </SCRIPT>
        <?php
        
        include_once ('userDelete.php');
	
		}
?>