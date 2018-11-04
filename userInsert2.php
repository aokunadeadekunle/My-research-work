 <html>
 <head>
 <title>userInsert2</title>
 </head>
 <body>
 
 
 <?php  
    //insert into the database
      
            //$submit="";
            include 'dbconnect.php';
            //$alert="<font color='red'> Fill all the fields </font>";
            //$alert2="<font color='red'>Data submitted successfully</font>";
            $submit=$_POST['submit'];
            
            if($submit)
            {
                $userName=$_POST['userName'];
                $password=$_POST['password'];
                $userType=$_POST['userType'];
                
                // check if post empty
                if($userName==""||$password==""||$userType=="")
                {
                  //if any of the field is empty Pls Print: Fill all the fields
                   include 'userInsert.php';
           ?>  
                  
                   <SCRIPT LANGUAGE="javascript">
                    alert("Fill all the fields")
                   </SCRIPT> 
                   
           <?php
                }
                else{
                    //insert into table
                    //$insertUser=mysql_query(insert into table)
                    $query=mysql_query("INSERT INTO user (sN,userName,password,userType) VALUES ('','$userName','$password','$userType')") or
                    die("Cannot insert into table".mysql_error());
                    
                   include 'userInsert.php';
             ?>      
                    
                                     
                   <SCRIPT LANGUAGE="javascript">
                    alert("Data submitted successfully")
                   </SCRIPT> 
                   
               <?php       
                }
                                       
                
            }
            
            
            
      ?>  
</body>
</html>