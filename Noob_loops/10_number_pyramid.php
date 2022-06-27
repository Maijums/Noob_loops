<?php
/*
 Example:

> Enter the number:
> 5
        1
      1   1
    1   2   1
  1   3   3   1
1   4   6   4   1

 */
/*
$ent = readline('Enter the number: ');
$num = $ent + ($ent - 1);

for ($i = 1; $i <= $num; $i+=2) {
    $whitespace = ($num - $i / 2);
    echo str_pad('', $whitespace, ' ') . str_pad('', $i, '* ') . "\n";
}
*/

$num = readline('Enter the number: (1 - 7) ');
$max = 28;     // $num * 3 + 7;
$ws = $max/2; // (($max - 1) / 2); // for odd numbers (($max / 2) for even)

for ($i = 1; $i <= $num; $i++) {
    switch ($i) {
    case 1:
        echo str_repeat(' ', $ws) . 1;
        break;
    case 2:
        echo str_repeat(' ', $ws - 2) . '1   1';
        break;
    case 3:
        echo str_repeat(' ', $ws - 4) . '1   2   1';
        break;
    case 4:
        echo str_repeat(' ', $ws - 6) . '1   3   3   1';
        break;
    case 5:
        echo str_repeat(' ', $ws - 8) . '1   4   6   4   1';
        break;
    case 6:
        echo str_repeat(' ', $ws - 10) . '1   5   9   9   5   1';
        break;
    case 7:
        echo str_repeat(' ', $ws - 12) . '1   6   1   8   1   6   1';
        break;
    }
  echo "\n";
}

/*
for ($i = 0; $i <= 9; $i++) {

    for ($d = 10 - $i; $d > 0; $d--)  {
        echo "1";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "2" . $i . "3";
    }
    echo "\n";
}
*/