<?php
/*
 Examples:

> Enter the number:
> 1
*

> Enter the number:
> 4
-**-
*--*
-**-

> Enter the number:
> 9
----*----
---*-*---
--*---*--
-*-----*-
*-------*
-*-----*-
--*---*--
---*-*---
----*----

 */

$num = readline('Enter the number: (1 - 9) ');

for ($i = 1; $i <= $num; $i++) {
    if ($num % 2 != 0) {
        if ($i == 1 || $i == $num) {
            echo str_pad('*', $num, "_", STR_PAD_BOTH) . "\n";

        } elseif ($i == ($num + 1) / 2) {
            echo '*' . str_repeat('_', $num - 2) . '*' . "\n";

        } else {
            switch ($i) {
                case $i == ($num + 1) / 2 - 1 || $i == ($num + 1) / 2 + 1:
                    echo '_*' . str_repeat('_', $num - 4) . '*_';
                    break;
                case $i == ($num + 1) / 2 - 2 || $i == ($num + 1) / 2 + 2:
                    echo '__*' . str_repeat('_', $num - 6) . '*__';
                    break;
                case $i == ($num + 1) / 2 - 3 || $i == ($num + 1) / 2 + 3:
                    echo '___*' . str_repeat('_', $num - 8) . '*___';
                    break;
            }
            echo "\n";
        }
    } else {
        if ($i == 1 || $i == $num) {
            echo str_pad('_**_', $num, ' ', STR_PAD_BOTH) . "\n";

        } elseif ($i == 2 || $i == $num - 1) {
            echo str_pad('*__*', $num, ' ', STR_PAD_BOTH) . "\n";

        } elseif ($i == $num / 2 || $i == $num - 3) {
            echo '*' . str_repeat('_', $num - 2) . '*' . "\n";

        } elseif (($num >= 8 && $i == 3) || ($num >= 8 && $i == $num - 2)) {
            echo ' *' . str_repeat('_', $num - 4) . '* ' . "\n";
/*
        } elseif ($i ==) {
            switch ($i) {
                case $i == $num / 2 - 1 || $i == $num / 2 + 1:
                    echo '_*' . str_repeat('_', $num - 4) . '*_' . "\n";
                    break;
                case $i == $num / 2 - 2 || $i == $num / 2 + 2:
                    echo '*' . str_repeat('_', $num - 6) . '*__' . "\n";
                    break;
                case $i == ($num + 1) / 2 - 3 || $i == ($num + 1) / 2 + 3:
                    echo '___*' . str_repeat('_', $num - 8) . '*___' . "\n";
                    break;
            }
            echo "\n";
     */   }
   }
 }
