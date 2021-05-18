<?php
//get data from form  
$name = $_POST['firstname'];
$email= $_POST['email'];
$number= $_POST['mobilenumber'];
$message= $_POST['message'];
$to = "ultratarpaulins@gmail.com"; 
$subject = "Mail From Ultra Tarpaulins";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n mobile number = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@ultratarpaulins.com" . "\r\n" .
"CC:lemomatrix@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
