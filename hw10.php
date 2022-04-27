<?php

// zadatak 1
echo 'ZADATAK BR.1';
echo '<br>';

$num_1 = 150;
$num_2 = 90;

echo $num_1 + $num_2;
echo '<br>';

echo $num_1 - $num_2;
echo '<br>';

echo $num_1 / $num_2;
echo '<br>';

echo $num_1 * $num_2;
echo '<br>';

// zadatak 2
echo 'ZADATAK BR.2';
echo '<br>';

$random_num = rand(0, 6);

if ($random_num === 0) {
    echo 'Danas je nedelja.';
} elseif ($random_num === 1) {
    echo 'Danas je ponedeljak.';
} elseif($random_num === 2) {
    echo 'Danas je utorak.';
} elseif($random_num === 3) {
    echo 'Danas je sreda.';
} elseif($random_num === 4) {
    echo 'Danas je cetvrtak.';
} elseif($random_num === 5) {
    echo 'Danas je petak.';
} else {
    echo 'Danas je subota.';
}
echo '<br>';

// zadatak 3
echo 'ZADATAK BR.3';
echo '<br>';
$a = 9;
$b = 1;
$c = 5;

$total = $a + $b + $c;

echo "Zbir brojeva $a, $b, i $c je $total."





?>