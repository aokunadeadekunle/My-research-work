

<?php
if (isSet($_POST['submit']))
{

$b=$_POST['b'];
$c=$_POST['c'];

$answer =$b+$c;
echo "Total sum= ".$answer;
}
else{
echo "not POST";
}

?>