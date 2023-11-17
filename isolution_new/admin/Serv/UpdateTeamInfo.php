<?php
session_start();
$status='0';
$msg = "Some Error Occure";
$info=array();
$SessName=$_SERVER['HTTP_USER_AGENT']."usd_admin";

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	// $con = mysql_connect("localhost:3306","isolutio_amit","amit@#123");
	$con = mysqli_connect("localhost","root","","isolutio_isolutionsadvisor");

    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
	// mysql_select_db("isolutio_isolutionsadvisor",$con);

	$data = json_decode(file_get_contents('php://input'),true);
	date_default_timezone_set('Asia/Calcutta');
	
	$id=$_POST['id'];
	$emp_name=trim($_POST['emp_name']);
	$emp_designation=trim($_POST['emp_designation']);

	if (empty($_FILES['emp_img']['name'])) 
	{
   	$sql="UPDATE team_info SET emp_name='".$emp_name."',emp_designation='".$emp_designation."' WHERE id='$id'";
		if (mysqli_query($con,$sql)) 
	{
		 echo "Team Info Updated Successfully";
	
	}
	else
	{
		 echo "Fail";
	}
  }
	
	else if (!empty($_FILES['emp_img']['name'])) 
	{
  	$file_name = $_FILES['emp_img']['name'];
		$file_size =$_FILES['emp_img']['size'];
	  $file_tmp =$_FILES['emp_img']['tmp_name'];
	  $file_type=$_FILES['emp_img']['type'];
	  // $file_ext=strtolower(end(explode('.',$_FILES['emp_img']['name'])));
		$filename=$_FILES['emp_img']['name'];
	  $folder = "../team_images/" . time().$filename;
		move_uploaded_file($_FILES['emp_img']['tmp_name'],$folder);
	  $img_path = "team_images/" . time().$_FILES["emp_img"]["name"];
		
		$sql="UPDATE team_info SET emp_name='".$emp_name."',emp_designation='".$emp_designation."',img_path='".$img_path."' WHERE id='$id'";
		if (mysqli_query($con,$sql)) 
		{
		  echo "Team Info Updated Successfully";
		}
		else
		{
			echo "Fail";
		}

		}
    
}
// $json = array("success" => $status);
// header('Content-type: application/json');
// echo json_encode($json);
?>