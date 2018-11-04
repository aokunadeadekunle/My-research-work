<?php
session_start();

if (empty($_SESSION['usertype']) || empty($_SESSION['userid']) || empty($_SESSION['password']))
	{
	echo "<font color='red'>You are not recognised!</font>";
	exit(0);
	}

include 'dbconnect.php';
$table = 'users';

$id = $_POST['userid'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pwd = $_POST['pwd'];
$usertp = $_POST['usertype'];

		if(empty($id) || empty($lname) || empty($fname) || empty($email) || empty($phone) || empty($pwd) || empty($usertp))
		{
				echo "<font color='red'>ONLY Middle name can be exceptional!</font>";
		}
		else
		{
				$sql = "UPDATE $table SET UserId = '$id', LName = '$lname', FName = '$fname', Email = '$email', Phone = '$phone', Password = '$pwd', UserType = '$usertp' where UserId = '$id' ";
				mysql_query($sql) or die ('<br>Error updating values'); 
				echo "<br>User Updated Accordingly!<br>";
				echo "<a href='updateuser.php'><< back</a>";
		}
?>
