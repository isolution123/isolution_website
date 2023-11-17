<?php

date_default_timezone_set('Asia/Kolkata');

$name=$_POST['name'];

$subject=$_POST['subject'];	
if(!isset($subject)){
	$subject= 'Inquiry from Website';
};

$email=$_POST['email'];
$number=$_POST['number'];
$msg=$_POST['msg'];
$job=$_POST['job'];

$to='careers@acetrot.com';

//sample data
$name='Rishab';
$email='sample@gmail.com';
$number='1234567890';
$msg = 'my message';
$job = 'Business development';

if(!empty($name) || !empty($email) || !empty($number))
{
	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		echo "Invalid Email";
	}
	else
	{	
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";		
		$headers .= 'From: <'.$email.'>' . "\r\n";

		$message = 'Name: '.$name.'<br>';
		$message .= 'Subject: '.$subject.'<br>';
		$message .= 'Email: '.$email.'<br>';
		$message .= 'Phone: '.$number.'<br>';				
		$message .= 'Message: '.$msg.'<br>';

		if(!empty($job)){
			// echo 'Job received';
			$target_dir="uploads/";
			$filename=$_FILES['file']['cv'];
			// $filename='Resume.pdf';
			$target_file=$target_dir.$filename;			
			$message .= '<a href="http://isolutionsadvisor.com/'.$target_file.'">Download CV</a>';
			// $message .= '<a href="https://www.acetrot.com/'.$target_file.'">Download CV</a>';
			// $message .= 'https://www.acetrot.com/'.$target_file;
		}

		if(mail($to,$subject,$message,$headers)){	
			echo "Thank you we will get back to you shortly.";	
		}else{
			echo "Something went wrong. Please try again or call us.";
		}
	}
}else
{
	echo "Please fill all fields.";
}
?>