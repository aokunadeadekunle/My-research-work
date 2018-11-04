<?php
session_start();
?>

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

<html>
<head>
<title>test sigle pass code</title>
</title>
</head>
<body>
<FORM ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="POST">

<table width="750" border="0" align="center" cellpadding="1" cellspacing="1">
  
    
   <tr>
    <td>Ente value for B:
    <input type ="text" name="b" id="b">
    </td>
  </tr>
  
   <tr>
    <td>Ente value for C:
    <input type ="text" name="c" id="c">
    </td>
  </tr>
  
   <tr> 
    <td>  <input type="submit" name="submit" value="submit">

    <input name="Reset" type="reset" id="Reset" value="Reset"></td>
  </tr>
  
</table>
</form>



</body>
</html>

