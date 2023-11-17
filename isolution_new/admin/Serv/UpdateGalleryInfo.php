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
	

	if(isset($_POST['gallery_name']) && !empty($_POST['gallery_name']))
	{
		$gallery_name=$_POST['gallery_name'];
	}
	else
	{
		$gallery_name="fail";
	}

	$gallery_order=trim($_POST['gallery_order']);

	if (empty($_FILES['gallery_img']['name'])) 
	{
   	$sql="UPDATE gallery_data SET gallery_name='".$gallery_name."' ,gallery_order='".$gallery_order."' WHERE id='$id'";
		if (mysqli_query($con,$sql)) 
	{
		 echo "Gallery Info Updated Successfully";
	
	}
	else
	{
		 echo "Fail";
	}
  }
	
	else if (!empty($_FILES['gallery_img']['name'])) 
	{
  	$file_name = $_FILES['gallery_img']['name'];
	$file_size =$_FILES['gallery_img']['size'];
    $file_tmp =$_FILES['gallery_img']['tmp_name'];
    $file_type=$_FILES['gallery_img']['type'];
	// $file_ext=strtolower(end(explode('.',$_FILES['emp_img']['name'])));
	$filename=$_FILES['gallery_img']['name'];
	$folder = "../gallery_images/" . time().$filename;
	move_uploaded_file($_FILES['gallery_img']['tmp_name'],$folder);
	$img_path = "gallery_images/" . time().$_FILES["gallery_img"]["name"];
		
	$sql="UPDATE gallery_data SET gallery_name='".$gallery_name."',gallery_order='".$gallery_order."',gallery_img='".$img_path."' WHERE id='$id'";
		if (mysqli_query($con,$sql)) 
		{
		  echo "Gallery Info Updated Successfully";
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