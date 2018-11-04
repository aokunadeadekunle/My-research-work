<html>
<head>
<title>SDN::check Source/Content</title>
</head>
<body>
<?php
   session_start();

   include('dbconnect.php');
   $table='flowtable'; 
   $threshold = $_SESSION["threshold"];
  
    if(isset($_POST["host"]) and isset($_POST["to"]) and isset($_POST["subject"]) and isset($_POST["textarea"])){
        $host = $_POST["host"];
        $to = $_POST["to"];
        $subject = $_POST["subject"];
        $textarea = $_POST["textarea"];	
        $dateTime= date('y-m-d H:i:s');
  
  
  
  
  
  
  
  echo "welcome";
  
  
  
  
  
 } 
?>
    <SCRIPT LANGUAGE="javaScript">
        alert("All fields are necessary!!!")      
    </SCRIPT>
<?php 