<?php

namespace Application\Directions;

class East
{
    /**
     * @param Rover $rover
     */
    public function turnLeft(Rover $rover)
    {
        $rover->setDirection(new North());
    }
    /**
     * @param Rover $rover
     */
    public function turnRight(Rover $rover)
    {
        $rover->setDirection(new South());
    }

    /**
     * @param Rover $rover
     */
    public function moveForward(Rover $rover)
    {
        $rover->setPosition();
    }
    /**
     * @param Rover $rover
     */
    public function moveBackward(Rover $rover)
    {
        $rover->setPosition();
    }
}
