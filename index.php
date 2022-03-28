<?php

// Test from Xampp failed. But test from Sakura succeeded.

const MAILTO = "to@gmail.com";
const SUBJECT = "Thank you for the test";
$content = "This is the test sending from a rental server.\n";
$content .= "Sent the mail successfully if you read this.";

$headers = <<<HEAD
From : from@gmail.com
Return-Path: to@gmail.com
Content-Type: text/plain;charset=ISO-2022-JP
HEAD;

$is_success = mb_send_mail(MAILTO, SUBJECT, $content, $headers);

if(!$is_success) {
    die('Sending failed.');
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Sent the test mail</title>
</head>
<body>
<p>Sent a test mail.</p>
</body>
</html>