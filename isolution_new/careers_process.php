<?php
	
date_default_timezone_set('Asia/Kolkata');

require_once("PHPMailer/class.phpmailer.php");
	require_once("PHPMailer/class.smtp.php");


	// include 'db.php';
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$msg=$_POST['msg'];
	// $experience=$_POST['experience']." ".$_POST['exp_details'];
	$job=$_POST['job'];
	// $current_employer=$_POST['employer1'];
	// $notice_period=$_POST['np1']." ".$_POST['np_details1'];
	// $curr_salary=$_POST['c_salary1'];
	// $exp_salary=$_POST['e_salary1'];
	

	$target_dir="upload/";
	
	 $filename=$_FILES['cv']['name'];
	 $target_file=$target_dir.$filename;
	
	$date=date("H:i:s d/m/y");

	
	if(!empty($name) || !empty($email) || !empty($number) || !empty($filename) || !empty($msg)){
		
		move_uploaded_file($_FILES['cv']['tmp_name'],$target_file);
		

		$to = 'info@isolutionsadvisor.com';			
		$subject = 'New Job Application';	
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <'.$email.'>' . "\r\n";

		$message .= 'Name: '.$name.'<br>';
		$message .= 'Email: '.$email.'<br>';
		$message .= 'Mobile: '.$number.'<br>';
		$message .= 'Job: '.$job.'<br>';
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
                        $mail->addAttachment($target_file);

        if(!$mail->Send()) {
           echo 'Mailer Error: ' . $mail->ErrorInfo;
           exit;
        }
        
        
	
		echo "<script>alert('Thank you we will get back to you shortly.');</script>";	
		echo "<script>location.href='careers.php';</script>";
	
	}
	else{
		echo "Please fill all fields.";
	}
	
?>