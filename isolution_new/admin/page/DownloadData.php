<?php
if (isset($_GET['path'])) 
{
	$date = date_create();
	$Filename="Report(".date_timestamp_get($date).").xls";
	header('Content-Type: application/csv');
	header('Content-Disposition: attachment; filename="'.$Filename.'"');
	header('Pragma: no-cache');
	readfile($_GET['path']);
	unlink($_GET['path']);
}
?>