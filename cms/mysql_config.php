<?php

$host = localhost;
$dbname = creator;
$user = creator;
$pass = '12345';
$option =  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$link = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, $option);

/*$link = mysql_connect('localhost', 'creator', '12345')
    or die('Не удалось соединиться: ' . mysql_error());
mysql_query("set names 'utf8'");
mysql_select_db('creator') or die('Не удалось выбрать базу данных');*/
