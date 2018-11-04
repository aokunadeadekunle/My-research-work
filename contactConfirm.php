<?php
include 'dbconnect.php';
$table= 'contact';

     $from = $_POST['from'];
     $subject = $_POST['subject'];
     $textarea = $_POST['textarea'];
     
      if($from == "" || $subject== "" || $textarea == "")
           {
                ?>
                 <SCRIPT LANGUAGE="javaScript">
                 alert("all fields are necessary!!!")      
                 </SCRIPT>
     <?php
     include'contact.php';
           }else{
    $sql=mysql_query("insert into $table values ('','$from','$subject','$textarea' )") or
    die("could not update user table".mysql_error());
    ?>
                 <SCRIPT LANGUAGE="javaScript">
                 alert("Message sent accordingly!!!")      
                 </SCRIPT>
     <?php
       include'contact.php';
           } 
  ?>