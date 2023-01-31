<?php

function rect_area(int $length,int $width) 
{
    $area = $length * $width;
    echo "Area Of Rectangle with length " . $length . " & width " . $width . " = " . $area;
}

rect_area(22, 10);

