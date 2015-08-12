<?php

function solution($A) {
    $res = null;

    $partA = $A[0];
    $partB = array_sum($A) - $partA;

    $min = abs($partA - $partB);

    $len = count($A);
    for ($i = 1; $i < $len - 1; $i++) {
        $partA += $A[$i];
        $partB -= $A[$i];

        $min = min([$min, abs($partA - $partB)]);
    }

    return $min;
}
