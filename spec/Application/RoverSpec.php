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

    function it_compares_an_array(){
        $instructions =['L','F'];
        $compare = $this->compare($instructions);


    }

    function it_checks_if_moved(){

        $moved = $this->getMoved();


    }
}
