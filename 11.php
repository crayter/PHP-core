<?php
function calculate($num1,$num2,$op)
{
$calc = 0;

switch ($op)
{
    case '+':
        $calc = $num1 + $num2;
        break;
    case '-':
        $calc = $num1 - $num2;
        break;
    case '*':
        $calc = $num1 * $num2;
        break;
    case '/':
        $calc = $num1 / $num2;
        break;
}

    return $calc;

}
echo calculate(6, 2, '+');