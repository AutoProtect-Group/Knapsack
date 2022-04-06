<?php

namespace spec\AutoProtect\Knapsack\Exceptions;

use AutoProtect\Knapsack\Exceptions\RuntimeException;
use PhpSpec\ObjectBehavior;

class InvalidReturnValueSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
