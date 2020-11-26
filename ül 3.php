<?php #Ülesanne 3 Karl Johan Linnas 26.11.2020

echo"<h2>Trapets</h2>";
$trapets_a = $_GET["ta"];
echo "<br> Külg a: $trapets_a";
$trapets_b = $_GET["tb"];
echo "<br> Külg b: $trapets_b";
$trapets_h = $_GET["th"];
echo "<br> Kõrgus h: $trapets_h";
$trapetsi_pindala = (($trapets_a + $trapets_b) / 2) * $trapets_h;
echo "<br> Trapetsi pindala on: $trapetsi_pindala";

echo"<h2>Romb</h2>";
$romb_a = $_GET["ra"];
echo "<br> Külg a: $romb_a";
$rombi_ymbermoot = 4 * $romb_a;
echo "<br> Rombi ümbermõõt on: $rombi_ymbermoot";