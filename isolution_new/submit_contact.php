<?php



date_default_timezone_set('Asia/Kolkata');

require_once("PHPMailer/class.phpmailer.php");
	require_once("PHPMailer/class.smtp.php");

 $name=$_POST['name'];

 $subject=$_POST['subject'];	
 if(!isset($subject)){
 	$subject= 'Inquiry from Website';
 };

 $email=$_POST['email'];
 $number=$_POST['number'];
 $msg=$_POST['msg'];
 

 	$message = 'Name: '.$name.'<br>';
	$message .= 'Subject: '.$subject.'<br>';
		 $message .= 'Email: '.$email.'<br>';
		 $message .= 'Phone: '.$number.'<br>';				
		 $message .= 'Message: '.$msg.'<br>';
	
	$mail= new PHPMailer();
					//	$mail->IsSMTP();
					//	 $mail->SMTPDebug = 4;
						$mail->Host = "smtp.gmail.com";
						$mail->SMTPAuth   = true;       
						$mail->SMTPSecure = "tls";    
						$mail->Port       = 587; 
						$mail->Username   = "isolutionsadvisors@gmail.com";
						$mail->Password   = "amitvadher143"; 
						$mail->SetFrom('isolutionsadvisors@gmail.com','ISolutions Advisor');
						$mail->Subject    = $subject;
						//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
						$mail->MsgHTML($message);
						$mail->AddAddress('info@isolutionsadvisor.com', "John Doe");


if(!$mail->Send()) {
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'We have received your inquiry and we will get back to you soon.';



// $name=$_POST['name'];

// $subject=$_POST['subject'];	
// if(!isset($subject)){
// 	$subject= 'Inquiry from Website';
// };

// $email=$_POST['email'];
// $number=$_POST['number'];
// $msg=$_POST['msg'];
// $job=$_POST['job'];

// $to='amitvadher140@gmail.com';

// //sample data
// $name='amit';
// $email='info@isolutionsadvisor.com';
// $number='1234567890';
// $msg = 'my message';
// $job = 'Business development';

// if(!empty($name) || !empty($email) || !empty($number))
// {
// 	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
// 	{
// 		echo "Invalid Email";
// 	}
// 	else
// 	{	
		// $headers = "MIME-Version: 1.0" . "\r\n";
		// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";		
		// $headers = 'From:'.$email. "\r\n";

		// $message = 'Name: '.$name.'<br>';
		// $message .= 'Subject: '.$subject.'<br>';
		// $message .= 'Email: '.$email.'<br>';
		// $message .= 'Phone: '.$number.'<br>';				
		// $message .= 'Message: '.$msg.'<br>';

		// if(!empty($job)){
			// echo 'Job received';
			// $target_dir="uploads/";
			// $filename=$_FILES['file']['cv'];
			// $filename='Resume.pdf';
			// $target_file=$target_dir.$filename;			
			// $message .= '<a href="http://isolutionsadvisor.com/'.$target_file.'">Download CV</a>';
			// $message .= '<a href="https://www.acetrot.com/'.$target_file.'">Download CV</a>';
			// $message .= 'https://www.acetrot.com/'.$target_file;
		// }

		// if(mail($to,$subject,$message,$headers)){	
		// 	echo "Thank you we will get back to you shortly.";	
		// }else{
		 	// echo "Something went wrong. Kindly call us.";
		//  }
// 	}
// }else
// {
// 	echo "Please fill all fields.";
// }
?>