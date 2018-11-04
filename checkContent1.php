<?php
  //$threshold=$_GET['threshold'];
    
    //include 'header.php';
	//include 'dbconnect.php';
    //include 'host1Composs.php';
    //$threshold=$_POST['threshold'];
    $table2='suspicious'; 
	$truecount = 0;
	$falsecount = 0;
	$productSum	= 1;
	$differentialSum = 1;
	$cnt = 1;
    $spamicity=0;
   
    
    
    //$sNdb[$cnt]=0; 
	//$tokendb[$cnt]=0;
	//$spamicitydb[$cnt]=0;
      
    //$tokendb=token;
    //$spamicitydb=spamicity;
            
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
		//if($field==$text)   /* if the two are both equal
		//if($field[0]==$text[0])  /* if the first xter is both equal
		//if (($field[strlen($field)-1])==($text[strlen($text)-1]))  /* if the last xier is both equal
		//if (strlen($field)==strlen($text)) /* if the length of the string are both equal
		//|| ($field==$text)
		 if ((strlen($field)==strlen($text)) && (($field[strlen($field)-1])==($text[strlen($text)-1])) && ($field[0]==$text[0]) || ($field==$text))
		{
			return TRUE;
		}//endif
		else
		{
			return FALSE;
		}//endelse
	} // end function
	
    //$ip = $_SERVER["REMOTE_ADDR"];
	//$host = $_SERVER["host"];
	//$to = $_POST["to"];
   
        
    $textarea = $_GET['textarea'];  
    
    
	$sourceIp = $_POST["sourceIp"];
    $sourceMac = $_SERVER["sourceMac"];
	$destinationIp = $_POST["destinationIp"];
	$subject = $_POST["subject"];
	//$textarea = $_POST["textarea"];	
    $dateTime = $_POST["dateTime"];

 
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
				//echo "calculated spamicity is= ". $spamicity;
				//echo "<br>productSum is =".$productSum;
				//echo "<br>differentialSum is =".$differentialSum;
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
           
		 // *****utilize the spamicity *****
		echo "Spamicity Value = ".$spamicity."</br>";
        if ($spamicity>=$threshold)
        //if ($spamicity>=0.5)
        {
             
            $insertMalicious=mysql_query("insert into malicious (sN,sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
            values ('', '$sourceIp', '$sourceMac','$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                 die("could not insert into Drop/Malicious table".mysql_error());
      ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Malicious Attack, Packet Dropped !!!")      
             </SCRIPT>
                <?php 
                
                
             $updateBlacklist=mysql_query("insert into flowtable (sN,sourceIp, sourceMac, destinationIp, action, securityStatus) 
            values ('', '$sourceIp', '$sourceMac','$destinationIp', 'drop', 'blacklist')") or 
                 die("could not Update FlowTable".mysql_error());
    
             include 'compose.php';
            exit(0);
            
            }else if($spamicity<$threshold)
            {
            $insertPacket=mysql_query("insert into packet (sN, sourceIp, sourceMac, destinationIp, subject, textarea, dateTime) 
            values ('', '$sourceIp', '$sourceMac', '$destinationIp', '$subject', '$textarea', '$dateTime')") or 
                 die("could not insert into the packet".mysql_error());
            ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Packet successfully sent!!!")      
             </SCRIPT>
            <?php 
            
             $updateWhitelist=mysql_query("insert into flowtable (sN,sourceIp, sourceMac, destinationIp, action, securityStatus) 
            values ('', '$sourceIp', '$sourceMac','$destinationIp', 'forward packet to destination', 'whitelist')") or 
                 die("could not Update FlowTable".mysql_error());
     
            
            include 'compose.php';
            exit(0);
         
             
		  }//endelse
  ?>