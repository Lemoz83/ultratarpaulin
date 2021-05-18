<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobile'];
$message= $_POST['subject'];
$to = "ultratarpaulins@gmail.com"; 
$subject = "Mail From Ultra Tarpaulins";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile number = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@ultratarpaulins.com" . "\r\n" .
"CC:lemomatrix@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
