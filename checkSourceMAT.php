<html>
<head>
<title>SDN:: check Source</title>
</head>
<body>
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
       // }
  
        
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
                                  
                                if($securityStatus=='Whitelist')
                                {   // open if 2
                                    //echo "</br>securityStatus Again = ".$securityStatus;
                                    $insertPacket=mysql_query("insert into packet (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
                                    values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                                     die("could not insert into Drop table".mysql_error());
                                     ?>
                                            <SCRIPT LANGUAGE="javaScript">
                                                    alert("Packet Sent Successfully !!!")      
                                            </SCRIPT>
                                    <?php 
                                    include'compose.php';
                                    
                                    // close if 2
                                }
                        }
        }
        
                                   else if($count==0)
                                   {
                                   //include'checkContent.php';      
//checkContenet start here
    
    $table2='suspicious'; 
	$truecount = 0;
	$falsecount = 0;
	$productSum	= 1;
	$differentialSum = 1;
	$cnt = 1;
    $spamicity=0;
   
  
	function wordstream($test)
	{
		$val = "";
		//echo "Original text = " . $test . '<br>';
		$delims = "!�$%^&*()}{][~@:#<>|\/�?";
		$word = strtok( $test, $delims );
		$val .= $word;
		while ( is_string( $word ) ) {
		if ( $word ) {
		}
		$word = strtok( $delims );
		$val .= $word;
		}
		//echo "Text after truncation =  " . $val . '<br>';
		return $val;
	}
	
	function spamcheck($field,$text)
	{
		
		 if ((strlen($field)==strlen($text)) && (($field[strlen($field)-1])==($text[strlen($text)-1])) && ($field[0]==$text[0]) || ($field==$text))
		{
			return TRUE;
		}//endif
		else
		{
			return FALSE;
		}//endelse
	} // end function
	
    
  	// ***** stream the sentence *****
			$textafter = wordstream($textarea);
			//echo "text after is " . $textafter . '<br>';
			
		// cross-check the textarea with the offensive table
			$words = explode(" ",$textafter);
			foreach($words as $word)
            {
			  $result = mysql_query("select * from $table2");
			  $count = mysql_num_rows($result);
			  if ($count <> 0)
				{	
                    $sNdb[$cnt]=0; 
					$tokendb[$cnt]=0;
					$spamicitydb[$cnt]=0;
					
					while ($column=mysql_fetch_object($result))
					 {
                        $sNdb[$cnt] = $column->sN;
						$tokendb[$cnt] = $column->token;
						$spamicitydb[$cnt] = $column->spamicity;
        		     	$checktoken = spamcheck($tokendb[$cnt],ucwords($word));
               
						if ($checktoken == TRUE){
							// start calculation from here
							$productSum *= $spamicitydb[$cnt];
							$differentialSum *= (1-$spamicitydb[$cnt]);
				 			$truecount++;
						}
						else 
						{
					 		$falsecount++;
						}//end else
						$cnt++;    //increment array counter
					 }//end while
					}//endif 
					else
					{
				 	 echo "<br>Table is blank!";
					 exit(0);
					 } //endelse
					}//endforeach 
					
					 
				if ($truecount == 0){
					//echo "calculated spamicity is= ". 0;
					//echo "<br>differentialSum is =". 0;
				} else
				{
				$spamicity= $productSum / ($productSum +  $differentialSum);
				
			 	}
                 
    
		 // *****utilize the spamicity *****
		echo "Spamicity Value = ".$spamicity."</br>";
		echo "Threshold Value = ".$threshold."</br>";
        
        echo "spamicity = ".$spamicity;
        if ($spamicity>=$threshold)
        {
           $insertMalicious=mysql_query("insert into malicious (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
           values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
           die("could not insert into Drop / Malicious table ".mysql_error());
           ?>
               <SCRIPT LANGUAGE="javaScript">
                     alert("Malicious Attack, Packet Dropped !!!")      
               </SCRIPT>
            <?php           
                
            $updateBlacklist=mysql_query("insert into flowtable (sN,sourceIp, sourceMac, destinationIp, action, securityStatus, updateStatus) 
            values ('', '$sourceIp', '$sourceMac','$destinationIp', 'Forward Packet to Destination', 'Blacklist', 'Updated $dateTime')") or 
                 die("could not Update FlowTable Blacklist ".mysql_error());
            
            include 'compose.php';
            exit(0);
            
            }else if($spamicity<$threshold)//if ($spamicity<$threshold)
            {
            $insertPacket=mysql_query("insert into packet (sN, sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
            values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                 die("could not insert into the packet".mysql_error());
            ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Packet successfully sent!!!")      
             </SCRIPT>
            <?php 
            
             $updateWhitelist=mysql_query("insert into flowtable (sN,sourceIp, sourceMac, destinationIp, action, securityStatus, updateStatus) 
            values ('', '$sourceIp', '$sourceMac','$destinationIp', 'Forward Packet to Destination', 'Whitelist', 'Updated $dateTime')") or 
                 die("could not Update FlowTable Whitelist ".mysql_error());
     
            
            include 'compose.php';
            //exit(0);
         
             
		  }//endelse
	
//checkContent.php end here

                                  }
                                  
                        }
           // close if count
          }
     // close else empty test  
    }
    }
  ?>
   
 </body>
 </html>