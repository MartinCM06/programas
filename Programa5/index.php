<?php
function fibonacci($n) {
    $fibonacci_series = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci_series[] = $fibonacci_series[$i - 1] + $fibonacci_series[$i - 2];
    }

    return $fibonacci_series;
}

$n = 999999;
$fibonacci_sequence = fibonacci($n);

echo "Serie de Fibonacci hasta el término $n: " . implode(', ', $fibonacci_sequence) . "\n";
?>