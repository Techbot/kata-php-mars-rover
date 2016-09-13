<?php

namespace Application\Directions;

use Application\Direction;
use Application\Rover;

class West implements Direction
{
    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new South());
    }

    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new North());
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
