<?php

namespace spec\Application\Directions;

use Application\Directions\South;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SouthSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(South::class);
    }
}
