<?php
/*
 Example:

> Enter the number:
> 4
+ - - +
| - - |
| - - |
+ - - +

 */

$num = readline('Enter the number: ');

for ($i = 1; $i <= $num; $i++) {
    if ($i == 1 || $i == $num) {
        echo '+ ';
        echo str_repeat('- ', $num - 2);
        echo '+ ';
    } else {
        echo '| ';
        echo str_repeat('- ', $num - 2);
        echo '| ';
    }
    echo "\n";
}


