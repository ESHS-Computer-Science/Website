<?php

$firstname = $_Post('firstname');
$lastname = $_Post('lastname');
$subject = $_Post('subject');
$email = $_Post('email');
$reciever = "adrianosorio101@gmail.com";

mail($reciever, $subject, $message);
echo "message has been sent";
?>