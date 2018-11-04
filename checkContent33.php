<?php
    /*
    include 'header.php';
	include 'dbconnect.php';
    include 'host1Composs.php';
    */ 
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
	
	$ip = $_SERVER["REMOTE_ADDR"];
	$to = $_POST["to"];
	$cc = $_POST["cc"];
	$subject = $_POST["subject"];
	$textarea = addslashes($_POST["textarea"]);	

	if(empty($ip) || empty($to) || empty($cc) || empty($subject)|| empty($textarea))
	{
		$alert = "<font color='red'>All fields are necessary</font>";
	}
	else
	{		
		// ***** stream the sentence *****
			$textafter = wordstream($textarea);
			//echo "text after is " . $textafter . '<br>';
			
		// cross-check the textarea with the offensive table
			$words = explode(" ",$textafter);
			foreach($words as $word) {
			  $result = mysql_query("select * from $table");
			  $count = mysql_num_rows($result);
			  if ($count <> 0)
				{	 
					$tokendb[$cnt];
					$spamicitydb[$cnt];
					
					while ($column=mysql_fetch_object($result))
					 {
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

		 // *****utilize the spamicity *****
		 //echo $spamicity;
		 if ($spamicity<=0.5)
		 {
			 $insertHam=mysql_query("insert into hamFolder values ('','$ip','$to','$cc','$subject','$textarea')") or 
             die("could not insert into the hamFolder".mysql_error());
			 $alert = "<font color='red'>MESSAGE SENT into hamFolder.</font>";
		 }// endif
		 else 
			{
               $insertSpam=mysql_query("insert into spamFolder values ('','$ip','$to','$cc','$subject','$textarea')") or 
               die("could not insert into the spamFolder".mysql_error());
			   $alert = "<font color='red'>MESSAGE SENT into spamFolder.</font>";  
		  }//endelse
	 } //endelse
	
?>
