<?php

// ATIVIDADE TRABALHO LAURA QUESTÃO 1
echo "<br>Atividade 1 <br>";
$V1 = 35;
$V2 = 22;
$V3 = 12;
$V4 = 45;
$V5 = 6;

echo "$V1, $V2, $V3, $V4, $V5 <br><br>"; 

if ($V1 >= 30) {
    echo "Temperatura alta <br>";
} elseif ($V1 <= 15) {
    echo "Temperatur baixa <br>";
} else {
    echo "Normal <br>";
}
if ($V2 >= 30) {
    echo "Temperatura alta <br>";
} elseif ($V2 <= 15) {
    echo "Temperatur baixa <br>";
} else {
    echo "Normal <br>";
}

if ($V3 >= 30) {
    echo "Temperatura alta <br>";
} elseif ($V3 <= 15) {
    echo "Temperatur baixa <br>";
} else {
    echo "Normal <br>";
}


if ($V4 >= 30) {
    echo "Temperatura alta <br>";
} elseif ($V4 <= 15) {
    echo "Temperatur baixa <br>";
} else {
    echo "Normal <br>";
}


if ($V5 >= 30) {
    echo "Temperatura alta <br>";
} elseif ($V5 <= 15) {
    echo "Temperatur baixa <br>";
} else {
    echo "Normal <br>";
}



$soma = $V1 + $V2 + $V3 + $V4 + $V5;
$mediadasoma = $soma / 2;


echo "<br>A média da soma é: $mediadasoma<br>";



// ATIVIDADE TRABALHO LAURA QUESTÃO 2
echo "<br>Atividade 2 <br>";

$num = 7;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $num * $i;

    if ($resultado % 2 == 0) {
        $parouimpar = "par";
    } else {
        $parouimpar = "ímpar";
    }

    echo "$num x $i = $resultado → $parouimpar<br>";
}

// ATIVIDADE TRABALHO LAURA QUESTÃO 3
echo "<br><br>Atividade 3<br>";

$prod1 = 20;
$prod2 = 40;
$prod3 = 10;
$prod4 = 70;
$prod5 = 90;

$total = $prod1 + $prod2 + $prod3 + $prod4 + $prod5;
echo "Gasto total da compra:$total";

if ($total > 200) {

    $desconto = $total * 0.10;

    $totalComDesconto = $total - $desconto;
    echo "<br>O valor com o desconto é: $totalComDesconto<br>";
}


// ATIVIDADE TRABALHO LAURA QUESTÃO 4
echo "<br><br>Atividade 4<br>";

$idades = [12, 24, 5, 68, 20];

foreach ($idades as $idade) {
    switch (true) {
        case ($idade <= 13):
            $classificacao = "Criança";
            break;

        case ($idade >= 14 && $idade <= 19):
            $classificacao = "Adolescente";
            break;

        case ($idade >= 20 && $idade <= 59):
            $classificacao = "Adulto";
            break;

        default:
            $classificacao = "Idoso";
    }

    echo "Idade: $idade → $classificacao<br>";
}
?>
