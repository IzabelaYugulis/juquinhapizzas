<?php
// ip:porta, nome do bd, login e senha
$db_host = "localhost";
$db_port = 3310;
$db_name = "juquinhas";
$db_user = "IzabelaYugulis";
$db_pwd = "exxcv5xtbh";

$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);
