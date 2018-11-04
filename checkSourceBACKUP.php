<title>SDN:: check Source</title>
<?php
   session_start();
   
   include('dbconnect.php');
   $table='flowtable'; 
   
   $host = $_POST["host"];
   $to = $_POST["to"];
   $subject = $_POST["subject"];
   $textarea = $_POST["textarea"];	
   $dateTime= date('y-m-d H:i:s');
  
  /*    
   $sourceIp = $_POST["sourceIp"];
   $sourceMac = $_POST["sourceMac"];
   $destinationIp = $_POST["destinationIp"];
   //$destinationMac = $_POST["destinationMac"];      
                
  */              
         
    $query2 = "select * from ipaddress where host = '$host'";
    $result2 = mysql_query($query2);
    $count2 = mysql_num_rows($result2);
	if ($count2<>0) {
	while ($row=mysql_fetch_object($result2))
     {

                $host = $row->host; 
                $sourceIp = $row->ip;
                $sourceMac = $row->mac;       
     }
                
    $query = "select * from ipaddress where host = '$to'";
    $result = mysql_query($query);
    $count = mysql_num_rows($result);
	if ($count<>0) {
	while ($row=mysql_fetch_object($result))
     {

                $to = $row->host; 
                $destinationIp = $row->ip;
                $destinationMac = $row->mac;       
     }   
                
     /*         
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
	  
      */
  
      if(empty($host) || empty($to) || empty($subject) || empty($textarea))
	  {      
          ?>
             <SCRIPT LANGUAGE="javaScript">
                  alert("All fields are required !!!")      
             </SCRIPT>
        <?php
        include'compose.php';
		}
		elseIf ($host==$to)
        {
            ?>
                <SCRIPT LANGUAGE="javaScript">
                        alert("You cannot send packet to yourself, select different destination !!!")      
                </SCRIPT>
          <?php
          
         include'compose.php';
        }else{

                $query = "select * from $table where sourceIp = '$sourceIp' and destinationIp ='$destinationIp' ";
                $result = mysql_query($query);
                $count = mysql_num_rows($result);
                if ($count<>0)
                        {//open if count
                            while ($row=mysql_fetch_object($result))
                                { //open while
                                    //$sN = $row->sN;
                                    //$sourceIp = $row->sourceIp;
                                    //$sourceMac = $row->sourceMac;
                                   // $destinationIp = $row->destinationIp;
                                    //$action = $row->action;
                                    $securityStatus = $row->securityStatus;  
                                    
                                    // close while
                                }
                               
                                //echo "</br>securityStatus= ".$securityStatus;
                                if($securityStatus=='blacklist')
                                {   // open if 2
                                   
                                    $insertMalicious=mysql_query("insert into malicious (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
                                    values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                                     die("could not insert into Drop table".mysql_error());
                                     ?>
                                            <SCRIPT LANGUAGE="javaScript">
                                                    alert("Malicious Attack, Packet Dropped !!!")      
                                            </SCRIPT>
                                    <?php 
                                    include'compose.php';
                                    
                                    // close if 2
                                }
                                  
                                if($securityStatus=='whitelist')
                                {   // open if 2
                                    //echo "</br>securityStatus Again = ".$securityStatus;
                                    $insertPacket=mysql_query("insert into packet (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
                                    values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                                     die("could not insert into Drop table".mysql_error());
                                     ?>
                                            <SCRIPT LANGUAGE="javaScript">
                                                    alert("Packet Sent Successfukky !!!")      
                                            </SCRIPT>
                                    <?php 
                                    include'compose.php';
                                    
                                    // close if 2
                                }
                        }
                                   else if($count==0)
                                   {
                                   //Add or run or execute 'checkContent.php' page to this place  
                                   include'checkContent.php';     
                                  }
                                  
                        }
           // close if count
          }
     // close else empty test  
    }
    
  ?>
   
  