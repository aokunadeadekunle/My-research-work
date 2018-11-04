<?php
//submit.php
$submit = $_POST['submit'];
if($submit)
{
	include('dbconnect.php');

	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$userType=$_POST['userType'];

	if($userName==""||$password==""||$userType=="")
	{
		echo "fill in the text boxes";
	}
	else
	{
        
        mysqli_query($con,"INSERT INTO password (,userName,password,userType) 
        VALUES ('','$userName','$password','$userType')");

        /*
		$query="insert into table password values ('','$userName','$password','$userType')";
		mysql_query($query) or die ("Can not insert into table Tilapia");
        */
		echo "Data entered";
	}
}
?>