<?php

namespace tests\AutoProtect\Knapsack\Scenarios;

use AutoProtect\Knapsack\Collection;
use PHPUnit\Framework\TestCase;

class CallableFunctionNamesTest extends TestCase
{
    /**
     * Example that it's possible to use callable function names as arguments.
     */
    public function testIt()
    {
        $result = Collection::from([2, 1])
            ->concat([3, 4])
            ->sort('\AutoProtect\Knapsack\compare')
            ->values()
            ->toArray();

        $expected = [1, 2, 3, 4];

        $this->assertEquals($expected, $result);
    }
}
