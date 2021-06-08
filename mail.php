<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "suseelkumar915@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: mail@suseelkumar.com" . "\r\n" .
"CC: mail@suseelkumar.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("thankyou.html");
?>