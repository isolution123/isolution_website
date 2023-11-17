<?php
session_start();
$status=0;
$msg = "Some Error Occure";
$info=array();
$SessName=$_SERVER['HTTP_USER_AGENT']."usd_admin";

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	$con = mysql_connect("localhost:3306","isolutio_amit","amit@#123");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
	mysql_select_db("isolutio_isolutionsadvisor",$con);

	$data = json_decode(file_get_contents('php://input'),true);
	date_default_timezone_set('Asia/Calcutta');
	
	$id=$_POST['id'];
	$title=trim($_POST['title']);
	$short_description=trim($_POST['short_description']);
	$description=mysql_real_escape_string($_POST['description']);
	
    $description = str_replace('\n', '', $description);
    
    $description = str_replace('\r', '', $description);
    
    
    if($description=='')
    {
      $status=0;
	  $msg='test';  
	  
    }
    else
    {
	$sql="UPDATE news SET title='".$title."',short_description='".$short_description."',description='".$description."',updated_at=now() WHERE id='$id'";
	if (mysql_query($sql,$con)) 
	{
		$status=1;
		$msg="News Updated Successfully";
	
	}
	else
	{
		$status=0;
		$msg=mysql_error($con);
	}
    }
}
$json = array("success" => $status,"msg" => $msg,"info" => $info);
header('Content-type: application/json');
echo json_encode($json);
?>