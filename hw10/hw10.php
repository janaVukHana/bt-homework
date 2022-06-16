<?php

// zadatak 1
echo 'ZADATAK BR.1';
echo '<br>';
echo 'First way';
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

// drugi nacin
echo 'Second way';
echo '<br>';
$num_arr = array($num_1, $num_2);
$sum = array_sum($num_arr);
echo 'Sum: ' . $sum;
echo '<br>';
echo 'Subtract: ' . bcsub($num_1, $num_2);
echo '<br>';
echo 'Divide: ' . intdiv($num_1, $num_2);
echo '<br>';
echo 'Multiply: ' . bcmul($num_1, $num_2);
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
echo 'First way';
echo '<br>';
$a = 9;
$b = 1;
$c = 5;

$total = $a + $b + $c;

echo "Zbir brojeva $a, $b, i $c je $total.";
echo '<br>';

echo 'Second way';
echo '<br>';
$a = mt_rand(0, 10);
$b = mt_rand(0, 10);
$c = mt_rand(0, 10);
$rand_num_arr = array($a, $b, $c);
echo 'Total sum of $a, $b and $c is: ' . array_sum($rand_num_arr);


?>