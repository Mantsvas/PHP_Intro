<?php
namespace {
    class HomeWork
    {
        public function calculateHomeWorkSum(...$numbers)
        {
            $sum = 0;
            foreach ($numbers as $number) {
                $sum += $number;
            }
            echo  __FUNCTION__.": $sum </br>";
            return $sum;
        }
    }
}

namespace Nfq\Akademija\Not_Typed {
    class HomeWork
    {
        public function calculateHomeWorkSum(...$numbers) :int
        {
            $sum = 0;
            foreach ($numbers as $number) {
                $sum += $number;
            }
            echo  __NAMESPACE__.'\\'.__FUNCTION__.": $sum </br>";
            return $sum;
        }
    }
}

namespace Nfq\Akademija\Soft {
    class HomeWork
    {
        public function calculateHomeWorkSum(int...$numbers) :int
        {
            $sum = 0;
            foreach ($numbers as $number) {
                $sum += $number;
            }
            echo  __NAMESPACE__.'\\'.__FUNCTION__.": $sum </br>";
            return $sum;
        }
    }
}
