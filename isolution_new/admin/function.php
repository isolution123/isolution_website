<?php
session_start();
require_once("config.php");
// $SiteUrl="http://isolutionsadvisor.com";
// $ServUrl="http://isolutionsadvisor.com/Serv/";
// $SiteAdminUrl="http://isolutionsadvisor.com/admin";

// localhost data

$SiteUrl="http://localhost/isolution_new";
$ServUrl="http://localhost/isolution_new/Serv/";
$SiteAdminUrl="http://localhost/isolution_new/admin";

$GLOBALS['SiteUrl']=$SiteUrl;
$loginstatus=0;
$User_Info=array();
$SessName=$_SERVER['HTTP_USER_AGENT']."usd_admin";
if (isset($_SESSION[$SessName])) 
{
	$loginstatus=1;
	$User_Info=$_SESSION[$SessName];
	// session_destroy();
}
function getPageUrl($page)
{
	return $GLOBALS['SiteUrl']."/admin/index.php?page=".$page;
}
?>