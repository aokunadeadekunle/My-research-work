<title>SDN:: check Source</title>
<?php
   session_start();

   include('dbconnect.php');
   $table='flowtable'; 
   
     if(isset($_POST["host"]) and isset($_POST["to"]) and isset($_POST["subject"]) and isset($_POST["textarea"])){
        $host = $_POST["host"];
        $to = $_POST["to"];
        $subject = $_POST["subject"];
        $textarea = $_POST["textarea"];	
        $dateTime= date('y-m-d H:i:s');
        
        
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
                            
      // if(empty($host) || empty($to) || empty($subject) || empty($textarea)) {      
          
               If ($host==$to)
                {
                     ?>
                         <SCRIPT LANGUAGE="javaScript">
                                alert("You cannot send packet to yourself, select different destination !!!")      
                        </SCRIPT>
                    <?php
          
                     include'compose.php';
                }
            }else{

                $query = "select * from $table where sourceIp = '$sourceIp' and destinationIp ='$destinationIp' ";
                $result = mysql_query($query);
                $count = mysql_num_rows($result);
                if ($count<>0)
                      {//open if count
                            while ($row=mysql_fetch_object($result))
                                { //open while
                                    
                                    $securityStatus = $row->securityStatus;  
                                  
                                } // close while
                               
                                //echo "</br>securityStatus= ".$securityStatus;
                             if($securityStatus=='Blacklist')
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
                                  
                             elseif($securityStatus=='Whitelist')
                                {   // open if 2
                                    //echo "</br>securityStatus Again = ".$securityStatus;
                                    $insertPacket=mysql_query("insert into packet (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
                                    values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                                     die("could not insert into Drop table".mysql_error());
                                  }
                                     ?>
                                            <SCRIPT LANGUAGE="javaScript">
                                                    alert("Packet Sent Successfully !!!")      
                                            </SCRIPT>
                                    <?php 
                                   // include'compose.php';
                                    
                                }          
        
                                }
        
                                   if($count==0)
                                   {
                                   include'checkContentMATT.php';      
                                   //checkContenet start here
                                   }
            }
        
     }
     unset ($POST);
     ?>
             <SCRIPT LANGUAGE="javaScript">
                  alert("All fields are required !!!")      
             </SCRIPT>
        <?php
        include'compose.php';
		exit(0);
        
  ?>
