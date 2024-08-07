<?php
// ip:porta, nome do bd, login e senha
$db_host = "localhost";
$db_port = 3306;
$db_name = "juquinhabd";
$db_user = "izabela";
$db_pwd = "senac1";
 
$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);
