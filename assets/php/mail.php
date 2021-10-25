<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


$to = "guffadikto12@gmail.com";

$subject = "Mail From balaram shiwakoti";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ;

$headers = "From: noreply@shiwakoti.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>