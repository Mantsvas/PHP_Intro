<?php
declare(strict_types=1);

namespace Nfq\Akademija\Strict;

class HomeWork
{
    public function calculateHomeWorkSum(int...$numbers) :int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        echo __NAMESPACE__.'\\'.__FUNCTION__.": $sum </br>";
        return $sum;
    }
}
