<?php
/*
 As in Exercise #1 print a rectangle, but this time draw stars separated by a space.

Example:

> Enter the number:
> 3
* * *
* * *
* * *

 */

$num = readline('Enter the number: ');

for ($i = 1; $i <= $num; $i++) {

    for ($j = 1; $j <= $num; $j++) {
        echo "* ";
    }
    echo "\n";
}