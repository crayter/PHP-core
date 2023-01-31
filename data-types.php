<?php
//Convert to Integer
function convertToInt(string $str): int
{
    if ($str)
    {
        $int_value = (int) $str;
        return $int_value;
    } else {
        return 0;
    }

}
var_dump(convertToInt("123"));
echo '<br>';

//Convert to String
function convertToStr(int $num): string
{
    if ($num)
    {
        $str_value = (string) $num;
        return $str_value;
    } else {
        return "";
    }

}
var_dump(convertToStr(123));
echo '<br>';

//Convert to Float
function convertToFloat(float $float): float
{
    if ($float)
    {
        $float_value = (float) $float;
        return $float_value;
    } else {
        return 0.0;
    }

}
var_dump(convertToFloat(123.239999));
echo '<br>';

//Convert to Bool
function convertToBool(string $bool): bool
{
    if ($bool)
    {
        $bool = filter_var($bool, FILTER_VALIDATE_BOOLEAN);
        return $bool;
    } else {
        return false;
    }

}
var_dump(convertToBool('true'));
echo '<br>';

//Convert to Array
function convertToArray(string $arr): array
{
    if ($arr)
    {
        for ($i = 0; $i < $arr; $i++)
        {
            $arr = str_split($arr);
            return $arr;
        }
    }
    return [];
}
var_dump(convertToArray('Hello Guys!'));
echo '<br>';

//Convert to Null
function convertToNull(int $notNull): ?int {
    if ($notNull < 100)
    {
        return $notNull;
    }
    return null;
}
var_dump(convertToNull(200));
echo '<br>';
