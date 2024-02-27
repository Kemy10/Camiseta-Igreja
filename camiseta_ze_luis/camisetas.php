<?php

$nome = $_POST['nome'];
$tamanho = $_POST['tamanho'];
$quantidade = $_POST['qtd'];

function pedidoCamisetas($nome, $tamanho, $quantidade)
{

    $conexao = new PDO("mysql:host=localhost;dbname=db_camisetas", "root", "");
    $query = "INSERT INTO 
                pedido (nome, tamanho, quantidade)
              VALUE
                ('" . $nome . "','" . $tamanho . "','" . $quantidade . "')";
    $conexao->exec($query);
}


pedidoCamisetas($nome, $tamanho, $quantidade);

