<?php
$status=0;
$msg = "Some Error Occure";
$info=array();
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
	
	$sql1="DELETE FROM news_comment WHERE id='$id'";
	if (mysql_query($sql1,$con)) 
	{
		$status=1;
		$msg="News Comment Delete Successfully.";
	}
	else
	{
		$status=0;
	//	 die('Could not delete data: ' . mysql_error());
	$msg=mysql_error($con);
	}
}
$json = array("success" => $status,"msg" => $msg,"info" => $info);
header('Content-type: application/json');
echo json_encode($json);
?>