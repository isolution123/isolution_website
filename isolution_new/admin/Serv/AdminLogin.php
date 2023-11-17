<?php
session_start();
$SessName=$_SERVER['HTTP_USER_AGENT']."usd_admin";
$status=0;
$msg = "Some Error Occure";
$info=array();
// $SiteUrl="http://localhost/USDataInformatics";

if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    
     $con = mysqli_connect("localhost","root","","isolutio_isolutionsadvisor");

if (!$con)
  {
      
  die('Could not connect: ' . mysql_error());
  }

	// mysqli_select_db("isolutio_isolutionsadvisor",$con);
 
	date_default_timezone_set('Asia/Calcutta');
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];

// $con = mysql_connect("103.21.58.5:3306", "isolutions", "isolutionsadvisor@123");
// mysql_select_db("isoluiz1_isolutionsadvisor", $con);

	$sql="SELECT * FROM users WHERE name='".$Username."'";

$res = mysqli_query($con,$sql);


	if (mysqli_num_rows($res)) 
	{
		$row=mysqli_fetch_row($res);
		$DbPassword=$row[3];
		if ($DbPassword==$Password) 
		{
			$Admin_Id=$row['id'];
			
			
			$status=1;
			$msg="Successfully Login";
			$_SESSION[$SessName]=$row;
			$_SESSION['admintimeout']=time();
		}
		else
		{
			$msg="Invalid Password";
		}
	}
	else
	{
		$msg="You are not Registered";
	}
}
$json = array("success" => $status,"msg" => $msg);
header('Content-type: application/json');
echo json_encode($json);
?>