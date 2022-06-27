<?php
/*
 Example:

> Enter the number:
> 5
******
.*****
..****
...***
....**
.....*

 */

$num = readline('Enter the number: ') + 1;

for ($i = 1; $i <= $num; $i++) {
    if ($i == 1) {
        echo str_repeat("*", $num);
    } else {
        echo str_repeat(".", $i - 1);
        echo str_repeat("*", $num - $i + 1);
    }
    echo "\n";
}
