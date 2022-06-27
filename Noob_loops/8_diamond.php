<?php
/*
 Examples:

> Enter the number:
> 1
*

> Enter the number:
> 4
   *
  * *
 * * *
* * * *
 * * *
  * *
   *

 */

$ent = readline('Enter the number: ');
$num = $ent + ($ent - 1);

    for ($i = 1; $i <= $num; $i+=2) {
        $whitespace = ($num - $i / 2);
        echo str_pad('', $whitespace, ' ') . str_pad('', $i, '* ') . "\n";
    }

    for ($i = $num - 1; $i >= 1; $i -= 2) {
        $whitespace = ($num - $i / 2);
        echo str_pad('', $whitespace, ' ') . str_pad('', $i, '* ') . "\n";
    }



