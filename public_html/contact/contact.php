<?php

if(isset($_POST["contact-us-button"]))

{

            	
            $name    = $_POST['name'];
            $email   = $_POST['email'];
            $phone   = $_POST['phone'];
           // $dropdown     = $_POST['dropdown'];
            //$city    = $_POST['city'];
           // $country  = $_POST['country'];
            $mgs  = $_POST['message'];
			
			
			
			$website='Vijay ram';
			
            $to = "vijayram3312@gmail.com""enquiry@mastervijayram.com";
			
			
 	       
                        
			$subject="Quick Contact - Vijay ram";
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: <enquiry@mastervijayram.com><vijayram3312@gmail.com>' . "\r\n";
			$headers .= 'Cc: enquiry@mastervijayram.com' . "\r\n";		
			

			
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
					<td width='20%'><strong>Name:</strong></td>
					<td>".$name."</td>
					</tr>
					
					
					<tr>
					<td width='20%'><strong>Phone:</strong></td>
					<td>".$phone."</td>
					</tr>
					
				

                  <tr>
					<td width='20%'><strong>E-Mail:</strong></td>
					<td>".$email."</td>
					</tr>
					
				
 					
					<tr>
					<td><strong>Message:</strong></td>
					<td>".$mgs."</td>
					</tr>
					
					</table>
					</body>
					</html>

			";
                 
			$reply_to= $email;
			
			$subject1="Quick Contact - Vijay ram";
			$headers1  = 'MIME-Version: 1.0' . "\r\n";
			$headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers1 .= 'From:'.$website.' <vijayram3312@gmail.com>' . "\r\n";
			     

		$message1 = " <html>
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
		<strong>Hello $mailname</strong>
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
		<td><strong>Message:</strong></td>
		<td>$mailmessage</td>
		</tr>
		
		
		<tr>
		<td colspan='3'>
		<strong>Warm Regards,</strong> 
		<p>Master Vijay Ram</p>
		<p>Website - www.mastervijayram.com</p>
		<p>Address - 5334 Yonge St, North York, ON M2N 6V1</p>
		<p>Address - 491 Concession St, Hamilton, ON L9A 1C1</p>
		
		<p>Phone:   +1 (437) 214-2199 </p>
		<p>Email: vijayram3312@gmail.com</p>
		</td>
		</tr>
		
		</table>
		</body>
		</html>";					  
                       


			

			if(mail($to, $subject, $message, $headers)) 
			{
			   

			      mail($reply_to, $subject1, $message1, $headers1);
				  header("Location: thankyou.php");
			
			}
			

		   

}



?>
