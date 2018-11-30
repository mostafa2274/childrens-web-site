<?php
include('constants.php');
$db=new PDO('mysql:host'.host,user,pass);
$db->exec("create database if not exists child COLLATE utf8_general_ci");
$db->exec("use child");
$db->exec("CREATE TABLE IF NOT EXISTS quiz(
uid int(11) not null auto_increment primary key,
q varchar(255) not null,
c1 varchar(255) not null,
c2 varchar(255) not null,
c3 varchar(255) not null,
n varchar(255) not null)");
$db->exec("INSERT INTO quiz(uid,q,c1,c2,c3,n)VALUES
(1, 'An animal begins with a letter L','lemon','lion','like','a'),
(2, 'Fruit begins with a letter O','Orange','banana','ox','b'),
(3, 'Fruit begins with a letter A','asd','apple','ahmed','c'),
(4, 'An animal begins with a letter C','coco','cat','cake','d'),
(5, 'An animal begins with a letter E','egg','elephant','equal','e')");
?>
