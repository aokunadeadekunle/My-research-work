<title>SDN:: check Content</title>
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
		$subject = $_POST["subject"];    
		$textarea = addslashes($_POST["textarea"]);	

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
				$sNdb[$cnt] = null; 
				$tokendb[$cnt]= null;
				$spamicitydb[$cnt]= 1;

				while ($column=mysql_fetch_object($result))
				{
					$sNdb[$cnt] = $column->sN;
					$tokendb[$cnt] = $column->token;
					$spamicitydb[$cnt] = $column->spamicity;
					$checktoken = spamcheck($tokendb[$cnt],ucwords($word));


					if ($checktoken == TRUE){
							// start calculation from here
						$productSum *= $spamicitydb[$cnt];

							// echo "The Product sum is " .$productSum;

						$differentialSum *= (1-$spamicitydb[$cnt]);

							// echo "The Differential Sum is " . $differentialSum;
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
				// / echo "The Spamicity is " .$spamicity;
				//alert("hey am spamicity value" + $spamicity);
				//echo "calculated spamicity is= ". $spamicity;
				//echo "<br>productSum is =".$productSum;
				//echo "<br>differentialSum is =".$differentialSum;
					}

		 // *****utilize the spamicity *****
					if($spamicity < 0.5)
					{
						$insertPacket=mysql_query("insert into packet ( subject, textarea, spamicity, dateTime) 
							values ('$subject', '$textarea', '$spamicity', '$dateTime')") or 
						die("could not insert into Packet table".mysql_error());
						
						echo("Packett successfully sent!!!");
						header('location:compose.php');
						
						
		  			}		

					else if ($spamicity >= 0.5){
						$insertMalicious=mysql_query("insert into malicious ( subject, textarea, spamicity, dateTime) 
							values ('$subject', '$textarea','$spamicity', '$dateTime')") or 
						die("could not insert into Drop table".mysql_error());

						echo("Malicious Attack, Packet Dropped !!!"); 
						header('location:compose.php');

					}

				}
		
		

		
		
		





		?>
