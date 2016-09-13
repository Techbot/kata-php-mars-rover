<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 13/09/16
 * Time: 22:38
 */
class MoveForwardCommand extends AbstractCommand
{
    /**
     * @throws CollisionDetectedException
     */
    public function execute()
    {
        $this->rover->moveForward();
    }
}