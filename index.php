<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['number'];
$message= $_POST['message'];
$subject= $_POST['subject'];

$to = "";
$subject = "stechsolutions23@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message = " . $message ."\r\n number  = " . $number;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers,$number);
}

?>