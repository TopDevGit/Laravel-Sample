<?php

// Function to add two matrices
function addMatrices($matrix1, $matrix2) {
    $rows = count($matrix1);
    $cols = count($matrix1[0]);
    $result = array();

    for ($i = 0; $i < $rows; $i++) {
        $result[$i] = array();
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
    return $result;
}

// Example usage:
$matrixA = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15),
    array(16, 17, 18, 19, 20),
    array(21, 22, 23, 24, 25)
);

$matrixB = array(
    array(26, 27, 28, 29, 30),
    array(31, 32, 33, 34, 35),
    array(36, 37, 38, 39, 40),
    array(41, 42, 43, 44, 45),
    array(46, 47, 48, 49, 50)
);

$matrixSum = addMatrices($matrixA, $matrixB);

// Output the result
foreach ($matrixSum as $row) {
    echo implode(" ", $row) . "\n";
}

?>