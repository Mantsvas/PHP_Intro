<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;


function calculateHomeWorkSum2(int ...$numbers) :int
{
    $sum = 0;
    foreach ($numbers as $number) {
        echo$number;
        $sum += $number;
    }
    return $sum;
}

function calculateHomeWorkSum(...$numbers) :int
{
    $sum = calculateHomeWorkSum2(...$numbers);
    echo __FUNCTION__.":$sum<br>";
    return $sum;
}
