<?php

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    // TODO: Write you'r code here.
    $sumOne = ($matrix[0][0]) + ($matrix[0][1]) + ($matrix[0][2]);
    $sumTwo = ($matrix[1][0]) + ($matrix[1][1]) + ($matrix[1][2]);
    $sumThree = ($matrix[2][0]) + ($matrix[2][1]) + ($matrix[2][2]);

}
echo "$sumOne\n";
echo "$sumTwo\n";
echo "$sumThree\n";

?>
