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
	
    $news=array();
	$query2 = "SELECT * FROM news_comment WHERE news_id = ".$id." order by created_at desc" ;
    $res2=mysql_query($query2,$con);
    while ($row=mysql_fetch_assoc($res2)) 
    {
        $news[]=$row;
    }
    $status=1;
}
$json = array("success" => $status,"data" =>$news );
header('Content-type: application/json');
echo json_encode($json);
?>