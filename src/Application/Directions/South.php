<?php

namespace Application\Directions;

use Application\Direction;
use Application\Rover;

class South implements Direction
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

    public function moveForward(Rover $rover)
    {
        // TODO: Implement moveForward() method.
    }

    public function moveBackward(Rover $rover)
    {
        // TODO: Implement moveBackward() method.
    }
}
