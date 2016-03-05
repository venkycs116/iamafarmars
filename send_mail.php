<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.

$to = "iamaformar.senthil@gmail.com";
$from = $_REQUEST['email_address'] ;
$name = "Name:".$_REQUEST['name']."</br>";
$phno = "Phone number:".$_REQUEST['phno']."</br>";
$message = $name.$phno."Message:".$_REQUEST['message'];
$subject="Contact form submission"
mail($to,$subject,$message,$from);
echo "Mail Sent. Thank you "*/

require_once "Mail.php";  
  
$from    = "venkycs116@gmail.com";  
$to      = "iamaformar.senthil@gmail.com";  
$subject = "Hi!";  
$body    = "Hi,\n\nHow are you?";  
  
/* SMTP server name, port, user/passwd */  
$smtpinfo["host"] = "ssl://smtp.gmail.com";  
$smtpinfo["port"] = "465";  
$smtpinfo["auth"] = true;  
$smtpinfo["username"] = "iamaformar.senthil@gmail.com";  
$smtpinfo["password"] = "iamaformar";  
  
$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);  
$smtp = &Mail::factory('smtp', $smtpinfo );  
  
$mail = $smtp->send($to, $headers, $body);  
  
if (PEAR::isError($mail)) {  
  echo("<p>" . $mail->getMessage() . "</p>");  
 } else {  
  echo("<p>Message successfully sent!</p>");  
 }  
?>

 
