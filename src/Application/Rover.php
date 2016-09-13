<?php

namespace Application;

class Rover
{
    private $moved = false;
    private $direction;
    private $position;
    /** @var Obstacle $obstacle */
    private $obstacle;

    function __construct()
    {
        $x=5;
        $y=5;
        $this->grid = new Grid($x,$y);
        $this->initDictionary();
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

    /**
     * @param $instructions

     */
    private function processInstructions($instructions)
    {
        $commands = array();
        for ($i = 0; $i < strlen($instructions); $i++) {
            $commands[] = $this->parse(substr($instructions, $i, 1));
        }
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    /**
     * @param string $instructions
     */
    public function moveRover($instructions)
    {
        try {
            $this->processInstructions($instructions)->execute();
        } catch (CollisionDetectedException $collisionException) {
            $this->obstacle = $collisionException->getObstacle();
        }
    }

    private function initDictionary()
    {
        $this->dictionary = array(
            'F' => new MoveForwardCommand($this),
            'B' => new MoveBackwardCommand($this),
            'L' => new TurnLeftCommand($this),
            'R' => new TurnRightCommand($this),
        );
    }
    /**
     * @param string $instruction
     * @return Command
     */
    public function parse($instruction)
    {
        if (isset($this->dictionary[$instruction])) {
            return $this->dictionary[$instruction];
        } else {
            return new NullCommand($this);
        }
    }

}
