<?php
   
    include 'header.php';
	include 'dbconnect.php';
    
	$table = 'suspicious';
	$truecount = 0;
	$falsecount = 0;
	$productSum	= 1;
	$differentialSum = 1;
	$cnt = 1;
    
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
		
		 if ((strlen($field)==strlen($text)) && (($field[strlen($field)-1])==($text[strlen($text)-1])) && ($field[0]==$text[0]) || ($field==$text))
		{
			return TRUE;
		}//endif
		else
		{
			return FALSE;
		}//endelse
	} // end function
	
	
	if(isset($_POST["subject"]) and isset($_POST["textarea"])){
		
		$threshold = $_POST["threshold"];    
		$textarea = addslashes($_POST["textarea"]);	
		//$sourceIp = $_POST["sourceIp"];
		//$sourceMac = $_SERVER["sourceMac"];
		//$destinationIp = $_POST["destinationIp"];
		$subject = $_POST["subject"];
		//$textarea = $_POST["textarea"];	
		$dateTime= date('y-m-d H:i:s');
		
			// ***** stream the sentence *****
			$textafter = wordstream($textarea);
			//echo "text after is " . $textafter . '<brs>';
			
		// cross-check the textarea with the offensive table
			$words = explode(" ",$textafter);
			foreach($words as $word) {
			  $result = mysql_query("select * from $table");
			  $count = mysql_num_rows($result);
			  if ($count <> 0)
				{	
                    //$sNdb[$cnt]; 
					//$tokendb[$cnt];
					//$spamicitydb[$cnt];
					
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
				echo $spamicity;
				//alert("hey am spamicity value" + $spamicity);
				//echo "calculated spamicity is= ". $spamicity;
				//echo "<br>productSum is =".$productSum;
				//echo "<br>differentialSum is =".$differentialSum;
			 	}

		 // *****utilize the spamicity *****
		
				if ($spamicity>=$threshold)
         {
			
            $insertMalicious=mysql_query("insert into malicious ( subject, textarea, dateTime) 
            values ('$subject', '$textarea', '$dateTime')") or 
                 die("could not insert into Drop table".mysql_error());
      ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Malicious Attack, Packet Dropped !!!"); 
			 window.location="compose.php";
			 
             </SCRIPT>
                <?php 
				
            exit(0);
            
            }else if($spamicity<=$threshold)
            {

          
				 
				   $insertPacket=mysql_query("insert into packet ( subject, textarea, dateTime) 
                                    values ('$subject', '$textarea', '$dateTime')") or 
                                     die("could not insert into Packet table".mysql_error());
            ?>
             <SCRIPT LANGUAGE="javaScript">
             alert("Packett successfully sent!!!");
			 window.location="compose.php";
			 
             </SCRIPT>
            <?php 
			
            exit(0);
	                     
		  }//endelse
	 //endelse
	 //endelse
		
	}
		 	
?>
