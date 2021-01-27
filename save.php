<?php

include("includes/functions.php");


$sql =  "INSERT INTO clients (strName, strEmail, strTel, strPackages ) 
  VALUES ('".$_POST['strName']."','".$_POST['strEmail']."','".$_POST['strTel']."','".$_POST['strPackages']."')";
  saveData($sql);
header("location:contact.php");
?>