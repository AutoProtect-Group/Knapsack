<?php

namespace spec\DusanKasan\Knapsack\Exceptions;

use DusanKasan\Knapsack\Exceptions\NoMoreItems;
use DusanKasan\Knapsack\Exceptions\RuntimeException;
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
