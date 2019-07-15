<?php

$to = "test@gmail.com";
$email = $_POST['email'];

$err = "";

if (trim($_POST['name']) == "" && trim($_POST['email']) == "" && trim($_POST['message']) == "") {     /* trim обрезает пробелы*/
    $err = "Fill all fields";
} else if (trim($_POST['name']) == "") {
    $err = "Enter your name";
} else if (!((strpos($email, ".") > 0) && (strpos($email, "@") > 0))) {
    $err = "E-mail is incorrect";
} else if (trim($_POST['message']) == "") {
    $err = "Enter your message";
}

if ($err != "") {
    echo $err;
    exit;
}

$msg = $_POST['name']." has sent a message. <br> Message: ".$_POST['message'];
$subject = "=?utf-8?B?".base64_encode("Message from site about tourism")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
$success = mail ($to, $subject, $msg, $headers);

echo $success;

?>