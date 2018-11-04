<?php
session_start();

include 'dbconnect.php';
$users = 'users';
$userTypes = 'userTypes';
?>
<title>SDN:: Add Usertype2</title>
<?php
$login=$_POST['submit'];
	if($login)
   		{
		//$users = 'users';
        //$userTypes = 'userTypes';
		$userType = $_POST['userType'];
        
        $query = mysql_query("select * from userTypes where userType = '$userType'");
			if(mysql_num_rows($query) == 0 )
			{
		
        if( ($userType=="user")||($userType == "admin")||($userType == "administration"))
           {
               $sql=mysql_query("insert into $userTypes values ('','$userType')") or 
                die("could not add to userTypes table".mysql_error());
                ?>
                 <SCRIPT LANGUAGE="javaScript">
                 alert("User type added accordingly!!!")      
                 </SCRIPT>
               <?php
                
			 	include 'addUsertype1.php';
			}else{     
          ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Unknown user type entered!!!")      
             </SCRIPT>
          <?php
         include 'addUsertype1.php';
         exit(0);
		}
            }else {
                ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("User type already exist!!!")      
             </SCRIPT>
          <?php
          include 'addUsertype1.php';
            }
	}
?>
