<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

//$to = "to@example.com";
//$subject = "TEST";
//$message = "This is TEST.\r\nHow are you?";
//$headers = "From: from@example.com";
$to = $_POST["to"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$headers = "From: " . $_POST["from"];
mb_send_mail($to, $subject, $message, $headers);

echo $_POST["to"] . "<br>";
echo $_POST["subject"] . "<br>";
echo $_POST["message"] . "<br>";
echo "From: " . $_POST["from"] . "<br>";



