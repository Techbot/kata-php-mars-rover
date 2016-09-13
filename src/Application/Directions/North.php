<?php

namespace Application\Directions;

class North
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
}
