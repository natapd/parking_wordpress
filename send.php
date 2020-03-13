<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta carset="utf-8">
    <meta name="description" content="Охраняемая автостоянка в Санк-Петербурге, Софийская 63">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="автомобильные стоянки, автостоянки, автостоянка, автостоянка в спб, охраняемая автостоянка, платная автостоянка, стоянка, стоянка в спб, стоянки, стоянки в петербурге">
    <meta name="yandex-verification" content="81e7d780a9987ae4" />
    <title>Автопарковка Софийская 63</title>
     <link rel="canonical" href="https://sofi63.ru"/>
     <link rel="preload" href="../fonts/ptsansnarrow.woff2" as="font">
     <link rel="preload" href="../fonts/ptsansnarrowbold.woff2" as="font">
    <link href="../css/style.css?ver=3" rel="stylesheet">
    
  </head>
  <body>
<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$discr = $_POST['discr'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$discr = htmlspecialchars($discr);
$fio = urldecode($fio);
$email = urldecode($email);
$discr = urldecode($discr);
$fio = trim($fio);
$email = trim($email);
$discr = trim($discr);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("nata_pd@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email. ". Discr: ".$discr ,"From: info@sofi63.ru \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
<br>
<a href="https://sofi63.ru">Вернуться на главную страницу</a>
  </body>
  </html>	