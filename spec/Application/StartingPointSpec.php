<?php

namespace spec\Application;

use Application\StartingPoint;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StartingPointSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(StartingPoint::class);
    }
}
