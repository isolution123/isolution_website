<?php
$servername = "localhost";
$username = "amit";
$password = "amit@#123";
$database = "isolutio_isolutionsadvisor";

$con = mysqli_connect($servername,$username,$password,$database);
if (!$con)
{
die('Could not connect: ' . mysqli_connect_error());
}
?>
