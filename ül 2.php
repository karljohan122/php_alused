<?php #Ül 2 Karl Johan Linnas 26.11.2020
$arv1 = 3;
$arv2 = 5;

$liitmine = $arv1 + $arv2;
$lahutamine = $arv1 - $arv2;
$korrutamine = $arv1 * $arv2;
$jagamine = $arv1 / $arv2;
$jaak = $arv1 % $arv2;

echo "Tehe: 3 + 5; vastus: $liitmine <br>";
echo "Tehe: 3 - 5; vastus: $lahutamine <br>";
echo "Tehe: 3 * 5; vastus: $korrutamine <br>";
echo "Tehe: 3 / 5; vastus: $jagamine <br>";
echo "Tehe: 3 % 5; vastus: $jaak <br> <br>";

$mm = 10;
echo "Millimeetreid on: $mm <br>";
$cm = $mm / 10;
printf("10mm on: %0.2f cm <br>", $cm);
$m = $mm / 1000;
printf("10mm on: %0.2f m <br> <br>", $m);

$a = 3;
$b = 7;
$c = 9;

echo "Kolmnurga küljed on a=$a, b=$b, c=$c <br>";
$kolmnurga_pindala = ($a * $b) / 2;
$kolmnurga_ymbermoot = $a + $b + $c;

printf("Kolmnurga pindala on: %d ning ümbermõõt on: %d", $kolmnurga_pindala, $kolmnurga_ymbermoot);
