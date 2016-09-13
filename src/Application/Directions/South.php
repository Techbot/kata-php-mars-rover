<?php

namespace Application\Directions;

class South
{
    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new East());
    }

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new West());
    }
}
