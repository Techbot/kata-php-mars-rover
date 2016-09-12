<?php

namespace spec\Application;

use Application\Rover;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoverSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Rover::class);
    }
}
