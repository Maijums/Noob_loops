<?php

$num = readline('Enter the number: (1 - 7) ');

if ($num % 2 == 0) {
    $middle = $num / 2;
} else {
    $middle = ($num + 1) / 2;
}

for ($i = 1; $i <= $num; $i++) {
    if ($i == 1 || $i == $num) {
        echo str_repeat("*", $num * 2) . str_repeat(' ', $num)
            . str_repeat("*", $num * 2);
    } elseif ($i == $middle) {
        switch ($num) {
            case 3:
                echo '*' . str_repeat('/', $num + 1) . '*' . str_repeat('|', $num)
                    . '*' . str_repeat('/', $num + 1) . '*';
                break;
            case 4:
                echo '*' . str_repeat('/', $num + 2) . '*' . str_repeat('|', $num)
                    . '*' . str_repeat('/', $num + 2) . '*';
                break;
            case 5:
                echo '*' . str_repeat('/', $num + 3) . '*' . str_repeat('|', $num)
                    . '*' . str_repeat('/', $num + 3) . '*';
                break;
            case 6:
                echo '*' . str_repeat('/', $num + 4) . '*' . str_repeat('|', $num)
                    . '*' . str_repeat('/', $num + 4) . '*';
                break;
            case 7:
                echo '*' . str_repeat('/', $num + 5) . '*' . str_repeat('|', $num)
                    . '*' . str_repeat('/', $num + 5) . '*';
                break;
        }
    } else {
        switch ($num) {
            case 4:
                echo '*' . str_repeat('/', $num + 2) . '*' . str_repeat(' ', $num)
                    . '*' . str_repeat('/', $num + 2) . '*';
                break;
            case 5:
                echo '*' . str_repeat('/', $num + 3) . '*' . str_repeat(' ', $num)
                    . '*' . str_repeat('/', $num + 3) . '*';
                break;
            case 6:
                echo '*' . str_repeat('/', $num + 4) . '*' . str_repeat(' ', $num)
                    . '*' . str_repeat('/', $num + 4) . '*';
                break;
            case 7:
                echo '*' . str_repeat('/', $num + 5) . '*' . str_repeat(' ', $num)
                    . '*' . str_repeat('/', $num + 5) . '*';
                break;
        }
    }
    echo PHP_EOL;
}