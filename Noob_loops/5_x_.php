<?php
/*
> Enter the number:
> 5
*.....*
.*...*.
..*.*..
...*...
..*.*..
.*...*.
*.....*

 */

$num = readline('Enter the number: ');
$rows = $num + 2;
$middle = 0;


for ($i = 1; $i <= $num; $i++) {

    if ($i == 1 || $i == $rows) {
        echo '*' . str_repeat(".", $num) . '*';
    } elseif ($i <= ($rows - 1) / 2) {

        if ($i == 2) {
            $middle = $num - 2;
        } elseif ($i == 3) {
            $middle = $num - 4;
        } elseif ($i == 4) {
            $middle = $num - 6;
        }
        echo str_repeat('.', $i - 1) . '*' . str_repeat('.', $middle) . '*'
            . str_repeat('.', $i - 1);

    } elseif ($i == ($rows + 1) / 2) {
        echo str_repeat('.', ($rows - 1) / 2) .'*' . str_repeat('.', ($rows - 1) / 2);

    }

    /* elseif ($i > ($rows + 1) / 2) {

        if ($i == $rows - 1) {
            $middle = $num - 2;
        } elseif ($i == $rows - 2) {
            $middle = $num - 4;
        } elseif ($i == $rows -3) {
            $middle = $num - 6;
        }
        echo str_repeat('.', ($rows - 1) / 2 - 1) . '*' . str_repeat('.', $middle) . '*'
            . str_repeat('.', ($rows - 1) / 2 - 1) . "\n";
        echo str_repeat('.', ($rows - 1) / 2 - 2) . '*' . str_repeat('.', $middle) . '*'
            . str_repeat('.', ($rows - 1) / 2 - 2) . "\n";
    }
    */
    echo "\n";
}

/*
for ($i = 1; $i <= $rows; $i++) {
    if ($i == 1) {
        echo '*';
        echo str_repeat('.', $num);
        echo '*';
    } elseif ($i > 1 && $i < $num){
        echo str_repeat('.', $i - 1);
        echo '*';
        echo str_repeat('.', $num - 2);
        echo '*';
        echo str_repeat('.', $i - 1);
    } elseif ($i == $num - 1) {
        echo str_repeat('.', $i - 1);
        echo '*';
        echo str_repeat('.', $i - 1); break;
    }
    echo "\n";
}
*/
