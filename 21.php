<?php

$isSubset1 = ['Apple','Strawberry','Raspberry','20','3', 'Banana'];
$isSubset2 = ['20','Apple'];


if (array_intersect($isSubset2, $isSubset1) === $isSubset2) {
    echo "It's a subset";
} else {
    echo "It's not a subset";
}
