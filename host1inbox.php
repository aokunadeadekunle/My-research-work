
<?php
	include 'dbconnect.php';
	$sn = 1;

	$query="SELECT * FROM hamFolder order by sN desc";
	$result=mysql_query($query) or die(mysql_error());
	$numHam=mysql_num_rows($result);
	
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left'>";
	echo "<tr align='left'>
			  <th>Serial</th>
			  <th>From</th>
			  <th>TO</th>
			  <th>Carbon Copy</th>
			  <th>Subject</th>
		 </tr>";
	
	while ($row=mysql_fetch_array($result))	 {
		$ipAddress=$row['ipAddress'];
		$to=$row['to'];
		$cc=$row['cc'];
		$subject=$row['subject'];

		echo "<tr>
				  <td align='left'>$sn</td>
				  <td align='left'>$ipAddress</td>
				  <td align='left'>$to</td>
				  <td align='left'>$cc</td>
				  <td align='left'><a href='readmail1.php?subj=$subject'>$subject</a></td>  
			 <?php</tr>";
			 $sn++;

	}
	echo "</table>";
?>

