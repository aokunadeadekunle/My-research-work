<?php
/*
//session_start();
$_SESSION['userName']="";
$_SESSION['password']="";
$_SESSION['userType']="";
*/
?>
<title>SDN:: User Page</title>
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
    <div align="center" >
          
            <a href=compose.php>Compose</a>&nbsp 
            <a href=inbox.php>Packet Inbox</a> &nbsp
            <a href=malicious.php>Malicious Inbox</a>&nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                
           <a href=aboutUs.php>About Us</a>&nbsp
           <a href=contact.php>Contact Us</a>&nbsp
           <a href=index.php>Logout</a>
           <a href="javascript:history.go(-1)">Back</a>&nbsp
         <P>  User Page
    </div>      
        
        
</body>
</html>