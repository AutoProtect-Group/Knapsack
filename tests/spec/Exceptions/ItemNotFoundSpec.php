<?php

namespace spec\AutoProtect\Knapsack\Exceptions;

use AutoProtect\Knapsack\Exceptions\ItemNotFound;
use PhpSpec\ObjectBehavior;
use RuntimeException;

/**
 * @mixin ItemNotFound
 */
class ItemNotFoundSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RuntimeException::class);
    }
}
