<?php 
    require_once ('./class/class.Mail.php');

    $to ="mmdsyfq48@gmail.com";
    $name= "Syafiq Ganteng";
    $subject= "Ini Email untuk test";
    $message = "Hi, <b>". $name. "</b> Apa Kabar kamu?";

    Mail::SendMail($to, $name, $subject, $message);

    echo "email Berhasil dikirim";
?>