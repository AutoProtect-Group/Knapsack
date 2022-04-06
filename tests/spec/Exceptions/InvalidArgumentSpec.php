<?php

namespace spec\DusanKasan\Knapsack\Exceptions;

use DusanKasan\Knapsack\Exceptions\InvalidArgument;
use DusanKasan\Knapsack\Exceptions\RuntimeException;
use PhpSpec\ObjectBehavior;

/**
 * @mixin InvalidArgument
 */
class InvalidArgumentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
