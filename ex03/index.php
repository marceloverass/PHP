<!-- 3. Desenvolva uma aplicação web (“Notas do Semestre”) que calcule na nota obtida pelo
aluno ao final do semestre. Onde o usuário deve informar o nome do aluno e as quatro notas
que ele obteve no semestre. Ao final, informar o nome do aluno e sua média aritmética.!-->

<form method="get" action="index.php">

<link rel="stylesheet" href="style.css">

<header></header>

<div id="box">
    <h1> Média </h1>
    <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br><br>
    <label for="n1">1º nota: </label>
        <input type="Number" name="n1"/> <br><br>
    <label for="n2">2º nota:</label>
        <input type="Number" name="n2"/> <br><br>
    <label for="n3">3º nota:</label>
        <input type="Number" name="n3"/> <br><br>
    <label for="n4">4º nota:</label>
        <input type="Number" name="n4"/> <br><br>
    <input type="submit" value="Calcular"/>
</div>
</form>

<?php
    error_reporting(E_ERROR | E_PARSE);

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $nome = $_GET["nome"];
    $n1 = intval($n1);
    $n2 = intval($n2);
    $n3 = intval($n3);
    $n4 = intval($n4);
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    echo "<p>$nome / Média = <strong>$media</strong></p>";
?>

<footer id="foot">Desenvolvido por <p id='gambiarra'>-</p> <a href="https://github.com/marceloverass" target="_blank"> Marcelo Veras</a><p id='gambiarra'>-</p></footer>