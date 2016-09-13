<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 22:39
 */


class TurnLeftCommand extends AbstractCommand
{
    public function execute()
    {
        $this->rover->turnLeft();
    }
}