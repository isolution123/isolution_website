
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

	$title=trim($_POST['title']);
	$short_description=mysql_real_escape_string($_POST['short_description']);
	$description=mysql_real_escape_string($_POST['description']);

	
	$sql="INSERT INTO news(title,short_description,description)VALUES ('$title','$short_description','$description')";
	if (mysql_query($sql,$con)) 
	{
			
		$status=1;
		$msg="News Added Successfully";
		
	}
	else
	{
		$status=0;
		$msg=mysql_error($con);
	}
	
}
$json = array("success" => $status,"msg" => $msg,"info" => $info);
header('Content-type: application/json');
echo json_encode($json);
?>