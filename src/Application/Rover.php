<?php

namespace Application;

class Rover
{
    private $moved = false;
    private $direction;

    function __construct()
    {
        $x=5;
        $y=5;
        $this->grid = new Grid($x,$y);
    }

    public function compare($instructions)
    {
        foreach ($instructions as $instruction) {
            echo('ins:' .$instruction);
        }
        $this->moved = true;
        return ;
    }

    public function getMoved()
    {
        return $this->moved;
    }
    /**
     * @return Direction
     */
    public function getDirection()
    {
        return $this->direction;
    }
    /**
     * @param Direction $direction
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
    }
    /**
     * @return Grid
     */
    public function getGrid()
    {
        return $this->grid;
    }
    /**
     * @return Position
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @param Position $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function turnLeft()
    {
        $this->direction->turnLeft($this);
    }
    public function turnRight()
    {
        $this->direction->turnRight($this);
    }
    /**
     * @throws CollisionDetectedException
     */
    public function moveForward()
    {
        $this->direction->moveForward($this);
    }
    /**
     * @throws CollisionDetectedException
     */
    public function moveBackward()
    {
        $this->direction->moveBackward($this);
    }
}
