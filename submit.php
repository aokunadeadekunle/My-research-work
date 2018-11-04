<?php
//submit.php;
$submit=$_POST['submit'];
if($submit)
{
    include'dbconnect.php';
    
    $name=$_POST['name'];
    $pass=$_POST['pass'];
   
    
    if($name==" "||$pass==" ")
    {
        echo"fill in the TEXT boxes";
    }
    else{
        $query="INSERT INTO particular (name,pass) VALUES ('$name','$age','$sex')";
        $pop=mysqli_query($mysqli,$query) or die('Cannot insert into the table');
        echo"Data Entered";
    } 
  }else{
      echo"Data not submit";
  }

?>