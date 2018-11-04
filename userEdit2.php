<?php
//interfaceAdmin.php;


?>
<html>
<head>
<title>userEdit</title>
</head>
<body>
    <div align="center" >
       <img src="places-183a.jpg" alt="image" height="200" width="1000"> </img></br> 
    
            <a href=userInsert.php>Add user</a>&nbsp 
            <a href=userDelete.php>Delete user</a> &nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp 
           
           <a href="javascript:history.go(-1)">Back</a>&nbsp
           <a href=login.php>Logout</a>
        
        
        
       <?php 
       $numUser=1;
       include 'dbconnect.php';
       $query="select * from users order by sN desc";
       $result=mysql_query($query) or die(mysql_error());
       $numUser=mysql_num_rows($result);
       
       echo $numUser;
       
       ?>
        
        <table>
        <form method="POST" action="userEdit3.php">
        
        <div align="center"> <font color="blue">Edit User</font color="blue"></div></br>
        
        <tr><td>Select User:</td><td><select name ="userName" size="1"/>
        <option>- Select -</option>
      <?php
		  // search for the user's list
       		$query = "select userId from $table2 ";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if ($count<>0) {
			 while ($row=mysql_fetch_object($result))
			  {
			    $userId = $row->userId;
            	echo "<option>".$userId."</option>";
		  			  }
			 } else {
                      ?>
                        <SCRIPT LANGUAGE="javaScript">
                             alert("User's ID does not exist!!!")      
                        </SCRIPT>
                      <?php
			  exit(0);
		 } 
		  ?>
    </select>
        
        </td></tr>     
        <tr><td> <tr><td></td><td>
        <input type="submit" name="submit" value="Search"/>&nbsp &nbsp &nbsp &nbsp
        <input type="reset" name="reset" value="Reset"/></td></tr>
     
        
        
        </form>
    </table>
        
        
    </div>  
    
</body>
</html>