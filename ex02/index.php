<!-- 2. Desenvolva uma aplicação web (“Salário Vendedor”) para calcular o salário de vendedores,
onde o usuário deve informar o nome do vendedor, seu salário (R$) fixo e o total (R$) de
vendas efetuadas. Sabendo que esse vendedor ganha 15% de comissão sobre as vendas
efetuadas. Ao final deve ser apresentado o nome do vendedor, seu salário fixo, a comissão
e o salário no final do mês.!-->

<form method="get" action="index.php">

<link rel="stylesheet" href="style.css">

<header> <header>

<div id="box">
<h1>Salário Vendedor</h1>
<label for="nome">Nome: </label> 
    <input type="text" name="nome" id="nome"><br><br>
<label for="txtsal">Salário: </label>
    <input type="number" name="txtsal" id="txtsal"><br><br>
<label for="vendas">Vendas:</label>
    <input type="number" name="txtvendas" id="txtvendas"><br><br>
<input type="submit" value="Calcular" id="btn"> <br><br>
</div>

<?php

error_reporting(E_ERROR | E_PARSE);

    $nome = $_GET["nome"];
    $salario = $_GET["txtsal"];
    $vendas = $_GET["txtvendas"];
    $salario = intval($salario);
    $vendas = intval($vendas);
    $comissao = $vendas * 1.15;
    $sal = sprintf('%.2f', $salario);
    $comiss = sprintf('%.2f', $comissao);
    $salariofinal = $sal + $comiss;
    $salariofin = sprintf('%.2f', $salariofinal);
    echo "<p>Vendedor: $nome <br><br> Salário: R$$sal<br><br> Comissão: R$$comiss <br><br> Salário Final: R$$salariofin</p>";
?>

<footer id="foot">Desenvolvido por <p id='gambiarra'>-</p> <a href="https://github.com/marceloverass" target="_blank"> Marcelo Veras</a><p id='gambiarra'>-</p></footer>