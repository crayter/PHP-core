<?php
//You need to write a program in PHP to remove a specific element by value from an array using a PHP program.
//
//Instructions:
//Take an array with a list of month names.
//Take a variable with the name of value to be deleted.
//You can use PHP array functions or foreach loop.

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
