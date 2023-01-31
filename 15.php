<?php

function whatKindOf($number) {
    $zero = 0;
    if ($number > $zero && is_numeric($number)) {
        echo "$number is a positive number";
    } elseif ($number < $zero && is_numeric($number)) {
        echo "$number is a negative number";
    } elseif (is_numeric($number)) {
        echo "The number is $number";
    } else {
        echo "$number - is a string.";
    }
}

echo whatKindOf("0");