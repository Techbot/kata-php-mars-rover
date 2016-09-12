<?php

namespace Application;

class Rover
{
    private $moved = false;

    function __construct()
    {
        $this->grid = new Grid();
    }

    public function compare($instructions)
    {
        foreach ($instructions as $instruction) {
            print_r($instruction);
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
