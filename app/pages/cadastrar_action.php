<?php
 
$nomePizza = $_POST['nomePizza'] ;
$valorPizza = $_POST['valorPizza'] ;
$tamanhoPizza = $_POST['tamanhoPizza'] ;
$descPizza = $_POST['descricaoPizza'] ;
 
echo "Dados enviados de cadastrar.php:
Nome da Pizza: {$nomePizza}, Valor da Pizza
{$valorPizza},
Tamanho da Pizza {$tamanhoPizza} e Descrição da Pizza: {$descPizza}";
var_dump($_POST);
var_dump($_GET);
 
?>