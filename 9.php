<?php
function electricityPrice($units): float {
    $unitCost1 = 3.50;
    $unitCost2 = 4.00;
    $unitCost3 = 5.20;
    $unitCost4 = 6.50;

    if ($units <= 50) {
        $endPrice = $units * $unitCost1;
        echo "{$endPrice}";
    } elseif ($units <= 150) {
        $endPrice = $units * $unitCost2;
        echo "{$endPrice}";
    } elseif ($units <= 250) {
        $endPrice = $units * $unitCost3;
        echo "{$endPrice}";
    } else {
        $endPrice = $units * $unitCost4;
        echo "{$endPrice}";
    }
    return $units;
}
electricityPrice(153);
