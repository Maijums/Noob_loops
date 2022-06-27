<?php
/*
 Example:

> Enter the number:
> 5
*****
*   *
*   *
*   *
*****

 */

$num = readline('Enter the number: ');

for ($i = 1; $i <= $num; $i++) {
    if ($i == 1 || $i == $num) {
        echo str_repeat("*", $num);
    } else {
        echo '*';
        echo str_repeat(" ", $num -2);
        echo '*';
    }
    echo PHP_EOL;
}
