<?php

namespace pph21;

class FourthRuleCalculator extends AbstractCalculator{

    function maxPkp(): float
    {
        return 10000000000000000000000000000;
    }

    function minPkp(): float
    {
        return 500000000;
    }

    function taxPercentage(): float
    {
        return 0.3;
    }
}