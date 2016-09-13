<?php

namespace spec\Application\Directions;

use Application\Directions\West;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(West::class);
    }
}
