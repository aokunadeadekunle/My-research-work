<?php
include 'dbconnect.php';
$threshold = $_POST["threshold"];

echo "Threshold value = ".$threshold;

include 'setThreshold.php';
?>