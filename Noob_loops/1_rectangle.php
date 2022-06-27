<?php
/*
 Print the rectangle with a size of n x n where n is a number provided by user.

Example:

> Enter the number:
> 10
**********
**********
**********
**********
**********
**********
**********
**********
**********
**********

*/

$num = readline('Enter the number: ');

for ($i = 1; $i <= $num; $i++) {

    for ($j = 1; $j <= $num; $j++) {
        echo "*";
    }
    echo "\n";
}

// cits variants:
/*
for ($i = 1; $i <= $num; $i++) {
        echo str_repeat("*", $num);
        echo PHP_EOL;
}
*/