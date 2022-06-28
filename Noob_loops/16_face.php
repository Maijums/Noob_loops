<?php
/*
 Examples:

> Enter the number:
> 3
/^\/^\
|    |
\_/\_/

> Enter the number:
> 5
/^^\__/^^\
|        |
|        |
|   __   |
\__/  \__/

> Enter the number:
> 8
/^^^^\____/^^^^\
|              |
|              |
|              |
|              |
|              |
|     ____     |
\____/    \____/

 */

$num = readline('Enter the number: ');

$half = $num / 2;
$middle = ($half + 1) * 2 + $half;

$odd = ($num - 1) / 2;
$oddMiddle = ($odd + 1) * 2 + $odd;

if ($num % 2 == 0) {
    for ($i = 1; $i <= $num; $i++) {
        if ($i == 1) {
            echo '/' . str_repeat("^", $half) . '\\' . str_repeat('_', $half)
                    . '/' . str_repeat("^", $half) . '\\';
        } elseif ($i <= $num - 2) {
            echo '|' . str_repeat(' ', $middle) . '|';
        } elseif ($i == $num - 1) {
            echo '|' . str_repeat(' ', $half + 1) . str_repeat('_', $half)
                . str_repeat(' ', $half + 1) . '|';
        } elseif ($i == $num) {
            echo '\\' . str_repeat('_', $half) . '/' . str_repeat(' ', $half) . '\\'
                . str_repeat('_', $half) . '/';
        }
        echo "\n";
    }

} else {
    for ($j = 1; $j <= $num; $j++) {
        if ($j == 1) {
            echo '/' . str_repeat("^", $odd) . '\\' . str_repeat('_', $odd)
                . '/' . str_repeat("^", $odd) . '\\';
        } elseif ($j <= $num - 2) {
            echo '|' . str_repeat(' ', $oddMiddle) . '|';
        } elseif ($j == $num - 1) {
            echo '|' . str_repeat(' ', $odd + 1) . str_repeat('_', $odd)
                . str_repeat(' ', $odd + 1) . '|';
        } elseif ($j == $num) {
            echo '\\' . str_repeat('_', $odd) . '/' . str_repeat(' ', $odd) . '\\'
                . str_repeat('_', $odd) . '/';
        }
    echo "\n";
    }
}
