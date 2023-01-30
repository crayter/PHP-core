<?php

function factorialNumb($num)
{
    if ($num <= 1) {
        return 1;
    } else {
        return ($num * factorialNumb($num-1));
    }
}

echo factorialNumb(5);