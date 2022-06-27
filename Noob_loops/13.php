<?php
/*
 Examples:

> Enter the number:
> 2
**
||

> Enter the number:
> 5
--*--
-***-
*****
|***|
|***|

> Enter the number:
> 8
---**---
--****--
-******-
********
|******|
|******|
|******|
|******|

 */

$num = readline('Enter the number: ');

if ($num <= 2) {
    echo str_repeat('*', $num) . "\n";
    echo str_repeat('|', $num) . "\n";

} elseif  ($num == 3) {
    echo '_*_' . "\n" . '***' . "\n" . '|||' . "\n";

} elseif ($num == 4) {
    echo '_**_' . "\n". "****" . "\n". "|**|" . "\n". '|**|' . "\n";

} elseif ($num % 2 != 0) {
    for ($i = 1; $i <= $num; $i++) {
        switch ($i) {
            case 1:
                echo str_pad('*', $num, '_', STR_PAD_BOTH);
                break;
            case 2:
                echo str_pad(str_repeat('*', $num - 2), $num, '_', STR_PAD_BOTH);
                break;
            case 3:
                echo str_repeat('*', $num);
                break;
            case $i >= 4:
                echo str_pad(str_repeat('*', $num - 2), $num, '|', STR_PAD_BOTH);
                break;
        }
        echo "\n";
    }
} else {
    for ($i = 1; $i <= $num; $i++) {
        switch ($i) {
            case 1:
                echo str_pad('**', $num, '_', STR_PAD_BOTH);
                break;
            case 2:
                echo str_pad(str_repeat('*', $num -4), $num, '_', STR_PAD_BOTH);
                break;
            case 3:
                echo str_pad(str_repeat('*', $num - 2), $num, '_', STR_PAD_BOTH);
                break;
            case 4:
                echo str_repeat('*', $num);
                break;
            case $i > 4:
                echo str_pad(str_repeat('*', $num - 2), $num, '|', STR_PAD_BOTH);
                break;
        }
        echo "\n";
    }
}
