<?php

//If marks are 60% or more, the grade will be First Division.
//If marks between 45% to 59%, grade will be Second Division.
//If marks between 33% to 44%, grade will be Third Division.
//If marks are less than 33%, students will be Fail.

function grade(int $mark): string {
    if ($mark > 60) {
        return "First Division";
    } elseif ($mark >= 45 AND $mark <= 59) {
        return "Second Division";
    } elseif ($mark >= 33 AND $mark <= 44) {
        return "Third Division";
    } else {
        return "Fail";
    }
}

echo grade(20);