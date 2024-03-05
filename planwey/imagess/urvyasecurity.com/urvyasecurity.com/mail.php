<?php
//get data from form 
$cname = $_POST['cname'];
$name = $_POST['name'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "bajrangi@rirabh.com";
$subject = "Mail From Urvya Security";
$txt ="Cname = ". $cname . "\r\n Name = ". $name . "\r\n  Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@urvyasecurity.com";
if($phone!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>