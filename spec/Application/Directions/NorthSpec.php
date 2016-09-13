<?php

namespace spec\Application\Directions;

use Application\Directions\North;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NorthSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(North::class);
    }
}
