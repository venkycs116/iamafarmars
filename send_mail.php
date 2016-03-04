<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$to = "iamaformar.senthil@gmail.com";
$from = $_REQUEST['email_address'] ;
$name = "Name:".$_REQUEST['name']."</br>";
$phno = "Phone number:".$_REQUEST['phno']."</br>";
$message = $name.$phno."Message:".$_REQUEST['message'];
$subject="Contact form submission"
mail($to,$subject,$message,$from);
?>
