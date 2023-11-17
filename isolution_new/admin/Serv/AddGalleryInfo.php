
<?php
$status=0;
$msg = "Some Error Occure";
$info=array();
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	$con = mysqli_connect("localhost","root","","isolutio_isolutionsadvisor");

	// $con = mysql_connect("localhost:3306","isolutio_amit","amit@#123");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
	// mysql_select_db("isolutio_isolutionsadvisor",$con);
	
	$data = json_decode(file_get_contents('php://input'),true);
	date_default_timezone_set('Asia/Calcutta');

	$gallery_name=trim($_POST['gallery_name']);
	$gallery_order=trim($_POST['gallery_order']);
	$file_name = $_FILES['gallery_img']['name'];
    $file_size =$_FILES['gallery_img']['size'];
    $file_tmp =$_FILES['gallery_img']['tmp_name'];
    $file_type=$_FILES['gallery_img']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['emp_img']['name'])));

    // echo $target_dir="./team_images/";
    // exit;
	$filename=$_FILES['gallery_img']['name'];
	// $target_file=$target_dir.$filename;
    $folder = "../gallery_images/" . time().$filename;
	move_uploaded_file($_FILES['gallery_img']['tmp_name'],$folder);

    $img_path = "gallery_images/" . time().$_FILES["gallery_img"]["name"];
	
	$sql="INSERT INTO gallery_data(gallery_name,gallery_img,gallery_order)VALUES ('$gallery_name','$img_path','$gallery_order')";
	if (mysqli_query($con,$sql)) 
	{
			
		echo "Gallery Info Added Successfully";
		
	}
	else
	{
		echo "Fail";
	}
	
}
// $json = array("success" => $status);
// header('Content-type: application/json');
// echo json_encode($json);
?>