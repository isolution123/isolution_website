
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

	$emp_name=trim($_POST['emp_name']);
	$emp_designation=trim($_POST['emp_designation']);

	$file_name = $_FILES['emp_img']['name'];
    $file_size =$_FILES['emp_img']['size'];
    $file_tmp =$_FILES['emp_img']['tmp_name'];
    $file_type=$_FILES['emp_img']['type'];
    // $file_ext=strtolower(end(explode('.',$_FILES['emp_img']['name'])));

    // echo $target_dir="./team_images/";
    // exit;
	$filename=$_FILES['emp_img']['name'];
	// $target_file=$target_dir.$filename;
    $folder = "../team_images/" . time().$filename;
	move_uploaded_file($_FILES['emp_img']['tmp_name'],$folder);

    $img_path = "team_images/" . time().$_FILES["emp_img"]["name"];
	
	$sql="INSERT INTO team_info(emp_name,emp_designation,img_path)VALUES ('$emp_name','$emp_designation','$img_path')";
	if (mysqli_query($con,$sql)) 
	{
			
		echo "Team Info Added Successfully";
		
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