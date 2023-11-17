<?php
session_start();
$SessName=$_SERVER['HTTP_USER_AGENT']."usd_admin";
$status=0;
$msg = $_SERVER['REQUEST_METHOD'];
// "Some Error Occure";
$info=array();
	unset($_SESSION[$SessName]);
	$status=1;
	$msg="Logout Successfully";

$json = array("success" => $status,"msg" => $msg);
header('Content-type: application/json');
echo json_encode($json);
?>