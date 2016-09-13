<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 22:40
 */

class TurnRightCommand extends AbstractCommand
{
    public function execute()
    {
        $this->rover->turnRight();
    }
}