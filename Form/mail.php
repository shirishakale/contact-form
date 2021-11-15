<?php
//get data from form
$name = $_POST['name'];
$email = $_POST['emailaddress'];
$message = $_POST['message'];
$number = $_POST['number'];

$to = "shirishakale2525@gmail.com";

$subject = "Mail from Website";
$txt = "Name = " . $name . "\r\n Email = " . $email . "\r\n Message = " . $message . "\r\n Mobile Number = " . $number;
$headers = "From: noreply@yoursite.com" . "\r\n" . 
"CC: somebodyelse@example.com";
if($email!=NULL){
    MAIL($to,$subject,$txt,$headers);
}
//redirect
header("Location: Thankyou.html");
?>
