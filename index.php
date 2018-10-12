<?php

require __DIR__ . '/vendor/autoload.php';

use Nfq\Akademija\Not_Typed\HomeWork as Not_Typed;
use Nfq\Akademija\Soft\HomeWork as Soft;
use Nfq\Akademija\Strict\HomeWork as Strict;

Not_Typed::calculateHomeWorkSum(3,2.2,'1');
HomeWork::calculateHomeWorkSum(3,2.2,'1');
Soft::calculateHomeWorkSum(3,2.2,'1');
Strict::calculateHomeWorkSum(3,2.2,'1');
