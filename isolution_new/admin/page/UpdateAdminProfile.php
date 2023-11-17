<?php
session_start();
$status=0;
$msg = "Some Error Occure";
$info=array();
$SessName=$_SERVER['HTTP_USER_AGENT']."usd_admin";
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	require_once("../config.php");
	$data = json_decode(file_get_contents('php://input'),true);
	date_default_timezone_set('Asia/Calcutta');
	$Admin_Id=$_POST['Admin_Id'];
	$Admin_Name=$_POST['Admin_Name'];
	$Admin_EmailId=$_POST['Admin_EmailId'];
	$Admin_Password=$_POST['Admin_Password'];
	$sql="UPDATE tbl_admin SET Admin_Name='$Admin_Name',Admin_EmailId='$Admin_EmailId',Admin_Password='$Admin_Password' WHERE Admin_Id='$Admin_Id'";
	if (mysqli_query($con,$sql)) 
	{
		$status=1;
		$msg="Company Updated Successfully";
		$User_Info=$_SESSION[$SessName];
		$User_Info['Admin_Name']=$Admin_Name;
		$User_Info['Admin_Password']=$Admin_Password;
		$User_Info['Admin_EmailId']=$Admin_EmailId;
		$AdminImg="profile.jpg";
		$ProfileUrl="../admin/assets/images/profile/";
		if (file_exists($ProfileUrl.$Admin_Id.'.jpg')) 
		{
			$AdminImg=$Admin_Id.'.jpg';
		}
		else if (file_exists($ProfileUrl.$Admin_Id.'.jpeg')) 
		{
			$AdminImg=$Admin_Id.'.jpeg';
		}
		else if (file_exists($ProfileUrl.$Admin_Id.'.png')) 
		{
			$AdminImg=$Admin_Id.'.png';
		}
		if ($_FILES['userImg']['name']) 
		{
			$source=$_FILES['userImg']['tmp_name'];
			$ext =strtolower(pathinfo($_FILES['userImg']['name'], PATHINFO_EXTENSION));
			$target=$ProfileUrl.$Admin_Id.".".$ext;
			if ($AdminImg!='profile.jpg') 
			{
				unlink($ProfileUrl.$AdminImg);
			}
			if(move_uploaded_file($source, $target))
			{
				$User_Info['AdminImg']=$AdminImg;
			}
		}
		$_SESSION[$SessName]=$User_Info;
	}
	else
	{
		$status=0;
		$msg=mysqli_error($con);
	}
}
$json = array("success" => $status,"msg" => $msg,"info" => $info);
header('Content-type: application/json');
echo json_encode($json);
?>