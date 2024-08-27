<?php
function countSistersForBrother($n, $m) {
    // У каждого брата есть все сёстры Алисы и сама Алиса
    return $n + 1;
}

$n = 3; // Количество сестер
$m = 2; // Количество братьев

$sistersForBrother = countSistersForBrother($n, $m);
echo "Количество сестер произвольного брата Алисы: " . $sistersForBrother;
?>