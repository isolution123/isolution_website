<?php


date_default_timezone_set('Asia/Kolkata');

if(!empty($_POST['rate'])){
    $post_id = $_POST['post_id'];
    $rating_default_number = 1;
    $rate = $_POST['rate'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $con = mysql_connect("localhost:3306","isolutio_amit","amit@#123");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }
	mysql_select_db("isolutio_isolutionsadvisor",$con);
	

    $ratingRow=array();
    $query = "INSERT INTO news_comment (news_id, rating, name, comment, email, created_at) VALUES(".$post_id.",'".$rate."','".$name."','".$comment."','".$email."','".date("Y-m-d H:i:s")."')";
        
        
  if (mysql_query($query,$con)) 
	{
			
		$status=1;
		$msg="Review Added Successfully";
		$news=array();
		$query2 = "SELECT * FROM news_comment WHERE news_id = ".$post_id." order by created_at desc" ;
        $res2=mysql_query($query2,$con);
        while ($row=mysql_fetch_assoc($res2)) 
        {
            $news[]=$row;
        }
      
		
	}
	else
	{
		$status=0;
		$msg=mysql_error($con);
	}
    
    
   
}

 $json = array("success" => $status,"msg" => $msg,"info" => $info,"data"=>json_encode($news));
header('Content-type: application/json');
echo json_encode($json);

?>