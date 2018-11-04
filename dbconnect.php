<?php
//connect to the server and database here;

//connect to the server
$localhost="localhost";
$root="root";
$password="";
$con=@mysql_connect($localhost,$root,$password) or 
die("could not connect to the server".mysql_error());

//connect to the database
$select=mysql_select_db("sdn",$con) or 
die("could not connect to the database".mysql_error());
?>