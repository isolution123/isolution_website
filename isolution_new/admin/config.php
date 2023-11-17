<?php

//$con = mysql_connect("103.21.58.5:3306", "isolutions", "isolutionsadvisor@123");
 
 
$con = mysqli_connect("localhost","root","","isolutio_isolutionsadvisor");

if (!$con)
  {
      
  die('Could not connect: ' . mysqli_error());
  }



?>

