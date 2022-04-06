<?php

namespace spec\AutoProtect\Knapsack\Exceptions;

use AutoProtect\Knapsack\Exceptions\InvalidArgument;
use AutoProtect\Knapsack\Exceptions\RuntimeException;
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
