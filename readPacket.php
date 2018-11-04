<title>SDN:: Read Packet Inbox</title>
<?php
include 'header.php';
include 'dbconnect.php';
$table = 'packet';
$sN = '1';
?>
<style type="text/css">
<!--
body,td,th {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: black;
}
.style1 {
	font-size: 16px;
	font-weight: bold;
}
.style16 {font-size: 14; font-weight: bold; }
-->
</style></head>

<body>
 
   <div align="center" >                      
            <a href=inbox.php>Packet Inbox</a> &nbsp
            <a href=malicious.php>Malicious Inbox</a> &nbsp
            <a href=compose.php>Compose</a>
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
    </div>         
<p>Read Packet </p>
<table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
<?php

	$par = $_GET['subj'];
	$query="SELECT subject, textarea FROM $table where id = '$par' ";
    //$query="SELECT * FROM $table where id = '$par' ";
	
	$result = mysql_query($query);
    $count = mysql_num_rows($result);
			if ($count<>0) {
	while ($row=mysql_fetch_object($result))
    {
		 ?>
        <table width="1000" border="0" cellpadding="1" cellspacing="1">
        <tr bgcolor="#CCFFCC">
        <td width="50"><span class="style16"><div align="center"><?php echo $row->subject; ?> </div></span></td>
        </tr>
        <tr bgcolor="#FFFFCC">
        <td width="800"><span class="style16"><?php echo $row->textarea;  ?></span></td>
        </tr>
		 <?php 
    }
            }
	$sN++;	 
	
    echo "</br>";
 
 ?>