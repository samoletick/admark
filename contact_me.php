<?php
header('Content-Type: text/html; charset=utf-8');
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Форма не заполнена!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'askar@admark.me'; // put your email
$email_subject = "Форма обратной связи с сайта:  $name";
$email_body = "У вас новое сообщение. \n\n".
				  "Вот детали:\n \nName: $name \n ".
				  "Email: $email_address\n Сообщение \n $message";
$headers = "От: help@admark.me\n";
$headers .= "Ответить: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>