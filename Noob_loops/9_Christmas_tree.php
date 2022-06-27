<?php
/*
 Examples:

> Enter the number:
> 1
  |
* | *

> Enter the number:
> 4
     |
   * | *
  ** | **
 *** | ***
**** | ****

 */

$num = readline('Enter the number: ');

echo str_repeat(' ', $num + 1) . '|' . str_repeat(' ', $num + 1) . "\n";

for ($i = 1; $i <= $num; $i++) {
    echo str_repeat(' ', $num - $i) . str_repeat('*', $i) . ' | '
        . str_repeat('*', $i) . str_repeat(' ', $num - $i) . "\n";
}

