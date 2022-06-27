<?php
/*
 Examples:

> Enter the number:
> 5
> Select direction: (right/left)
> right
> Is it empty? (Y/n)
> n
    *****
   *****
  *****
 *****
*****

> Enter the number:
> 5
> Select direction: (right/left)
> left
> Is it empty? (Y/n)
> n
*****
 *****
  *****
   *****
    *****

> Enter the number:
> 5
> Select direction: (right/left)
> right
> Is it empty? (Y/n)
> Y
    *****
   *   *
  *   *
 *   *
*****

> Enter the number:
> 5
> Select direction: (right/left)
> left
> Is it empty? (Y/n)
> Y
*****
 *   *
  *   *
   *   *
    *****

 */


$num = readline('Enter the number: ');
$dir = readline("Select direction: (right/left) ");
$empty = readline("Is it empty? (Y/n) ");

if ($dir == 'right' && $empty == 'n') {

    for ($i = 1; $i <= $num; $i++) {
        for ($j = $i; $j <= $num; $j++)
        echo " ";

    for ($j = 1; $j <= $num; $j++)
        echo "*";
        echo "\n";
    }

} elseif ($dir == 'left' && $empty == 'n') {

    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat(" ", $i) . str_repeat("*", $num);
        echo "\n";
    }

} elseif ($dir == 'right' && $empty == 'Y') {

    for ($i = 1; $i <= $num; $i++) {
        if ($i == 1) {
            echo str_repeat(" ", $num) . str_repeat("*", $num);
        } elseif ($i == $num) {
            echo str_repeat(" ", 1) . str_repeat("*", $num);
        } else {
            echo str_repeat(" ", $num - $i + 1) . "*" . str_repeat(" ", $num -2) . "*";
        }
        echo "\n";
    }

} elseif ($dir == 'left' && $empty == 'Y') {

    for ($i = 1; $i <= $num; $i++) {
        echo str_repeat(" ", $i);

        if ($i == 1 || $i == $num) {
            echo str_repeat("*", $num);
        } else {
            echo  "*" . str_repeat(" ", $num -2) . "*";
        }
        echo "\n";
    }
} else {
    echo "Game over" . "\n";
}