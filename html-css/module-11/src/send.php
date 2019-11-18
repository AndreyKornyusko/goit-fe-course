<?php
// $fio = $_POST['fio'];
$email = $_POST['email'];
// $fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
// $fio = urldecode($fio);
$email = urldecode($email);
// $fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
// echo $email;
if (mail("kap86@ukr.net", "Заявка с сайта",
 "

  E-mail: ".$email ,"From: info@tvoyamebel.adr.com.ua \r\n"))
?>

 <!-- ФИО:".$fio.". -->