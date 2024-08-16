<?php
// ip:porta, nome do bd, login e senha
$base= "http://localhost/juquinhapizzas/app";
$db_host = "SG-juquinhabd-10028-mysql-master.servers.mongodirector.com";
$db_port = 3306;
$db_name = "juquinhabd";
$db_user = "sgroot";
$db_pwd = "CWMFO6YX7M,wep9o";
 
$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);
