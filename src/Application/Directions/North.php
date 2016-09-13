<?php

namespace Application\Directions;

use Application\Direction;
use Application\Rover;

class North implements Direction
{
    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new West());
    }

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new East());
    }

    public function moveForward(Rover $rover)
    {
        // TODO: Implement moveForward() method.
    }

    public function moveBackward(Rover $rover)
    {
        // TODO: Implement moveBackward() method.
    }
}
