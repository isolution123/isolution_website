<?php
	require_once("function.php");
	$page=isset($_GET['page'])?$_GET['page']:'newslist';
	if ($loginstatus) 
	{
		if ($page=='login') 
		{			
			$page='newslist';
		}
	}
	else
	{
		$page='login';
	}
	require_once("header.php");
	if (file_exists($page.".php")) 
	{
		require_once($page.".php");
	}
	require_once("footer.php");
?>