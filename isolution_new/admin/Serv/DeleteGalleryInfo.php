<?php
$status=0;
$msg = "Some Error Occure";
$info=array();
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	$con = mysqli_connect("localhost","root","","isolutio_isolutionsadvisor");

	// $con = mysql_connect("localhost","isolutio_amit","amit@#123");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
	// mysql_select_db("isolutio_isolutionsadvisor",$con);
	$data = json_decode(file_get_contents('php://input'),true);
	date_default_timezone_set('Asia/Calcutta');

	$id=$_POST['id'];
	
	$sql1="DELETE FROM gallery_data WHERE id='$id'";
	if (mysqli_query($con,$sql1)) 
	{
		$status=1;
		$msg="Gallery Info Delete Successfully.";
	}
	else
	{
		$status=0;
	//	 die('Could not delete data: ' . mysql_error());
	$msg=mysqli_error($con);
	}
}
$json = array("success" => $status,"msg" => $msg,"info" => $info);
header('Content-type: application/json');
echo json_encode($json);
?>