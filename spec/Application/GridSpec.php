<?php

namespace spec\Application;

use Application\Grid;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GridSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(5, 5);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Grid::class);
    }

}
