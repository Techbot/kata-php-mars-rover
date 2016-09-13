<?php

namespace spec\Application\Directions;

use Application\Directions\East;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EastSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(East::class);
    }
}
