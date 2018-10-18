<?php
namespace {
    function calculateHomeWorkSum(...$numbers)
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        echo  __FUNCTION__.":". $sum ."</br>";
        return $sum;
    }
}

namespace Nfq\Akademija\Not_Typed {

    function calculateHomeWorkSum(...$numbers) :int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        echo  __FUNCTION__.":". $sum ."</br>";
        return $sum;
    }

}

namespace Nfq\Akademija\Soft {

    function calculateHomeWorkSum(int...$numbers) :int
    {
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        echo  __FUNCTION__.":". $sum ."</br>";
        return $sum;
    }

}
