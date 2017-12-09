<?php
include("../include/connection.php");
## проверка ошибок
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

//function formatstr($str)
//{
//    $str = trim($str);
//    $str = stripslashes($str);
//    $str = htmlspecialchars($str);
//    return $str;
//}
//
$name = trim($_POST['name']);
$phone = trim($_POST['phone']);
$local = trim($_POST['local']);
$count = trim($_POST['count_blocks']);

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$local = htmlspecialchars($local);
$count = htmlspecialchars($count);

$insert = $pdo->prepare("INSERT INTO `delivery` SET user_name=:user_name, phone=:phone, local_data=:local_data, count_blocks=:count_blocks");
$insert->bindParam(':user_name', $name);
$insert->bindParam(':phone', $phone);
$insert->bindParam(':local_data', $local);
$insert->bindParam(':count_blocks', $count);
$insert->execute();




////        уведомление на почту
require_once("../phpmailer/phpmailer/mailfunc.php");
$m_to = "BRR.RK52@GMAIL.COM"; // кому - ящик (из формы)
$m_nameto = "BRR.RK52@GMAIL.COM"; // Кому
$m_namefrom = $_POST['phone']; // Поле От в письме
$subj = "Новый запрос на доставку";
//$tmsg = $_POST['name'];
$tmsg = 'Имя клиента:  '.$name.'.  '.'Телефон:  '.$phone.'.  '.'Куда везти:  '.$local.'.  '.' Количество блоков:  '.$count;
$m_from = 'svilkov00@yandex.ru'; // от ког
$m_reply = 'svilkov00@yandex.ru'; // адрес для обратного ответа
$mail1 = phpmailer($subj, $tmsg, $m_to, $m_nameto, $m_namefrom, $m_from, $m_reply, $m_hostmail, $m_port, $m_password, $m_secure);


?>