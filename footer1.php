<?php

session_start();
$name1=$_POST['name1'];
$email=$_POST['email'];
$text1=$_POST['text1'];
$mes=" ";
$mailto="skarthicknathan2003@gmail.com";

$header="From:".$email;
$mail="You received a mail from".$name1."/n/n".$text1;
mail($mailto,$header,$mail);
header('location:main.html?$mes="Message Sent..."');
?>