<title>SDN:: Login Page</title>
<?php
include'dbconnect.php';
include'header.php';
$userType = 'userType';
?>
<style type="text/css">
<!--
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #0000FF;
}
-->
</style>

    <table >
        
        <div align="center"> <font color="blue">Login</font color="blue"></div></br>
       <form method="POST" action="" name="loginForm" id="loginForm">
        
       <!-- <form method="POST" action="testNum.php" name="loginForm" id="loginForm"> -->   
        <tr><td>User Id:</td><td><input type="text" name="userId" value=""/></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password" value=""/></td></tr>
        <tr><td>Select User type:</td><td>
         
        <input type="radio" name="userType" value="User" required/>User &nbsp &nbsp
        <input type="radio" name="userType"  value="Admin" required/>Admin</td></tr>
         
              
        <tr>
        <td></td>
        <td>
         <input type="submit" name="submit" value="Login"/>&nbsp &nbsp &nbsp &nbsp
         <input type="reset" name="reset" value="Reset"/></td></tr>
             
        
        </form>
    </table>

	<?php
		if(isset($_POST['submit'])){
			if($_POST['userType'] == 'User'){
				$loc = "loginConfirm3.php?userId=".$_POST['userId']." &password=".$_POST['password']." &userType=".$_POST['userType'];
			}else{
				$loc = "loginConfirm2.php?userId=".$_POST['userId']." &password=".$_POST['password']." &userType=".$_POST['userType'];
			}
				header('location:'.$loc);
		}
	?>

    </div>    
    
</body>
</html>