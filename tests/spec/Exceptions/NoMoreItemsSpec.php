<?php

namespace spec\AutoProtect\Knapsack\Exceptions;

use AutoProtect\Knapsack\Exceptions\NoMoreItems;
use AutoProtect\Knapsack\Exceptions\RuntimeException;
use PhpSpec\ObjectBehavior;

/**
 * @mixin NoMoreItems
 */
class NoMoreItemsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
