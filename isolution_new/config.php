<?php

$con=mysqli_connect("localhost:3306","amit","amit@#123","isolutio_isolutionsadvisor");
//$con=mysqli_connect("localhost","root","","usdinformatics1");
if(!$con)
{
	die("Database connection Failed1..".mysqli_error($con));
}

?>

