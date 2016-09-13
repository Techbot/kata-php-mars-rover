<?php

namespace Application;

class Rover
{
    private $moved = false;

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

    public function setDirection($facing)
    {

    }

    public function getMoved()
    {
        return $this->moved;
    }


}
