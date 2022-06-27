<?php
/*
 Examples:

> Enter the number:
> 19
> What should we print on it?
>
  *****     *****
 *******   *******
********* *********
*******************
 *****************
  ***************
   *************
    ***********
     *********
      *******
       *****
        ***
         *

> Enter the number:
> 19
> What should we print on it?
> CODELEX
  *****     *****
 *******   *******
********* *********
******CODELEX******
 *****************
  ***************
   *************
    ***********
     *********
      *******
       *****
        ***
         *

 */

$num = readline('Enter the number: (odd) ');
$rows = $num - 6;
$text = readline('What should we print on it? ');

$first = str_repeat('*',($num - 1)/2 - 4) . '     '
       . str_repeat('*',($num - 1)/2 - 4);
$second = str_repeat('*',($num - 1)/2 - 2) . '   '
    . str_repeat('*',($num - 1)/2 - 2);

for ($i = 1; $i <= $rows; $i++) {
    if ($i == 1) {
        echo str_pad($first, $num, ' ', STR_PAD_BOTH) . "\n";
    } elseif ($i == 2) {
        echo str_pad($second, $num, ' ', STR_PAD_BOTH) . "\n";
    } elseif ($i == 3) {
        echo str_repeat('*', ($num - 1) / 2) . ' '
            . str_repeat('*', ($num - 1) / 2) . "\n";
    } elseif ($i == 4) {
        if ($text) {
            echo str_pad($text, $num, '*', STR_PAD_BOTH) . "\n";
        } else {
            echo str_repeat('*', $num) . "\n";
        }
    }
}

for ($j = 2; $j <= $num - 1; $j += 2)
    echo str_pad((str_repeat('*', $num - $j)), $num, ' ', STR_PAD_BOTH) . "\n";
