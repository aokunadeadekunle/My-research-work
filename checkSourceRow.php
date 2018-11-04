<title>SDN:: check Source</title>
<?php
      
     
   $host = $_POST["host"];
   $to = $_POST["to"];
   $subject = $_POST["subject"];
   $textarea = $_POST["textarea"];	
   $dateTime= date('y-m-d H:i:s');
        
   $sourceIp = $_POST["sourceIp"];
   $sourceMac = $_POST["sourceMac"];
   $destinationIp = $_POST["destinationIp"];
   $destinationMac = $_POST["destinationMac"];      
                
      echo "host = ".$host;
      echo "<br>";
      echo "to = ".$to;
      echo "<br>";
      echo "<br>";
      echo "subject = ".$subject;
      echo "<br>";
      echo "text area = ".$textarea;
      echo "<br>";
      echo "date = ".$dateTime;
      echo "<br>";
      echo "source IP= ".$sourceIp;
	  echo "</br>source MAC= ".$sourceMac;
	  echo "</br>destinat IP = ".$destinationIp;
	  

      if(empty($host) || empty($to) || empty($subject) || empty($textarea))
	  {      
    
?>
             <SCRIPT LANGUAGE="javaScript">
             alert("All fields are required !!!")      
             </SCRIPT>
   <?php
          include'hostComposs.php';
		}
		else{
	If ($host==$to)
{
?>
             <SCRIPT LANGUAGE="javaScript">
             alert("You cannot send packet to yourself, select different destination !!!")      
             </SCRIPT>
          <?php
          include'login.php';
}else{
	
$query = "select * from flowtable where sourceIp = '$sourceIp' and destinationIp='$destinationIp' ";
$result = mysql_query($query);
$count = mysql_fetch_row($result);
//$count = mysql_num_rows($result);
if ($count<>0){
while ($row=mysql_fetch_object($result))
{
    $sourceIp = $row->sourceIp;
    $sourceMac = $row->sourceMac;
    $destinationIp = $row->destinationIp;
    $securityStatus = $row->securityStatus;  
    echo "</br>securityStatus= ".$securityStatus;             
 }
if( $securityStatus=="blacklist")

{
$insertDrop=mysql_query("insert into drop (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                 die("could not insert into Drop table".mysql_error());
      ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Malicious Attack, Packet Dropped !!!")      
             </SCRIPT>
                <?php 
         exit(0);
}else if($securityStatus=="whitelist")
{
 $insertPacket=mysql_query("insert into packet (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) values ('', ‘sourceIp’, ‘sourceMac’, ‘destinationIp’, ‘subject’, ‘textarea’, ‘dateTime’)") or 
                 die("could not insert into the packet".mysql_error());
 ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Packe successfully sent!!!")      
             </SCRIPT>
                <?php 
         exit(0);
 }
}
  include'hostComposs.php';      


          
  }
          
}
?>  