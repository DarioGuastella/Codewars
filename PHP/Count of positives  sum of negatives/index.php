<!-- kata link: https://www.codewars.com/kata/576bb71bbbcf0951d5000044/php -->
<?php
function countPositivesSumNegatives($input)
{
    $positivesCount = 0;
    $negativesSum = 0;

    if ($input === null || count($input) === 0) {
        return [];
    } else {
        foreach ($input as $num) {
            ($num > 0) ? $positivesCount++ : $negativesSum += $num;
        }
    }

    return [$positivesCount, $negativesSum];
}
