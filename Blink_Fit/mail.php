<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD']=='POST')
{	
	require "Connect_API.php";
	
	$request = file_get_contents('php://input');
	$input = json_decode($request);
	if(!empty($input)){
		
		if(!empty($input->email)){
			$email = $input->email;
		}else{
			$email = '';
		}
		
	}
	else{
		
		if(!empty($_POST['email'])){
			$email = $_POST['email'];
		}else{
			$email = '';
		}
		
	}
$output= array();

$result = "SELECT * FROM ngo WHERE N_EID='$email'";

if($result = mysqli_query($conn,$result))
{
	$rowcount=mysqli_num_rows($result);
	
	if($rowcount>0)
	{
		$otp=rand(100000,999999);
		
		/*$to = $email;
		$subject = "One Time Password: ".$otp;
		$txt = "Password Reset";
		$headers = "From: wxyzabcd5958@gmail.com";

		mail($to,$subject,$txt,$headers);*/
			
		$sql_query1 = "UPDATE ngo SET N_OTP='".$otp."' 
			   WHERE N_EID='".$email."'";
			   
			   //send_mail($email,$sub,$mess,$email_from,$smtp_host,$smtp_port,$smtp_user,$smtp_pass,$attachment_file);

			   
			if(mysqli_query($conn,$sql_query1))
			{
				
//In your php.ini search for line

// ;extension=php_openssl.dll

//and remove ; so it becomes:

//extension=php_openssl.dll

//Then save & restart & enjoy.

//$email="19pateldev@gmail.com";

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

include  'PHPMailerAutoload.php';
include_once('class.phpmailer.php');

 require_once('class.smtp.php');

 
 //Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPSecure = 'ssl'; 
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls
//$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "helparea123@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "ishadevanshijanki";

//Set who the message is to be sent from
$mail->setFrom('helparea123@gmail.com', 'Help Area');

//Set an alternative reply-to address
$mail->addReplyTo($email, $email);

//Set who the message is to be sent to
$mail->addAddress($email, $email);

//Set the subject line
$mail->Subject = 'Your OTP for Login from Help Area';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("your OTP is : " . $otp);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
//if (!$mail->send()) {
  //  echo "Mailer Error: " . $mail->ErrorInfo;
//} else {
  //  echo "Message sent!";
//}

				//send the message, check for errors
if (!$mail->send()) {
   // echo "Mailer Error: " . $mail->ErrorInfo;
	//echo "Message sent!";
	$output["response"]="0";
	$output["message"] = "OTP not generated";
	echo json_encode($output);
}
 else {
    
	
	$output["response"]="1";
	$output["message"] = "OTP  generated";
	echo json_encode($output);
}

				
				
				
				
			}
			
			/*else {
				
			}*/
			
	
	}
	else
	{
		echo "invalid id";
	$output["response"]="0";
	$output["message"] = "Invalid Email id.";
    }
}
//echo json_encode(array("result"=>$output));
}
?>
