<?php 


    $email = $_POST["email"];
    $message = $_POST["message"];

    $err = '';
    if (trim($email) == "") 
        $err = "Введите вашь email";
    else if (trim($message) == "") 
        $err = "Введите само сообщение";
    else if(strlen($message) < 10) 
        $err = "Сообщение должно быть больше 10 символов";

    if ($err != '') {
        echo $err;
        exit;
    }

    $subject = '=?utf-8?B?'.base64_encode("Тестовое сообщение").'?=';
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail("freyzan2006@gmail.com", $subject, $message, $headers);

    header("Location: /about.php");