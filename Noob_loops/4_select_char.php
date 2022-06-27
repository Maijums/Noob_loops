<?php
/*
 Example:

> Enter the number:
> 5
> Select the character:
> $
$
$ $
$ $ $
$ $ $ $
$ $ $ $ $

 */

$num = readline('Enter the number: ');
$char = readline('Select the character: ');

for ($i = 1; $i <= $num; $i++) {
        echo str_repeat("$char ", $i);
        echo PHP_EOL;
    }