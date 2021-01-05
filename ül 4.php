<?php
#Jagamine
echo "<h1>Jagamine</h1>";
$esimene_arv = $_GET["jag1"];
if($esimene_arv == 0) {
    echo "<h2>Esimene täisarv ei tohi olla 0!</h2>";
} else {
    echo "<h2>Esimene täisarv: $esimene_arv</h2>";
}
$teine_arv = $_GET["jag2"];
if($teine_arv == 0) {
    echo "<h2>Teine täisarv ei tohi arv olla 0!</h2>";
} else {
    echo "<h2>Teine täisarv: $teine_arv</h2>";
}
$jagamine = $esimene_arv / $teine_arv;
if($jagamine == INF){
    echo "<h2>Vastus on lõpmatu! Nulliga ei saa jagada!</h2>";
} elseif($jagamine > 0) {
    echo "<h2>Jagamise tulemus: $jagamine </h2><br>";
} else {
    echo "<h2>Error: Vastust polnud võimalik arvutada</h2><br>";
}

#Vanus
echo "<h1>Vanus</h1>";
$vanus1 = $_GET["vanus1"];
$vanus2 = $_GET["vanus2"];
if($vanus1 > $vanus2){
    echo "<h2>Esimene kasutaja on vanem</h2><br>";
} elseif($vanus2 > $vanus1){
    echo "<h2>Teine kasutaja on vanem</h2><br>";
} elseif($vanus1 = $vanus2){
    echo "<h2>Kasutajad on sama vanad</h2><br>";
}

#Ristkülik või ruut
echo "<h1>Ristkülik või ruut</h1>";
$kylg_a = $_GET["kylg_a"];
$kylg_b = $_GET["kylg_b"];
if($kylg_a == $kylg_b){
    echo "<h2>Kujund on ruut</h2><br>";
} else {
    echo "<h2>Kujund on ristkülik</h2><br>";
}

#Ristkülik või ruut II
echo "<h1>Ristkülik või ruut II</h1>";
$arv1 = $_GET["arv1"];
$arv2 = $_GET["arv2"];
if($arv1 == $arv2){
    echo "<h2>Arvudest moodustuks ruut</h2>";
} else {
    echo "<h2>Arvudest moodustuks ristkülik</h2><br>";
}

#Juubel
echo "<h1>Juubel</h1>";
$synniaasta = $_GET["synniaasta"];
$synniaasta_final = 2021 - $synniaasta;
if($synniaasta_final == 10){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 20){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 30){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 40){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 50){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 60){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 70){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 80){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 90){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 100){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 110){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 120){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 130){
    echo "<h2>Teil on juubel!</h2><br>";
} elseif($synniaasta_final == 140){
    echo "<h2>Teil on juubel!</h2><br>";
} else {
    echo "<h2>Teil ei ole juubelit!</h2><br>";
}

#Hinne
echo "<h1>Hinne</h1>";
$hinne = $_GET["hinne"];
switch($hinne){
    case($hinne > 10): echo "<h2>Rohkem kui 10 punkti, SUPER!</h2>";
    break;
    case($hinne > 5 && $hinne < 9): echo "<h2>5-9p, TEHTUD!</h2>";
    break;
    case($hinne == 5): echo "<h2>5-9p, TEHTUD!</h2>";
    break;
    case($hinne == 9): echo "<h2>5-9p, TEHTUD!</h2>";
    break;
    case($hinne < 5): echo "<h2>Alla 5 punkti, KASIN!</h2>";
}