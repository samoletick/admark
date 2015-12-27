<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'askar@admark.me'; // put your email
$email_subject = "Форма обратной связи с сайта:  $name";
$email_body = "У вас новое сообщение с сайта. \n\n".
				  "Here are the details:\n Name: $name \n ".
				  "Email: $email_address\n Message \n $message";
$headers = "From: website@admark.me\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>