<?php
 
/* Задаем переменные */
$sc-info-femail = htmlspecialchars($_POST["sc-info-femail"]);
$sc-info-ftel = htmlspecialchars($_POST["sc-info-ftel"]);
$sc-info-ftarea = htmlspecialchars($_POST["sc-info-ftarea"]);
 
/* Ваш адрес и тема сообщения */
$address = "mainguy@mail.ru";
$sub = "Заявка на ремонт в СЦ Book-Service";
 
/* Формат письма */
$mes = "Заявка на ремонт в СЦ Book-Service \n
Электронный адрес отправителя: $sc-info-femail
Телефон отправителя: $sc-info-ftel
Текст сообщения: \n
$message";
 
 

if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
 	
$from  = "Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=http://biznessystem.ru');
	echo 'Письмо отправлено, через 5 секунд вы вернетесь на сайт XXX';}
else {
	header('Refresh: 5; URL=http://biznessystem.ru');
	echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>