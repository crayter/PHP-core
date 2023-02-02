<?php

$months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
    ];

$months = array_merge(array_diff($months, array("January"), ));

print_r($months);
