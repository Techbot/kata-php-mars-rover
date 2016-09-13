<?php

namespace spec\Application;

use Application\Position;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PositionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Position::class);
    }
}
