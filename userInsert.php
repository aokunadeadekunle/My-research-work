<?php
//interfaceAdmin.php;

?>
<html>
<head>
<title>userInsert</title>
</head>
<body>
    <div align="center" >
       <img src="places-183a.jpg" alt="image" height="200" width="1000"> </img></br> 
    
            <a href=userUpdate.php>Update user</a>&nbsp 
            <a href=userDelete.php>Delete user</a> &nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp 
           <a href=interfaceAdmin.php>Home Page</a>&nbsp 
           <a href="javascript:history.go(-1)">Back</a>&nbsp
           <a href=index.php>Logout</a>
        
        <table>
        <form method="POST" action="userInsert2.php">
        
        <?php 
        //echo $_SERVER['PHP_SELF'];
        ?>
        
        <div align="center"> <font color="blue">Add User</font color="blue"></div></br>
        
        <tr><td>User name:</td><td><input type="text" name="userName" value=""/></td></tr>
        <tr><td>Password:</td><td><input type="password" name="password" value=""/></td></tr>
        <tr><td>Select User type:</td><td>
        <input type="radio" name="userType"  value="User"/>User &nbsp &nbsp
        <input type="radio" name="userType"  value="Admin"/>Admin</td></tr>
      
        
        <tr><td></td><td>
        <input type="submit" name="submit" value="Submit"/>&nbsp &nbsp &nbsp &nbsp
        <input type="reset" name="reset" value="Reset"/></td></tr>
             
        
        </form>
    </table>
        
        
    </div>  
    
</body>
</html>