<?php
/*
Example:

> Enter the number:
> 5
A
B B
C C C
D D D D
E E E E E

 */

$num = readline('Enter the number: ');

for ($i = 0; $i <= $num; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        switch ($i) {
            case 1:
                echo 'A ';
                break;
            case 2:
                echo 'B ';
                break;
            case 3:
                echo 'C ';
                break;
            case 4:
                echo 'D ';
                break;
            case 5:
                echo 'E ';
                break;
            case 6:
                echo 'F ';
                break;
            case 7:
                echo 'G ';
                break;
            case 8:
                echo 'H ';
                break;
            case 9:
                echo 'I ';
        }
    }
    echo "\n";
}