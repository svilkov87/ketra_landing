<?php

$host = 'localhost';
$db =   'svilkov87_ketrablocks'; //  ��� ��
$charset = 'utf8';
$user = '046606267_kb'; //  ����
$pass = 'vfvby1955'; //  ������ �����

// ����������� � �� PDO
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user, $pass, $opt);
$pdo->exec("set names utf8");

?>