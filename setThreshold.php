<title>SDN:: Set Threshold Page</title>
<?php
session_start();
if(isset($_POST['submit'])){
    $threshold = $_POST['threshold'];
    $_SESSION["threshold"] = $threshold;
    header('Location:checkSource.php');
   
}
 
include'dbconnect.php';
include'header.php';
$table = 'threshold';
?>
<style type="text/css">

body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #0000FF;
}

</style>


           <a href=interfaceAdmin.php>Home Page</a>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          
           <a href=aboutUs.php>About Us</a>&nbsp
           <a href=contact.php>Contact Us</a>&nbsp
           <a href=index.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp



    <table >
        
       <div align="center"> <font color="blue">Set Threshold</font color="blue"></div></br>
       <form method="POST" action="" name="threshold" id="threshold">
               
        <input type="radio" name="threshold" id="minimum" value="0.2"/>Minimum &nbsp &nbsp
        <input type="radio" name="threshold"  id="medium"value="0.3"/>Medium &nbsp &nbsp
        <input type="radio" name="threshold"  id="maximum"value="0.5"/>Maximum</td></tr>
         
              
        <tr>
        <td>
         <input type="submit" name="submit" value="Set threshold"/>&nbsp &nbsp &nbsp &nbsp
         <input type="reset" name="reset" value="Reset"/>
		</td>
		</tr>
             
        
        </form>
    </table>
    </div>  

</body>
</html>
