<!--1. Desenvolva uma aplicação web (“Consumo Médio”) para determinar o consumo médio de
um automóvel, onde o usuário deve informar a distância (km) total percorrida pelo o
automóvel e o total de combustível (litros) gasto.  !-->

<form method="get" action="index.php">

<link rel="stylesheet" href="style.css">

<header> </header>
<div id="box">
<h1>Consumo Médio</h1>
<label for="txtdist">Distância percorrida: </label>
    <input type="number" name="txtdist" id="txtdist"> Km <br><br>
<label for="txtlitros">Combustível gasto: </label>
    <input type="number" name="txtlitros" id="txtlitros"> L <br><br>
<input type="submit" value="Calcular" id="btn"><br><br>
</div>

<?php

    error_reporting(E_ERROR | E_PARSE);
    $distancia = $_GET["txtdist"];
    $litros = $_GET["txtlitros"];
    $distancia = intval($distancia);
    $litros = intval($litros);
    $cm = $distancia / $litros;
    $combus = sprintf('%.2f', $cm);
    echo "<p>$combus km/l</p>";
?>

<footer id="foot">Desenvolvido por <p id="gambiarra">-</p><a href="https://github.com/marceloverass" target="_blank">Marcelo Veras</a></footer>