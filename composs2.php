<?php
//composs.php;
//include'header.php';
//include'dbconnect.php';
?>
<html>
<head>
<title>SDN::Composs</title>
</head>
<body>
    <div align="center" >
       
    
            <a href=host2.php>inbox</a> &nbsp
            <a href=host3.php>spam</a>&nbsp
            
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
           <a href="javascript:history.go(-1)">back</a>&nbsp
           <a href=login.php>logout</a>
       
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                         
        <font color="blue">Host1 Composs</font color="blue"></br>
        <table align="center">
        <tr> <td>To: &nbsp &nbsp &nbsp &nbsp</td>
             <td><input type="text" name="to" value=""/>
             </td>
        </tr>
        <tr><td>Carbon copy: &nbsp &nbsp &nbsp &nbsp</td>
            <td><input type="text" name="cc" value=""/></td>
        </tr>
        <tr><td>Subject: &nbsp &nbsp &nbsp &nbsp </td>
            <td><input type="text" name="subject" value=""/></td>
        </tr>
        </table> 
        </br><textarea name="textarea" cols="60" rows="10"></textarea>
        <p align="center"><td><input type="submit" name="submit" value="Submit"/>&nbsp &nbsp 
        <input type="reset" name="reset" value="Reset"/></td></tr>
             
        
        </form>
   
 </div>      
        
        
</body>
</html>