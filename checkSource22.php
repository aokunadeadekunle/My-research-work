<title>SDN:: check Source</title>
<?php
   session_start();
   
    $host = $_POST["host"];
  	$to = $_POST["to"];
	$subject = $_POST["subject"];
    $textarea = $_POST["textarea"];	
    $dateTime= date('Y-m-d H:i:s');
    //$dateTime= date('H:i:s');
    //$dateTime= date('Y-M-D');
    
    echo "host= ".$host."</br>";
    echo "to= ".$to ."</br>";
    echo "subject= ".$subject."</br>";
    echo "textarea =".$textarea."</br>";
    echo "date= ".$dateTime;
      
   	  if(empty($host) || empty($to) || empty($subject)|| empty($textarea) || empty($dateTime))
	 {           
		  ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("All fields are required !!!")      
             </SCRIPT>
          <?php
         include'hostComposs2.php';
         exit(0);
		}
		else
		{
            $query = mysql_query("select securityStatus from flowtable2 where sourceHost = '$host' and destHost ='$to'");
			  $securityStatus = mysql_query($query);
              //echo "</br>securityStatus =".$securityStatus;
              if($securityStatus = 'blacklist')
             {
                echo "</br>securityStatus =".$securityStatus;
			   ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Malicious Attack, Packet Dropped !!!")      
             </SCRIPT>
                <?php 
             include 'hostComposs2.php'; 
              exit(0); 
			}
                       
               elseif($securityStatus = 'whitelist')
                {
                 echo "securityStatus =". $securityStatus;
                 $insertPacket=mysql_query("INSERT INTO packetFolder (sN,sourceHost, destHost, subject, textarea, dateTime) VALUES ('','$host','$to','$subject','$textarea','$dateTime')") or 
                 die("could not insert into the packet".mysql_error());
			    $alert = "<font color='red'>Packet sent.</font>";
                 exit(0);
                
				}else
			   {
                echo "</br>securityStatus =". $securityStatus;
                header("Location:checkContent2.php");
				//session_unset();  // session_destroy()
				exit(0);
               }
        }
        
?>  