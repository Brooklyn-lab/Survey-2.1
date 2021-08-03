<?php
header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set("Europe/Kiev");
$email = htmlspecialchars($_POST["email"]);
$q1 = htmlspecialchars($_POST['question1']);
$q2 = htmlspecialchars($_POST['question2']);
$q2_1 = htmlspecialchars($_POST['question2_1_other']);
$q2_2 = htmlspecialchars($_POST['question2_2']);
$q2_3 = htmlspecialchars($_POST['question2_3']);
$q3 = htmlspecialchars($_POST['question3']);
$q3_1 = htmlspecialchars($_POST['question3_other']);
$q4 = htmlspecialchars($_POST['question4']);
$q4_1 = htmlspecialchars($_POST['question4_other']);
$q5 = htmlspecialchars($_POST['question5']);
$q5_1 = htmlspecialchars($_POST['question5_other']);
$q6 = htmlspecialchars($_POST['question6']);
$q6_1 = htmlspecialchars($_POST['question6_other']);
$q7 = htmlspecialchars($_POST['question7']);
$q7_1 = htmlspecialchars($_POST['question7_other']);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
// $myemail = "funfot@ya.ru"; // e-mail администратора

// Отправка письма администратору сайта

// $tema = "Тема письма админу";
// $message_to_myemail = "Текст письма:
// <br><br>
// Имя: $name<br>
// E-mail: $email<br>
// Телефон: $tel<br>
// Чек-бокс: $check<br>
// Радио: $radio<br>
// Источник (ссылка): $refferer
// ";

// mail($myemail, $tema, $message_to_myemail, "From: Sitename <reg@wayup.in> \r\n Reply-To: Sitename \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );

// Отправка письма пользователю

// $tema = "Тема письма клиенту";
// $message_to_myemail = "
// Текст письма<br>
// Файл: <a href='http://numbers.andrewgavrilov.me/form/files/ripple.zip' download>Название файла</a>

// ";
// $myemail = $email;
// mail($myemail, $tema, $message_to_myemail, "From: Sitename <reg@wayup.in> \r\n Reply-To: Sitename \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );

// Сохранение инфо о лидах в файл leads.xls

$d = fopen("leads.xls", "a+");
fwrite($d," <tr>");     
fwrite($d," <td>$email</td> <td>$q1</td> <td>$q2</td> <td>$q2_1</td> <td>$q2_2</td> <td>$q2_3</td> <td>$q3</td> <td>$q3_1</td> <td>$q4</td> <td>$q4_1</td> <td>$q5</td> <td>$q5_1</td> <td>$q6</td> <td>$q6_1</td> <td>$q7</td> <td>$q7_1</td> <td>$refferer</td> <td>$date / $time</td>"); 
fwrite($d," </tr>");  
fwrite($d,"\n ");    
fclose($d);