<?php

if(isset($_POST['action']) && $_POST['action']!="") {

	
		$error_divstart='<p class="text-danger contact-us-error">';
		$error_divend='</p>';
		$error_divstart='<p class="text-danger">';
		$error_divend='</p>';
	
	$mailname = $_POST['name'];
	$mailemail = $_POST['email'];
	$mailphone = $_POST['phone'];
    $mailcity = $_POST['city'];
	$mailmessage = $_POST['message'];
	
	date_default_timezone_set("Asia/Kolkata");
	$maildate = date('Y-m-d h:i:s');
	
	
	/* name */
	if (!isset($mailname) || $mailname==''){
		$contacterror["name"] = $error_divstart."Please enter a name".$error_divend;
	}
	/* phone */
	else if(!isset($mailphone) || $mailphone == ''){
		$contacterror["phone"] = $error_divstart."Please enter a phone".$error_divend;
	}
	else if (!preg_match("/^\d{10}$/",$mailphone)){ 
		$contacterror["phone"] = $error_divstart."Enter  ten digit phone number".$error_divend;
	}
	else if (!preg_match("/^[a-zA-Z ]{2,50}$/",$mailname)){
		$contacterror["name"] = $error_divstart."Please enter a valid name".$error_divend;
	}
	
	/* email */
	else if(!isset($mailemail) || $mailemail == ''){
		$contacterror["email"] = $error_divstart."Please enter a email".$error_divend;
	}
	else if (!preg_match("/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/",$mailemail)){
		$contacterror["email"] = $error_divstart."Please enter a valid email".$error_divend;
	}
	/*date of Birth*/
/*	elseif (empty($maildob) ||!isset($maildob) )
	{
	$contacterror["dob"] = $error_divstart."You must supply a date of birth.";
	}
	elseif (!preg_match("/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/", $maildob)){
    $contacterror["dob"] = $error_divstart."The date of birth is not a valid date in the format YYYY-MM-DD".$error_divend;
	}*/
     
	/* city */
	else if (!isset($mailcity) || $mailcity==''){
		$contacterror["city"] = $error_divstart."Please enter city".$error_divend;
	}
	
	/* message */
	else if (!isset($mailmessage) || $mailmessage==''){
		$contacterror["message"] = $error_divstart."Please enter message".$error_divend;
	}
	elseif(str_word_count($mailmessage) > 100)
	{
		$contacterror["message"] = $error_divstart."Maximum 100 words are allowed!".$error_divend;
	}

	if(isset($contacterror["name"])|| isset($contacterror["email"])|| isset($contacterror["phone"])|| isset($contacterror["city"])|| isset($contacterror["message"])&&!empty($contacterror)){
		$response_array['status'] = 'error';
        $response_array['result'] = $contacterror;
	}
	
	else{
			
				include 'PHPMailer/PHPMailerAutoload.php';
			     $message = " 
			 <html>
			<head>
			<title>Contact Us</title>
			<style type='text/css'>
			table{font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#333; border-collapse:collapse;}
			table td{border:solid 1px #ccc; padding:5px;}
			</style>
			</head>
			<body>
			<table width='500' cellpadding='0' cellspacing='0'>
			<tr>
			<td colspan='2' align='center' bgcolor='#D71315'>
			<img src='https://www.mastervijayram.com/images/resources/logo-2.png'>
			</td>
			</tr>
			<tr>
			<td width='20%'><strong>Name:</strong></td>
			<td>$mailname</td>
			</tr>
			<tr>
			<td width='20%'><strong>Email:</strong></td>
			<td>$mailemail</td>
			</tr>
			<tr>
			<td width='20%'><strong>Phone:</strong></td>
			<td>$mailphone</td>
			</tr>
			<tr>
			<td width='20%'><strong>City Living In:</strong></td>
			<td>$mailcity</td>
			</tr>
			<tr>
			<td><strong>Message:</strong></td>
			<td>$mailmessage</td>
			</tr>
			
			</table>
			</body>
			</html>";
		 
	

		$reply_message = " 
					<html>
					<head>
					<title>Contact Us</title>
					<style type='text/css'>
					table{font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#333; border-collapse:collapse;}
					table td{border:solid 1px #ccc; padding:5px;}
					</style>
					</head>
					<body>
					<table width='500' cellpadding='0' cellspacing='0'>
					<tr>
					<td colspan='2' align='center' bgcolor='#D71315'>
					<img src='https://www.mastervijayram.com/images/resources/logo-2.png'>
					</td>
					</tr>
					<tr>
					<td colspan='3'>
					<strong>Hello $name</strong>
					<p color='#000'>Thank you for your interest in our Services.We have received following contact details from you:</p>
					</td>
					</tr>
					<tr>
					<td width='20%'><strong>Name:</strong></td>
					<td>$mailname</td>
					</tr>
					<tr>
					<td width='20%'><strong>Email:</strong></td>
					<td>$mailemail</td>
					</tr>
					<tr>
					<td width='20%'><strong>Phone:</strong></td>
					<td>$mailphone</td>
					</tr>
					

					<tr>
					<td width='20%'><strong>City Living In:</strong></td>
					<td>$mailcity</td>
					</tr>
					
					
					
					<tr>
					<td><strong>Message:</strong></td>
					<td>$mailmessage</td>
					</tr>
					
					
					<tr>
					<td colspan='3'>
					<strong>Warm Regards,</strong> 
					<p>Master Vijay Ram</p>
					<p>Website - www.mastervijayram.com</p>
					<p>Address - 5334 Yonge St, North York, ON M2N 6V1</p>
					
					<p>Phone:   +1 (437) 214-2199 </p>
					<p>Email: vijayram3312@gmail.com</p>
					</td>
					</tr>
					
					</table>
					</body>
					</html>";
					$mail = new PHPMailer;
	                $mail->SMTPDebug = 0;
	                // SMTP configuration
	                $mail->isSMTP();
                	$mail->Host = 'mail.mastervijayram.com';
                	$mail->SMTPAuth = true;
                	$mail->Username = "enquiry@mastervijayram.com";			
                	$mail->Password = "w;;)qR{GTg66";
                	$mail->SMTPSecure = 'ssl';
                	$mail->Port = 465;
                	$mail->From      = 'enquiry@mastervijayram.com';
                	$mail->FromName  = 'Master Vijay Ram';
                	$mail->Subject   = 'Quick Contact- vijayram3312@gmail.com';
                	$mail->IsHTML(true); 
                	$mail->Body      = $message;
                	//$mail->AddAddress("vijaykumar.daksha@gmail.com");
                	$mail->AddAddress("vijayram3312@gmail.com");
                	$mail->AddBCC("leads.daksha@gmail.com", "leads");
									
								
	

			if($mail->Send()){
			    $mail_reply = new PHPMailer;
            	$mail_reply->SMTPDebug = 0;
    	        $mail_reply->isSMTP();
    	        $mail_reply->Host = 'mail.mastervijayram.com';
    	        $mail_reply->SMTPAuth = true;
            	$mail_reply->Username = "enquiry@mastervijayram.com";			
            	$mail_reply->Password = "w;;)qR{GTg66";
            	$mail_reply->SMTPSecure = 'ssl';
            	$mail_reply->Port = 465;
            	$mail_reply->From      = 'enquiry@mastervijayram.com';
            	$mail_reply->FromName  = 'Master Vijay Ram';
            	$mail_reply->Subject   = 'Quick Contact- vijayram3312@gmail.com';
            	$mail_reply->IsHTML(true); 
            	$mail_reply->Body      = $reply_message;
            	$mail_reply->AddAddress($mailemail);
              	if ($mail_reply->Send()){
        			   	$response_array['status'] = 'success';
			    		}
	           
			    
			}
			else{$response_array['status'] = 'error';}
		}
}
echo json_encode($response_array);

?>