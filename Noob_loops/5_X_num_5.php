<?php
/*
 Example:

> Enter the number:
> 5
*.....*
.*...*.
..*.*..
...*...
..*.*..
.*...*.
*.....*

 */

//$num = readline('Enter the number: ') +2;
$num = 5 + 2;

for ($i = 1; $i <= $num; $i++) {

        if ($i == 1 || $i == $num) {
            echo '*' . str_repeat(".", $num - 2) . '*';

        } else if ($i == 2 || $i == $num - 1) {
            echo '.*'. str_repeat(".", $num - 4) . '*.';
        } else if ($i == 3 || $i == $num - 2) {
            echo '..*';
            if ($num >= 6)
            echo str_repeat(".", $num - 6) . '*..';
        } else {
            echo str_repeat(".", $num - 4) . '*' . str_repeat(".", $num - 4);
        }
        echo PHP_EOL;
    }